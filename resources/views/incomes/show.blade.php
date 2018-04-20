@extends('layouts.app')

@section('content')

<a href="{{action('IncomeController@index')}}">Go Back</a>
    <article>{{$income->amount}}</article>
    <article>{{$income->details}}</article>
<article>{{$income->user_id}}</article>
@stop