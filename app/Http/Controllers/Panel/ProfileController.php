<?php
/**
 * Created by PhpStorm.
 * User: milad
 * Date: 7/22/20
 * Time: 6:25 PM
 */

namespace App\Http\Controllers\Panel;


use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexAction()
    {
        /** @var User user */
        $user = Auth::user();
        return view('panel.profile.indexAction', ['user' => $user]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function editAction()
    {
        /** @var User $user */
        $user = Auth::user();
        return view('panel.profile.editAction', ['user' => $user]);
    }

    /**
     * @param Request $request
     * @return mixed
     * @throws \Exception
     */
    public function editSaveAction(Request $request)
    {
        $this->validateForm($request);
        $phone = $request->get('phone_number');
        $email = $request->get('email');
        $name = $request->get('name');
        /** @var User $user */
        $user = Auth::user();

        $data = [
            'name' => $name,
            'email' => $email,
            'phone_number' => $phone
        ];
        $emailNeedVerification = $user->getEmail() ? $user->getEmail()  != $email : true;

        if ($emailNeedVerification) {
            $data['email_verified_at'] = null;
        }

        $phoneNeedsVerification = $user->getPhone() != $phone;
        if ($phoneNeedsVerification) {
            $data['phone_verified_at'] = null;
            $data['status'] = User::STATUS_NEW;
        }

        $user->update($data);

        return redirect()->route('panel.profile')->withStatus(__('تغییر یافت.'));
    }

    private function validateForm(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'regex:/(09)[0-9]{9}/', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:255']
        ]);
    }

    public function sendVerificationSms()
    {
        $ttl = 180;
        /** @var User $user */
        $user = Auth::user();
        if ($user->isPhoneVerified()) {
            return redirect()->route('panel.profile');
        }
        $keyData = \Cache::store('file')->get($this->getSmsCacheKey($user->getId()));
        if (!$keyData) {
            $keyData = [
                'code' => rand(10000, 99999),
                'time' => Carbon::now()
            ];
            \Cache::store('file')->set($this->getSmsCacheKey($user->getId()), $keyData, $ttl);
        }
        $timePassed = Carbon::now()->diffInSeconds($keyData['time']);
        $remainingTime = $ttl - $timePassed;
        $body = View('panel.profile.verification', ['code' => $keyData['code']])->render();
        try {
            $api = new \Kavenegar\KavenegarApi("646D4F564B626248587264375A3058444F354C496A61664967353671374368326E42464C4D2F50464C61633D");
            $sender = "10004346";
            $receptor = array($user->getPhone());
            $api->Send($sender, $receptor, $body);

            return view('panel.profile.verificationAction', ['time' => $remainingTime]);
        } catch (\Kavenegar\Exceptions\ApiException $e) {
            return new JsonResponse(['message' => 'error'], 400);
        } catch (\Kavenegar\Exceptions\HttpException $e) {
            return new JsonResponse(['message' => 'error'], 400);
        } catch (\Exception $exception) {
            return new JsonResponse(['message' => $exception->getMessage()], 400);
        }
    }


    public function verifySmsCode(Request $request)
    {
        $this->validate($request, [
            'code' => ['required', 'numeric']
        ]);

        $code = $request->get('code');


        /** @var User $user */
        $user = Auth::user();
        if ($user->isPhoneVerified()) {
            return redirect()->back()->withErrors(['code' => 'قبلا تایید شده است.']);
        }
        $userCodeData = \Cache::store('file')->get($this->getSmsCacheKey($user->getId()));
        $userCode = $userCodeData['code'];
        if ($userCode == $code) {
            $user->update(['status' => User::STATUS_CONFIRMED, 'phone_verified_at' => Carbon::now()]);
        } else {
            return redirect()->back()->withErrors(['code' => 'کد وارد شده اشتباه است.']);
        }
        \Cache::store('file')->forget($this->getSmsCacheKey($user->getId()));
        return redirect()->route('panel.profile')->withStatus(__('تایید شد.'));
    }

    private function getSmsCacheKey($userId): string
    {
        return 'user:sms:verification:' . $userId;
    }
}