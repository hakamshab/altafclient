@extends('Front.layout.master')
@section('content')
<section class="bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <p class="text-center">Invite</p>
            </div>
            <div class="col-sm-12 col-lg-12 col-md-12 col-xl-12 mt-5">
                <p class="text-dark">Agent Rewards：</p>
                <div class="card">
                    <div class="card-body">
                        <p>Level 1 = <span class="text-danger">25%</span></p>
                        <p>Level 2 = <span class="text-danger">3%</span></p>
                        <p>Level 3 = <span class="text-danger">2%</span></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5 mb-5">
                <div class="card">
                    <div class="card-body">
                        <label for="">Invitation link：</label>
                        <div class="card">
                            <div class="card-body">
                                <p>http://www.awes-ome77.com/index/user/register/invite_code/z5u86.html</p>
                            </div>
                        </div>
                        <a href="" class="btn btn-success mt-3">Copy</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12  mb-5">
                <div class="card">
                    <div class="card-body">
                        <label for="">Invitation code：</label>
                        <div class="card">
                            <div class="card-body">
                                <p>z5u86</p>
                            </div>
                        </div>
                        <a href="" class="btn btn-success mt-3">Copy</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mb-5">
                <img src="{{asset('Front/img/qr.png')}}" alt="" srcset="">
            </div>
        </div>
    </div>
</section>
@endsection