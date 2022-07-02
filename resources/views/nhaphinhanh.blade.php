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
    <h1 style="text-align:center; text-transform:uppercase; font-weight: bold; color: #ff0000">Nhập hình ảnh</h1>
    <div style="width: 40%; margin-left: auto; margin-right: auto; background-color: #EEEEEE; padding: 20px; border-radius: 10px">
        {!! Form::open(['url' => '/nhaphinhanh/submit','files' => true]) !!}


        <div class="form-group">
            {{Form::label('hinh', 'Hình sản phẩm')}}
            {{Form::file('hinhanh', ['class' => 'form-control'])}}
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

