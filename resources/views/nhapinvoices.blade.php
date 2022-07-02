@extends('template/mytemplate')
@section('css-nhapinvoices')
    <style>
        .form-group {
            padding-top: 10px;
        }
    </style>
@endsection
@section('nhapinvoices')
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <h1 style="text-align:center; text-transform:uppercase; font-weight: bold; color: #ff0000">Nhập Hóa đơn</h1>
    <div style="width: 40%; margin-left: auto; margin-right: auto; background-color: #EEEEEE; padding: 20px; border-radius: 10px">
        {!! Form::open(['url' => '/nhapinvoice/submit']) !!}
        <div class="form-group">
            {{Form::label('invoicesNo', 'Nhập mã hóa đơn:')}}
            {{Form::text('invoicesNo', '', ['class' => 'form-control', 'placeholder' => 'Enter your invoicesNo'])}}
        </div>

        <div class="form-group">
            {{Form::label('invovicesDate', 'Nhập ngày hóa đơn:')}}
            {{Form::date('invovicesDate', '', ['class' => 'form-control', 'placeholder' => 'Enter your invovicesDate'])}}
        </div>

        <div class="form-group">
            {{Form::label('memberId', 'Nhập mà khách hàng:')}}
            {{Form::number('memberId', '', ['class' => 'form-control', 'placeholder' => 'Enter your memberId'])}}
        </div>

        <div class="form-group">
            {{Form::label('productId', 'Nhập số mã sản phẩm:')}}
            {{Form::number('productId', '', ['class' => 'form-control', 'placeholder' => 'Enter a productId'])}}
        </div>

        <div class="form-group">
            {{Form::label('quantity', 'Nhập Số lượng:')}}
            {{Form::number('quantity', '', ['class'=> 'form-control', 'placeholder' => 'Enter your quantity'])}}
        </div>

        <div class="form-group">
            {{Form::label('price', 'Nhập tổng tiền:')}}
            {{Form::number('price', '', ['class' => 'form-control', 'placeholder' => 'Enter your price'])}}
        </div>

        <div class="form-group" style="margin-top: 20px">
            {{Form::submit('Nhập', ['class' => 'btn btn-primary'])}}
        </div>
    </div>
    {!! Form::close() !!}
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            Data validation error
            <ul>
                @foreach ($errors -> all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(isset($status))
        <div class="alert-success">
            {{ $status }}
        </div>
    @endif
@endsection

