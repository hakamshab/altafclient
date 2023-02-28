@extends('Front.layout.master')
@section('content')
<!-- Slider Sec Start  -->
<section class="slider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img width="100%" height="100%" class="d-block w-100" src="{{asset('Front/img/car4.jpg')}}"
                    alt="First slide">
            </div>
            <div class="carousel-item">
                <img width="100%" height="100%" class="d-block w-100" src="{{asset('Front/img/car5.jpg')}}"
                    alt="Second slide">
            </div>
            <div class="carousel-item">
                <img width="100%" height="100%" class="d-block w-100" src="{{asset('Front/img/car7.jpg')}}"
                    alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!-- Slider Sec End  -->
<section class="bg-dark">
    <div class="container">
        <div class="row  text-light text-center pt-3">
            <div class="col-4">
                <h6>Assets</h6>
                <p>100.00</p>
            </div>
            <div class="col-4">
                <h6>Recharge</h6>
                <p>0</p>
            </div>
            <div class="col-4">
                <h6>Income</h6>
                <p>0</p>
            </div>
        </div>
    </div>
</section>
<!-- small header Sec End  -->
<!-- <hr> -->
<section class="small_header">
    <div class="container-fluid">
        <div class="row text-center pt-3">
            <div class="col-3">
                <h3>
                    <a href="{{url('recharge')}}">
                        <img width="10%" src="{{asset('Front/img/wallet.svg')}}" alt=""> <br>
                        <span>Recharge</span>
                    </a>
                </h3>
            </div>
            <div class="col-3">
                <h3>
                    <a href="{{url('withdrawl')}}">
                        <img width="10%" src="{{asset('Front/img/with.svg')}}" alt=""> <br>
                        <span>Withdrawl</span>
                    </a>

                </h3>
            </div>
            <div class="col-3">
                <h3>
                    <a href="" data-toggle="modal" data-target="#online">
                        <img width="10%" src="{{asset('Front/img/online.svg')}}" alt=""> <br>
                        <span>Online</span>
                    </a>

                </h3>
            </div>
            <div class="col-3">
                <h3>
                    <a href="{{url('invite')}}">
                        <img width="10%" src="{{asset('Front/img/invite.svg')}}" alt=""> <br>
                        <span>Invite</span>
                    </a>

                </h3>
            </div>
        </div>
