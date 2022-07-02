@extends('template/mytemplate')
@section('css-nhapproducts')
    <style>
        .form-group {
            padding-top: 10px;
        }
    </style>
@endsection
@section('nhapproducts')
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <h1 style="text-align:center; text-transform:uppercase; font-weight: bold; color: #ff0000">Nhập sản phẩm</h1>
    <div style="width: 40%; margin-left: auto; margin-right: auto; background-color: #EEEEEE; padding: 20px; border-radius: 10px">
        {!! Form::open(['url' => '/nhapproduct/submit','files' => true]) !!}
        <div class="form-group">
            {{Form::label('productid', 'Nhập mã sản phẩm:')}}
            {{Form::number('productid', '', ['class' => 'form-control', 'placeholder' => 'Enter your products id'])}}
        </div>

        <div class="form-group">
            {{Form::label('productname', 'Nhập tên sản phẩm:')}}
            {{Form::text('productname', '', ['class' => 'form-control', 'placeholder' => 'Enter your name'])}}
        </div>

        <div class="form-group">
            {{Form::label('unit', 'Nhập số đơn vị:')}}
            {{Form::tel('unit', '', ['class' => 'form-control', 'placeholder' => 'Enter a unit'])}}
        </div>

        <div class="form-group">
            {{Form::label('cost', 'Nhập giá sản phẩm:')}}
            {{Form::number('cost', '', ['class'=> 'form-control', 'placeholder' => 'Enter your cost'])}}
        </div>

        <div class="form-group">
            {{Form::label('hinhanh', 'Hình sản phẩm')}}
            {{Form::file('hinhanh', ['class' => 'form-control'])}}
        </div>

        <div class="form-group" style="margin-top: 20px">
            {{Form::submit('Nhập', ['class' => 'btn btn-primary'])}}
        </div>
    </div>
    {!! Form::close() !!}
    @if ($errors->any())
        <div class="alert alert-danger">
            Data validation error
            <ul>
                @foreach ($errors -> all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- @if(isset($status))
        <div class="alert-success">
            {{ $status }}
        </div>
    @endif --}}
@endsections

