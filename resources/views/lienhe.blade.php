@extends('template/mytemplate')
@section('css-contact')
    <style>
        .form-group {
            padding-top: 10px;
        }
    </style>
@endsection
@section('lienhe')
    {{-- <h2 style="color:blue">Đây là trang Contact</h2>
    <p>Trang liên hệ {{$sdt}}</p> --}}
    <h1 style="text-align:center; text-transform:uppercase; font-weight: bold; color: #ff0000">Contact</h1>
    <div style="width: 40%; margin-left: auto; margin-right: auto; background-color: #EEEEEE; padding: 20px; border-radius: 10px">
        {!! Form::open(['url' => 'contact/submit']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name:')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter your name'])}}
        </div>

        <div class="form-group">
            {{Form::label('phone', 'Phone Number:')}}
            {{Form::tel('phone', '', ['class' => 'form-control', 'placeholder' => 'Enter a phone number'])}}
        </div>

        <div class="form-group">
            {{Form::label('email', 'Email:')}}
            {{Form::email('email', '', ['class'=> 'form-control', 'placeholder' => 'Enter your email'])}}
        </div>

        <div class="form-group">
            {{Form::label('address', 'Address:')}}
            {{Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Enter your address'])}}
        </div>

        <div class="form-group" style="margin-top: 20px">
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        </div>
    </div>
    {!! Form::close() !!}
@endsection

