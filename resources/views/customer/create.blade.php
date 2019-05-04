@extends('template')
@section('content')
<div class="container-fluid">
    <div class="container jumbotron">
        <h1>Customers data</h1>
        <fieldset>
            <legend>cuatomers info</legend>
            <form method="post" action="/customer">
                 {{ csrf_field() }}
                customer_id:<br/>
                <input type="text" name="customer_id" id="customer_id" placeholder="customer id here" value = '{{ old('customer_id') }}' />
                <br/>
                customer_name:<br/>
                <input type="text" name="customer_name" id="customer_name" rows="10" cols="60"  placeholder="customer name here">
                       {{ old('customer_name') }}
               
                <br/>
                username:<br/>
                <input type="text" name="username" id="username" rows="10" cols="60"  placeholder="username here">
                       {{ old('username') }}
               
                <br/>
                username:<br/>
                <input type="text" name="password" id="password" rows="10" cols="60"  placeholder="password here">
                       {{ old('password') }}
               
                <br/>

                <button name="btn1">save</button>


            </form>
        </fieldset>


        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        </div>
    </div>
    @endsection('content')

