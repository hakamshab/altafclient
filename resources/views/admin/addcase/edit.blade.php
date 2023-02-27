@extends('admin/layout.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-5"></div>
        <div class="col-12">
            <div class="card">
                <div class="card-boday">
                    <h3 class="text-center">Add Cash Update</h3>
                    <div class="row">
                        <!-- <div class="col-10 ml-3"></div> -->
                        <div class="col-12">
                            <a href="{{url('Add Case-list')}}" class="btn btn-sm btn-primary">
                                <i class="fa fa-fast-backward" aria-hidden="true"> Back</i>
                            </a>
                        </div>
                    </div>
                </div>
                <form action="" class="form" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6 mt-3">
                            <label for="">Name <span class="text-danger">*</label>
                            <input type="text" name="name" class="foem-control" placeholder="Name" value="{{$addcash->name}}">
                        </div>
                        <div class="col-6 mt-3">
                            <label for="">Email <span class="text-danger">*</label>
                            <input type="email" name="email" class="foem-control" placeholder="Email" value="{{$addcash->email}}">
                        </div>
                        <div class="col-6 mt-3">
                            <label for="">Password <span class="text-danger">*</label>
                            <input type="password" name="password" class="foem-control" placeholder="Password" value="{{$addcash->password}}">
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