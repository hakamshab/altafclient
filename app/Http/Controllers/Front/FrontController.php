<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller {
    public function index() {
        return view( 'front/index' );
    }

    public function recharge() {
        return view( 'front/recharge' );
    }

    public function cashier() {
        return view( 'front/cashier' );
    }

    public function withdrawl() {
        return view( 'front/withdrawl' );
    }

    public function invite() {
        return view( 'front/invite' );
    }

    public function profile() {
        return view( 'front/profile' );
    }
}