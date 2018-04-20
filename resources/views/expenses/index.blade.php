@extends('layouts.app')
@section('content')
    <div class="content">


    
    <div class="col-md-8 col-md-offset-2">
            <h1>Expenses</h1>
            <a href="{{action('ExpenseController@create')}}" class="btn btn-default pull-right">ADD Expense</a>
            @if(count($expenses)>0)
            <table class="table align-middle">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Details</th>
                    <th scope="col">When</th>
                  </tr>
                </thead>
                @foreach($expenses as $expense)
                <tbody>
                
         
                  <tr>
                  <th scope="row">{{$num++}}</th>
                    <td><a href="/expenses/{{$expense->id}}">{{$expense->amount}}</a></td>
                    <td>{{$expense->details}}</td>
                  <td>{{$expense->created_at}}</td>
                  </tr>
                </tbody>
                @endforeach
              </table>







        
        <div class="well">
                <h3>Total Expense: {{$sum}} </h3>
        </div>

        <div class="well">
                <h3>Savings: {{$remaining}}</h3>
        </div>

    @else
           <h3> No income information </h3>
        
    
        </div>
    @endif
    
@stop
    