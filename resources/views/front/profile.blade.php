@extends('Front.layout.master')
@section('content')
<section class="header_boottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12 col-xl-12 col-md-12 mt-5">
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 text-center mt-5">
                                <img class="text-center mb-3" src="{{asset('Front/img/logo.png')}}" alt=""
                                    style="width: 15%;border-radius: 10%;">
                                <h3>7896541230</h3>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 text-center mt-5 bg-dark">
                                <div class="row text-center text-light">
                                    <div class="col-4 mt-3">
                                        <p>Assets</p>
                                        <p>100.00</p>
                                    </div>
                                    <div class="col-4 mt-3">
                                        <p>Recharge</p>
                                        <p>0</p>
                                    </div>
                                    <div class="col-4 mt-3">
                                        <p>Income</p>
                                        <p>0</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 text-center mt-5">
                                <div class="row">
                                    <div class="col-sm-3 col-md-3 col-xl-3 col-lg-3 profildata mt-3">
                                        <a href="{{url('plan_record')}}">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img src="{{asset('Front/img/program.svg')}}" width="60px" alt=""
                                                        srcset="">
                                                    <p>Program Details</p>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="col-sm-3 col-md-3 col-xl-3 col-lg-3 profildata mt-3">
                                        <a href="{{url('account_record')}}">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img src="{{asset('Front/img/account.svg')}}" width="60px" alt=""
                                                        srcset="">
                                                    <p>Account Record</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-xl-3 col-lg-3 profildata mt-3">
                                        <a href="{{url('security_center')}}">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img src="{{asset('Front/img/personal.svg')}}" width="60px" alt=""
                                                        srcset="">
                                                    <p>Personal Information</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-xl-3 col-lg-3 profildata mt-3">
                                        <a href="{{url('about')}}">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img src="{{asset('Front/img/buil.png')}}" width="60px" alt=""
                                                        srcset="">
                                                    <p class="">Company</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container mt-3 mb-5">
        <div class="row">
            <div class="col-sm-12">
                <a href="" class="btn btn-dark form-control btn-lg">Logout</a>
            </div>
        </div>
    </div>
</section>
@endsection