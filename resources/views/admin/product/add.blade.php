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
                            <a href="{{url('product/list')}}" class="btn btn-sm btn-primary">
                                <i class="fa fa-fast-backward" aria-hidden="true"> Back</i>
                            </a>
                        </div>
                    </div>
                </div>
                <form action="{{url('product/store')}}" class="form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6 mt-3">
                            <label for="">Product price <span class="text-danger">*</label>
                            <input type="text" name="product_price" class="form-control" placeholder="Product price ">
                             @if ($errors->has('product_price'))
                                <span class="text-danger">{{ $errors->first('product_price') }}</span>
                            @endif
                          
                        </div>
                        <div class="col-6 mt-3">
                            <label for="">Daily income <span class="text-danger">*</label>
                            <input type="text" name="daily_inclome" class="form-control" placeholder="Daily income">
                               @if ($errors->has('daily_inclome'))
                                <span class="text-danger">{{ $errors->first('daily_inclome') }}</span>
                            @endif
                        </div>
                        <div class="col-6 mt-3">
                            <label for="">Total income <span class="text-danger">*</label>
                            <input type="text" name="total_income" class="form-control" placeholder="Total income">
                                @if ($errors->has('total_income'))
                                <span class="text-danger">{{ $errors->first('total_income') }}</span>
                            @endif
                        </div> 
                        <div class="col-6 mt-3">
                            <label for="">Complete cycle <span class="text-danger">*</label>
                            <input type="text" name="complite" class="form-control" placeholder="Complete cycle">
                               @if ($errors->has('complite'))
                                <span class="text-danger">{{ $errors->first('complite') }}</span>
                            @endif
                        </div>
                         <div class="col-6 mt-3">
                            <label for="">Image <span class="text-danger">*</label>
                            <input type="file" name="image" class="form-control" placeholder="image">
                               @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
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