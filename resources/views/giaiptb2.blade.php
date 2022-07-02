@extends('template/mytemplate')
@section('giaiptb2')

<div class="container">
    <h1 class="text-uppercase font-weight-bold text-center">phương trình bậc 2</h1>
    {!!Form::open(['url' => 'giaipt']) !!}
    <div class="form-group">
        {{Form::label('a', 'Nhập a')}}
        {{Form::number('a', '', ['class' =>
        'form-control', 'placeholder' => 'Enter a'])}}
        {{Form::label('b', 'Nhập b')}}
        {{Form::number('b', '', ['class' =>
        'form-control', 'placeholder' => 'Enter b'])}}
        {{Form::label('c', 'Nhập c')}}
        {{Form::number('c', '', ['class' =>
        'form-control', 'placeholder' => 'Enter c'])}}
    </div>
    <div class="form-group text-center my-3">
        {{Form::submit('Giải phương trình', ['class' => 'btn btn-primary'])}}
    </div>
    <h3 class="text-danger">{{$result}}</h3>
</div>
{!! Form::close() !!}
@endsection
