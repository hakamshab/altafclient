@extends('Front.layout.master')
@section('content')
<section class="bg-success header_boottom">
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12 text-center ">
                <h1 class="text-light">Plan Record</h1>
            </div>
        </div>
    </div>
</section>
<div id="exTab1" class="container">
    <ul class="nav nav-pills">
        <li class="active bg-dark">
            <a href="#1a" data-toggle="tab">
                <h3>Income</h3>
            </a>
        </li>
        <li class="bg-dark text-light">
            <a href="#2a" data-toggle="tab">
                <h3>Finish</h3>
            </a>
        </li>
    </ul>

    <div class="tab-content clearfix text-center mt-5">
        <hr>
        <div class="tab-pane active" id="1a">
            <h3>Income Data</h3>
        </div>
        <div class="tab-pane" id="2a">
            <h3>Finish Data</h3>
        </div>
    </div>
</div>

@endsection