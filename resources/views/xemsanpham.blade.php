@extends('template/mytemplate')
@section('xemsanpham')
    <h1>Xem sản phẩm</h1>
    @foreach ($products as $row)
    @if
        <h1>{{ $row->ProductName }}</h1>
    @endforeach
    {{ $products }}
@endsection
