@extends('template/mytemplate')
@section('css-xuatsanpham')
    <style>
        .form-group {
            padding-top: 10px;
        }
    </style>
@endsection
@section('xuatsanpham')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Unit</th>
                <th>Cost</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->ProductID}}</td>
                    <td>{{$product->ProductName}}</td>
                    <td>{{$product->Unit}}</td>
                    <td>{{$product->Cost}}</td>
                </tr>
            @endforeach
            {{-- {{ $products }} --}}
        </tbody>
    </table>
@endsection
