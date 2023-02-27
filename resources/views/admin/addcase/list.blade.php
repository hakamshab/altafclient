@extends('admin/layout.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="row text-end">
            <h3 class="text-center">Add Cash List</h3>
            <div class="col-10"></div>
            <div class="col-2 mb-3">
                <a href="{{url('Add Case-info')}}" class="btn btn-sm btn-primary">
                    <i class="fa fa-plus" aria-hidden="true"> New</i>
                </a>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i=1;
                @endphp
                @foreach($addcash as $item)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->password}}</td>
                    <td>
                        <a href="{{url('Add Case-edit/'.$item->id)}}" class="btn btn-sm btn-primary">
                            <i class="fa fa-pencil-square" aria-hidden="true"></i>
                        </a>
                        <a href="{{url('Add Case-delete/'.$item->id)}}" class="btn btn-sm btn-primary">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection