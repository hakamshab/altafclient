@extends('admin/layout.master')
@section('content')
<style type="text/css">
    .error {
    color: red;
   
}

</style>
<div class="container">
    <div class="row">
        <div class="col-5"></div>
        <div class="col-12">
            <div class="card">
                <div class="card-boday">
                    <h3 class="text-center">Add Product Form</h3>
                    <div class="row">
                        <!-- <div class="col-10 ml-3"></div> -->
                        <div class="col-12">
                            <a href="{{url('upi/list')}}" class="btn btn-sm btn-primary">
                                <i class="fa fa-fast-backward" aria-hidden="true"> Back</i>
                            </a>
                        </div>
                    </div>
                </div>
                <form action="{{url('upi/store')}}" class="form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6 mt-3">
                            <label for="">Upi Number <span class="text-danger">*</label>
                            <input type="text" name="upi_number" class="form-control" placeholder="Upi Number ">
                             @if ($errors->has('upi_number'))
                                <span class="text-danger">{{ $errors->first('upi_number') }}</span>
                            @endif
                          
                        </div>
                        <div class="col-6 mt-3">
                            <label for="">status<span class="text-danger">*</label>

                                <select class="form-control" name="status">
                                      <option disabled="">Status</option>
                                      <option value="1">Active</option>
                                      <option value="0">Inactive</option>
                                    </select>

                          
                               @if ($errors->has('status'))
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            @endif
                        </div>
                        <div class="col-6 mt-3">
                       
                        <div class="col-12 mt-3 mb-3">
                        <input type="submit" value="submit" class="btn btn-sm btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection