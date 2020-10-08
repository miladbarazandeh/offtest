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
}
