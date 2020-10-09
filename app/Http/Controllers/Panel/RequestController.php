<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\PromotionRequest;
use App\Models\SellerPromotion;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class RequestController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function indexAction()
    {
        /** @var User $user */
        $user = Auth()->user();
        $requests = PromotionRequest::getNewRequestsByUserId($user->getId());

        $requestsData = [];

        /** @var PromotionRequest $request */
        foreach ($requests as $request) {
            $requestsData[] = [
                'promotion' => $request->getPromotion(),
                'request' => $request
            ];
        }

        $data['requests'] = $requestsData;


        return view('panel.requests.indexAction', $data);
    }

    public function addToCartAction(int $productId)
    {
        $user = Auth()->user();
        $product = SellerPromotion::getById($productId);

        if (!$product || !$product->getIsActive() || $product->getStatus() != SellerPromotion::STATUS_CONFIRMED) {
            throw new NotFoundHttpException();
        }

        $request = new PromotionRequest(
            [
                'user_id' => $user->id,
                'promotion_id' => $productId
            ]
        );

        $request->save();

        return redirect()->route('panel.requests')->withStatus(__('درخواست جدید ثبت شد. لطفا قبل از اقدام به خرید، درخواست خود را تایید کنید.'));
    }
}
