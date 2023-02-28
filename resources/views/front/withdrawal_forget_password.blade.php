@extends('Front.layout.master')
@section('content')
<section class="bg-success header_boottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="text-light">Fund Password Management</h1>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-4">
                                    <label for="">Phone Number</label>
                                    <input type="text" name="number" Placeholder="1234567890" disabled
                                        class="form-control" id="">
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-4">
                                    <label for="">Bank Account</label>
                                    <input type="text" name="bank" Placeholder="Enter Bank Account Number"
                                        class="form-control" id="">
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-4">
                                    <label for="">Enter Your Login Password</label>
                                    <input type="text" name="number" Placeholder="Enter Your Login Password"
                                        class="form-control" id="">
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-4">
                                    <label for="">New Password</label>
                                    <input type="text" name="number" Placeholder="New Password" class="form-control"
                                        id="">
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-4">
                                    <label for="">Confirm Password</label>
                                    <input type="text" name="number" Placeholder="Confirm Password" class="form-control"
                                        id="">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5 mb-3">
                                    <input type="submit" value="Confirm" class="form-control btn btn-dark">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection