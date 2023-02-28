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

    public function plan_record() {
        return view( 'front/plan_record' );
    }

    public function account_record() {
        return view( 'front/account_record' );
    }

    public function security_center() {
        return view( 'front/security_center' );
    }

    public function forget_password() {
        return view( 'front/forget_password' );
    }

    public function withdrawal_forget_password() {
        return view( 'front/withdrawal_forget_password' );
    }

    public function about() {
        return view( 'front/about' );
    }

    public function team() {
        return view( 'front/team' );
    }
}