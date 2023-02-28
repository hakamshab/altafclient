@extends('Front.layout.master')
@section('content')
<section class="header_boottom">
    <div class="container mt-5">
        <div class="row ">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 bg-success text-center">
                <div class="mt-2 mb-2">
                    <span class="text-center text-light">My bank</span>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 card">
                <form class="form" action="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xl-6 col-lg-6 mt-4">
                                <label for="">Full Name</label>
                                <input type="text" name="" placeholder="Full Name" class="form-control" id="">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xl-6 col-lg-6 mt-4">
                                <label for="">Phone Number</label>
                                <input type="number" placeholder="Phone Number" class="form-control" name="" id="">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xl-6 col-lg-6 mt-4">
                                <label for="">Bank Account</label>
                                <input type="number" placeholder="Bank Account" class="form-control" name="" id="">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xl-6 col-lg-6 mt-4">
                                <label for="">Bank Name</label>
                                <input type="text" placeholder="Bank Name" class="form-control" name="" id="">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xl-6 col-lg-6 mt-4">
                                <label for="">IFSC</label>
                                <input type="text" placeholder="IFSC" class="form-control" name="" id="">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xl-6 col-lg-6 mt-4">
                                <label for="">Withdrawal Password</label>
                                <input type="text" placeholder="Withdrawal Password" class="form-control" name="" id="">
                            </div>
                            <div class="col-md-12 mt-5 mb-3 col-sm-12 col-xl-12 col-lg-12">
                                <input type="submit" value="Confirm" class="btn btn-dark form-control">
                            </div>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
</section>
@endsection