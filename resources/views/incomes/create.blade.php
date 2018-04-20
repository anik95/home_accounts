@extends('layouts.app')

@section('content')

<div class="col-md-8 col-md-offset-2">
        <h1>Add Income</h1>
{!! Form::open(['action' => 'IncomeController@store', 'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('amount', 'Amount')}}
        {{Form::number('amount', '', ['class'=>'form-control', 'placeholder'=>'Amount'])}}
    </div>


{!! Form::open(['action' => 'IncomeController@store', 'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('details', 'Details')}}
        {{Form::textarea('details', '', ['class'=>'form-control', 'placeholder'=>'Details'])}}
    </div>

    

    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}


{!! Form::close() !!}
</div>

@stop