<?php
?>
{{--thua ke tu app.blade--}}
@extends('layouts.app');

{{--noi dung trang con--}}
{{--dung app.css--}}
@section('content')
    <div class="panel-body">
        @include('errors.503')

        {{--        form nhap thong tin san pham--}}
        <form action="{{'eshop'}}" method="post" class="form-horizontal">
            {{csrf_field()}}

            <div class="form-group">
                {{--                product name input--}}
                <label for="name" class="col-sm-3 control-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" name="name"  id="name" class="form-control" required>
                </div>
                {{--                product image link input--}}
                <label for="image" class="col-sm-3 control-label">Image link</label>
                <div class="col-sm-6">
                    <input type="url" name="image"  id="image" class="form-control">
                </div>
                {{--                product description input--}}
                <label for="description" class="col-sm-3 label-primary">Description</label>
                <div class="col-sm-6">
                    <input type="text" name="description"  id="description" class="form-control" max="255">
                </div>
                {{--                status--}}
                <label for="status" class="col-sm-3 label-primary">Status</label>
                <div class="col-sm-6">
                    <select name="status" id="status">
                        <option value="In stock">In stock</option>
                        <option value="Sold out">Sold out</option>
                        <option value="Comming soon">Comming soon</option>
                    </select>
                </div>
                {{--                qty input--}}
                <label for="qty" class="col-sm-3 label-primary">Qty</label>
                <div class="col-sm-6">
                    <input type="number" name="qty"  id="qty" class="form-control" min="0" value="0">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Add product
                    </button>
                </div>
            </div>
        </form>
        {{--        hien thi noi dung trong shop--}}
        @if(count($eshop)>0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Shop's Product
                </div>
                <div class="panel-body">
                    <table class="table table-striped task-table">
                        {{--                        tieu de task--}}
                        <thead>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Image</td>
                        <td>Description</td>
                        <td>Quantity</td>
                        <td>Status</td>
                        <td>Delete</td>
                        </thead>
                        {{--                        noi dung task--}}
                        <tbody>
                        @foreach($eshop as $eshops)
                            <tr>
                                <td class="table-text">
                                    <div>{{$eshops->id}}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{$eshops->name}}</div>
                                </td>
                                <td class="table-text">
                                    <div><img src="{{$eshops->image}}" alt=""></div>
                                </td>
                                <td class="table-text">
                                    <div>{{$eshops->description}}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{$eshops->qty}}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{$eshops->status}}</div>
                                </td>
                                {{--                                    them nut xoa--}}
                                <td>
                                    <form action="/eshop/{{$eshops->id}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button>Delete</button>
                                        <input type="hidden" name="_method" value="DELETE">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
@endsection
