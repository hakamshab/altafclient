@extends('admin/layout.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="row text-end">
            <h3 class="text-center">Add Product List</h3>
            <div class="col-10"></div>
            <div class="col-2 mb-3">
                <a href="{{url('product/add')}}" class="btn btn-sm btn-primary">
                    <i class="fa fa-plus" aria-hidden="true"> New</i>
                </a>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Product price</th>
                    <th>Daily income</th>
                    <th>Total income</th>
                    <th>Complete cycle</th>
                    <th>image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i=1;
                @endphp
                @foreach($listData as $item)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$item->product_price}}</td>
                    <td>{{$item->daily_inclome}}</td>
                    <td>{{$item->total_income}}</td>
                    <td>{{$item->complite}}</td>
                    <td>
                        <img style="width: 60px;" src="{{ asset('/img/'.$item->image) }}" alt="" title="">
        
                    </td>
                    <td>
                        <a href="{{url('product/edit/'.$item->id)}}" class="btn btn-sm btn-primary">
                            <i class="fa fa-pencil-square" aria-hidden="true"></i>
                        </a>
                        <a href="{{url('product/delete/'.$item->id)}}" class="btn btn-sm btn-primary">
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