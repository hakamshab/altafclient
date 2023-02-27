@extends('Front.layout.master')
@section('content')
<!-- Header Sec Start  -->
<section class="header bg-dark text-light fixed-top">
    <div class="container">
        <div class="row text-center">
            <div class="col-3">
                <h3>
                    <i class="fa fa-home"></i> <br>
                    <span>Home</span>
                </h3>
            </div>
            <div class="col-3">
                <h3>
                    <i class="fa fa-mobile" aria-hidden="true"></i> <br>
                    <span>Download</span>
                </h3>
            </div>
            <div class="col-3">
                <h3>
                    <i class="fa fa-users" aria-hidden="true"></i> <br>
                    <span>Team</span>
                </h3>
            </div>
            <div class="col-3">
                <h3>
                    <a href="{{url('profile')}}">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i> <br>
                        <span>My</span>
                    </a>

                </h3>
            </div>
        </div>
    </div>
</section>
<!-- Header Sec End  -->
@endsection