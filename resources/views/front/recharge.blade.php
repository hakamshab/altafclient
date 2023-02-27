@extends('Front.layout.master')
@section('content')
<section>
    <div class="container mt-5">
        <div class="row ">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 bg-success text-center">
                <div class="mt-2 mb-2">
                    <span class="text-center text-light">Recharge</span>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 card">
                <form class="form" action="{{url('cashier')}}">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xl-12 col-lg-12">
                                <label for="">Enter Amount</label>
                                <input type="text" name="" placeholder="Enter Amount" class="form-control" id="">
                            </div>
                            <div class="col-md-12 col-sm-12 col-xl-12 col-lg-12 mt-4">
                                <label for="">Select Payment Channel</label>
                                <select name="" id="" class="form-control">
                                    <option value="" disabled selected>Select Payment Channel</option>
                                    <option value="">O-land Rover Hot</option>
                                    <option value="">R-land Rover </option>
                                    <option value="">E-land Rover </option>
                                </select>
                            </div>
                            <div class="col-md-12 mt-5 mb-3 col-sm-12 col-xl-12 col-lg-12">
                                <input type="submit" value="Confirm Recharge" class="btn btn-dark form-control">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 mt-2 reachargep">
                                <p> * Fill in the UTR number correctly, and the funds will arrive quickly. </p>
                                <p> * If the funds do not arrive in time, please contact APP online customer service
                                    immediately.</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
</section>
@endsection