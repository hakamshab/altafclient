@extends('Front.layout.master')
@section('content')
<section class="bg-success header_boottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="text-light">Account Record</h1>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <form action="">
            <div class="row mb-4 mt-4">
                <div class="col-2">
                    <label for="">Start Date</label>
                    <input type="date" name="date1" id="" class="form-control">
                </div>
                <div class="col-2">
                    <label for="">End Date</label>
                    <input type="date" name="date2" id="" class="form-control">
                </div>
                <div class="col-2">
                    <br>
                    <input type="submit" value="Search" class=" btn btn-info mt-2">
                </div>
            </div>
        </form>
    </div>
</section>
<hr>
<div id="exTab1" class="container">
    <ul class="nav nav-pills1">
        <li class="active bg-primary">
            <a href="#1a" data-toggle="tab">
                <h3>All Types</h3>
            </a>
        </li>
        <li class="bg-primary text-light">
            <a href="#2a" data-toggle="tab">
                <h3>Withdrawals</h3>
            </a>
        </li>
        <li class="bg-primary text-light">
            <a href="#3a" data-toggle="tab">
                <h3>Recharge</h3>
            </a>
        </li>
    </ul>

    <div class="tab-content clearfix text-center mt-5">
        <hr>
        <div class="tab-pane active" id="1a">
            <h3>All Types Data</h3>
        </div>
        <div class="tab-pane" id="2a">
            <h3>Withdrawals Data</h3>
        </div>
        <div class="tab-pane" id="3a">
            <h3>Recharge Data</h3>
        </div>
    </div>
</div>

@endsection