@extends('template/mytemplate')
@section('css-nhapmember')
    <style>
        .form-group {
            padding-top: 10px;
        }
    </style>
@endsection
@section('nhapmember')
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    <h1 style="text-align:center; text-transform:uppercase; font-weight: bold; color: #ff0000">Nhập thành viên</h1>
    <div style="width: 40%; margin-left: auto; margin-right: auto; background-color: #EEEEEE; padding: 20px; border-radius: 10px">
        {!! Form::open(['url' => '/nhapmember/submit']) !!}
        <div class="form-group">
            {{Form::label('memberId', 'Nhập mã thành viên:')}}
            {{Form::text('memberId', '', ['class' => 'form-control', 'placeholder' => 'Enter your memberId'])}}
        </div>

        <div class="form-group">
            {{Form::label('name', 'Nhập họ tên:')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter your name'])}}
        </div>

        <div class="form-group">
            {{Form::label('phone', 'Nhập số điện thoại:')}}
            {{Form::tel('phone', '', ['class' => 'form-control', 'placeholder' => 'Enter a phone number'])}}
        </div>

        <div class="form-group">
            {{Form::label('email', 'Nhập Email:')}}
            {{Form::email('email', '', ['class'=> 'form-control', 'placeholder' => 'Enter your email'])}}
        </div>

        <div class="form-group">
            {{Form::label('Address', 'Nhập địa chỉ:')}}
            {{Form::text('Address', '', ['class' => 'form-control', 'placeholder' => 'Enter your address'])}}
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

