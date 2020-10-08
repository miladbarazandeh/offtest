<?php

namespace App\Http\Controllers;

use App\Models\SellerPromotion;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function indexAction()
    {
        $data['promotions'] = SellerPromotion::getActivePromotions();
        return view('index', $data);
    }

//    /**
//     * Show the application dashboard.
//     * @param $id
//     * @return \Illuminate\Contracts\Support\Renderable
//     *
//     */
    public function productDetailAction($id)
    {
//        $promotion = SellerPromotion::getById($id);
//
//        if (!$promotion) {
//            return redirect()->route('index');
//        }

        $data['promotions'] = SellerPromotion::getActivePromotions();
        return view('index', $data);

        return view('product');
    }
}