</section>
<hr>
<!-- samll Header Sec End  -->
<!-- Project Sec End  -->
<section class="card_data">
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-sm-6 col-md-6 col-xl-6 col-lg-6 mt-3">
                <div class="card ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <img src="{{asset('Front/img/car1.jpg')}}" width="100%" alt="" srcset="">
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <b>Product price</b>
                                    </div>
                                    <div class="col-6">
                                        <b>: ₹498</b>
                                    </div>
                                    <div class="col-6">
                                        <b>Daily income</b>
                                    </div>
                                    <div class="col-6">
                                        <b>: ₹110</b>
                                    </div>
                                    <div class="col-6">
                                        <b>Total income</b>
                                    </div>
                                    <div class="col-6">
                                        <b>: ₹12100</b>
                                    </div>
                                    <div class="col-6">
                                        <b>Complete cycle</b>
                                    </div>
                                    <div class="col-6">
                                        <b>: 110 Day</b>
                                    </div>
                                    <div class="col-12 text-center mt-2">
                                        <a href="" class="btn btn-success">Buy Now</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-xl-6 col-lg-6 mt-3">
                <div class="card ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <img src="{{asset('Front/img/car1.jpg')}}" width="100%" alt="" srcset="">
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <b>Product price</b>
                                    </div>
                                    <div class="col-6">
                                        <b>: ₹498</b>
                                    </div>
                                    <div class="col-6">
                                        <b>Daily income</b>
                                    </div>
                                    <div class="col-6">
                                        <b>: ₹110</b>
                                    </div>
                                    <div class="col-6">
                                        <b>Total income</b>
                                    </div>
                                    <div class="col-6">
                                        <b>: ₹12100</b>
                                    </div>
                                    <div class="col-6">
                                        <b>Complete cycle</b>
                                    </div>
                                    <div class="col-6">
                                        <b>: 110 Day</b>
                                    </div>
                                    <div class="col-12 text-center mt-2">
                                        <a href="" class="btn btn-success">Buy Now</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-xl-6 col-lg-6 mt-3">
                <div class="card ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <img src="{{asset('Front/img/car1.jpg')}}" width="100%" alt="" srcset="">
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <b>Product price</b>
                                    </div>
                                    <div class="col-6">
                                        <b>: ₹498</b>
                                    </div>
                                    <div class="col-6">
                                        <b>Daily income</b>
                                    </div>
                                    <div class="col-6">
                                        <b>: ₹110</b>
                                    </div>
                                    <div class="col-6">
                                        <b>Total income</b>
                                    </div>
                                    <div class="col-6">
                                        <b>: ₹12100</b>
                                    </div>
                                    <div class="col-6">
                                        <b>Complete cycle</b>
                                    </div>
                                    <div class="col-6">
                                        <b>: 110 Day</b>
                                    </div>
                                    <div class="col-12 text-center mt-2">
                                        <a href="" class="btn btn-success">Buy Now</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-xl-6 col-lg-6 mt-3">
                <div class="card ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <img src="{{asset('Front/img/car1.jpg')}}" width="100%" alt="" srcset="">
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <b>Product price</b>
                                    </div>
                                    <div class="col-6">
                                        <b>: ₹498</b>
                                    </div>
                                    <div class="col-6">
                                        <b>Daily income</b>
                                    </div>
                                    <div class="col-6">
                                        <b>: ₹110</b>
                                    </div>
                                    <div class="col-6">
                                        <b>Total income</b>
                                    </div>
                                    <div class="col-6">
                                        <b>: ₹12100</b>
                                    </div>
                                    <div class="col-6">
                                        <b>Complete cycle</b>
                                    </div>
                                    <div class="col-6">
                                        <b>: 110 Day</b>
                                    </div>
                                    <div class="col-12 text-center mt-2">
                                        <a href="" class="btn btn-success">Buy Now</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-xl-6 col-lg-6 mt-3">
                <div class="card ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <img src="{{asset('Front/img/car1.jpg')}}" width="100%" alt="" srcset="">
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <b>Product price</b>
                                    </div>
                                    <div class="col-6">
                                        <b>: ₹498</b>
                                    </div>
                                    <div class="col-6">
                                        <b>Daily income</b>
                                    </div>
                                    <div class="col-6">
                                        <b>: ₹110</b>
                                    </div>
                                    <div class="col-6">
                                        <b>Total income</b>
                                    </div>
                                    <div class="col-6">
                                        <b>: ₹12100</b>
                                    </div>
                                    <div class="col-6">
                                        <b>Complete cycle</b>
                                    </div>
                                    <div class="col-6">
                                        <b>: 110 Day</b>
                                    </div>
                                    <div class="col-12 text-center mt-2">
                                        <a href="" class="btn btn-success">Buy Now</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-xl-6 col-lg-6 mt-3">
                <div class="card ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <img src="{{asset('Front/img/car1.jpg')}}" width="100%" alt="" srcset="">
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <b>Product price</b>
                                    </div>
                                    <div class="col-6">
                                        <b>: ₹498</b>
                                    </div>
                                    <div class="col-6">
                                        <b>Daily income</b>
                                    </div>
                                    <div class="col-6">
                                        <b>: ₹110</b>
                                    </div>
                                    <div class="col-6">
                                        <b>Total income</b>
                                    </div>
                                    <div class="col-6">
                                        <b>: ₹12100</b>
                                    </div>
                                    <div class="col-6">
                                        <b>Complete cycle</b>
                                    </div>
                                    <div class="col-6">
                                        <b>: 110 Day</b>
                                    </div>
                                    <div class="col-12 text-center mt-2">
                                        <a href="" class="btn btn-success">Buy Now</a>
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
<!-- Project Sec End  -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                लैंड रोवर से जुड़ें और 100 रुपये मुफ्त पाएं
                अपनी विशेष टीम बनाएं और लैंड रोवर के अनन्य ऑनलाइन प्रमोटर बनें
                प्रतिदिन उच्च टीम कमीशन प्राप्त करें
                जब तक आपके पास अपनी खुद की टीम बनाने की क्षमता है, आधिकारिक ग्राहक सेवा से संपर्क करें, और आपको हर दिन
                अपनी टीम के रिचार्ज के लिए %5 के अतिरिक्त रिचार्ज इनाम के साथ पुरस्कृत किया जाएगा।
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="online" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Online Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-danger">
                    Online Time : 08:00-22:30
                </p>
                <div>
                    <a href="" class="btn btn-lg btn-success">Telegram Live Chat</a>
                    <a href="" class="btn btn-lg btn-success">Telegram Channel</a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
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