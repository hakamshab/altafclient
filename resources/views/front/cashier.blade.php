@extends('Front.layout.master')
@section('content')
<section class="main_title_wraper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 cashier">
                <br>
                <br>
                <h1>ptmpay</h1> <br>
                <h5>UPI Cashier</h5>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12 text-center mt-5">
                <h1>₹ 400.00</h1>
                <p>Serial No: 202302260444158848cdb747</p>
            </div>

            <div class="col-md-12 col-sm-12 col-xl-12 col-lg-12">
                <hr>
                <p><span class="text-danger">Step 1: Transfer</span> <span class="text-warning">₹ 400.00 to the
                        following upi</span></p>
                <hr>
            </div>
            <div class="col-md-12 col-sm-12 col-xl-12 col-lg-12 upiid">
                <div class="card bg-dark text-center">
                    <div class="card-body">
                        <b class="text-light">abcdefhgcfgc123@pnb</p>
                    </div>
                </div>
                <div class="button text-center mt-5">
                    <a href="" class="btn btn-outline-primary">Copy Beneficiary UPI</a>
                </div>
                <div>
                    <p class="text-dark">
                        1. Open your UPI wallet and complete the transfer
                    </p>
                    <p class="text-dark">
                        2. Record your reference No.(Ref No.) after payment
                    </p>
                    <hr>
                    <p>
                        <span class="text-danger"><i class="fa fa-youtube"></i></span> <span class="text-primary">How it
                            works ? need
                            help? click here！</span>
                    </p>
                    <hr>
                    <p class="text-danger">Step 2: Submit Ref No/Reference No/UTR</p>
                    <hr>
                    <input type="number" placeholder="Input 12-digit here" name="" class="form-control" id="">
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3 mb-5">
                <span class="text-dark">Generally, your transfer will be confirmed within 10 minutes</span>
                <div class="card bg-light mt-3 ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2 "></div>
                            <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 ">
                                <img width="100%" src="{{asset('Front/img/demo-1.png')}}" alt="" srcset="">
                            </div>
                            <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2 "></div>
                            <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2 "></div>
                            <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 ">
                                <img width="100%" src="{{asset('Front/img/demo-2.png')}}" alt="" srcset="">
                            </div>
                            <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2 "></div>
                            <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2 "></div>
                            <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 ">
                                <img width="100%" src="{{asset('Front/img/demo-3.png')}}" alt="" srcset="">
                            </div>
                            <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2 "></div>
                            <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2 "></div>
                            <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 ">
                                <img width="100%" src="{{asset('Front/img/demo-4.png')}}" alt="" srcset="">
                            </div>
                            <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2 "></div>
                            <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2 "></div>
                            <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 ">
                                <img width="100%" src="{{asset('Front/img/demo-5.png')}}" alt="" srcset="">
                            </div>
                            <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2 "></div>
                            <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2 "></div>
                            <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 ">
                                <img width="100%" src="{{asset('Front/img/demo-5.png')}}" alt="" srcset="">
                            </div>
                            <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2 "></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<a href="" class="btn btn-lg btn-primary Refbtn form-control">Submit Ref Number</a>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLongTitle">Cashier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-2">
                        <div class="icon text-info text-center">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-10">
                        <p class="text-dark">
                            After the payment is successful, you must coming back here to submit the Ref/UTR No.(12
                            digits) Only then your money be reached to the account.
                        </p>
                    </div>
                    div
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
@endsection
<script src="{{asset('Front/js/jquery.js')}}"></script>
<script>
$(document).ready(function() {
    $('#exampleModalCenter').modal('show');
});
</script>