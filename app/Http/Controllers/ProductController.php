<?php

namespace App\Http\Controllers;

use App\Models\SellerPromotion;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function indexAction(int $id)
    {
        $data['promotion'] = SellerPromotion::getById($id);
        return view('product', $data);
    }
}
