@extends('Front.layout.master')
@section('content')
<section class="bg-success header_boottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3 class="text-light">My Team</h3>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <form action="">
            <div class="row mb-4 mt-4">
                <div class="col-sm-2 col-md-2 col-xl-2 col-lg-2">
                    <label for="">Start Date</label>
                    <input type="date" name="date1" id="" class="form-control">
                </div>
                <div class="col-sm-2 col-md-2 col-xl-2 col-lg-2">
                    <label for="">End Date</label>
                    <input type="date" name="date2" id="" class="form-control">
                </div>
                <div class="col-sm-2 col-md-2 col-xl-2 col-lg-2">
                    <br>
                    <input type="submit" value="Search" class=" btn btn-info mt-2">
                </div>
            </div>
        </form>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-4 card">
                <div class="">
                    <p>Team assets<br>₹0.00</p>
                </div>
            </div>
            <div class="col-4 card">
                <div class="">
                    <p>Team Recharge(₹) <br>₹0.00</p>
                </div>
            </div>
            <div class="col-4 card">
                <div class="">
                    <p>Team Number<br>0</p>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<div id="exTab1" class="container">
    <ul class="nav nav-pills1">
        <li class="active bg-dark">
            <a href="#1a" data-toggle="tab">
                <h4>First</h4>
            </a>
        </li>
        <li class="bg-dark text-light">
            <a href="#2a" data-toggle="tab">
                <h4>Second</h4>
            </a>
        </li>
        <li class="bg-dark text-light">
            <a href="#3a" data-toggle="tab">
                <h4>Third</h4>
            </a>
        </li>
    </ul>

    <div class="tab-content clearfix text-center mt-5">
        <hr>
        <div class="tab-pane active" id="1a">
            <h3>First No Data</h3>
        </div>
        <div class="tab-pane" id="2a">
            <h3>Second No Data</h3>
        </div>
        <div class="tab-pane" id="3a">
            <h3>Third No Data</h3>
        </div>
    </div>
</div>

@endsection