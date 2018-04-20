@extends('layouts.app')
@section('content')
    <div class="content">


    
    <div class="col-md-8 col-md-offset-2">
        <h1>Incomes</h1>
            <a href="{{action('IncomeController@create')}}" class="btn btn-default pull-right">ADD Income</a>
            @if(count($income)>0)
            <table class="table align-middle">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Details</th>
                    <th scope="col">When</th>
                  </tr>
                </thead>
                @foreach($income as $incomes)
                <tbody>
                
         
                  <tr>
                  <th scope="row">{{$num++}}</th>
                    <td><a href="/incomes/{{$incomes->id}}">{{$incomes->amount}}</a></td>
                    <td>{{$incomes->details}}</td>
                  <td>{{$incomes->created_at}}</td>
                  </tr>
                </tbody>
                @endforeach
              </table>







        
        <div class="well">
                <h3>Total Income: {{$sum}} </h3>
        </div>
    @else
           <h3> No income information </h3>
        
    
        </div>
    @endif
    
@stop
    