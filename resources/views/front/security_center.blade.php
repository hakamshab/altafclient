@extends('Front.layout.master')
@section('content')
<section class="bg-success header_boottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="text-light">Security center</h1>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
                <div class="center bg-light">
                    <a href="{{url('withdrawl')}}" class="form-control"><i class="fa fa-university"
                            aria-hidden="true"></i> My Bank</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
                <div class="center bg-light">
                    <a href="{{url('forget_password')}}" class="form-control"><i class="fa fa-lock"
                            aria-hidden="true"></i>
                        Change Login Password</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
                <div class="center bg-light">
                    <a href="{{url('withdrawal_forget_password')}}" class="form-control"><i class="fa fa-lock"
                            aria-hidden="true"></i>
                        Change Withdrawal Password</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection