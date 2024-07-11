
@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <title>pizza-house</title>
    @if (Route::has('PizzaHoma'))
    <div class="top-left links">
        @auth
            <a href="{{ url('/') }}">Home</a>
        @endauth
    </div>
@endif
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/pizza') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <img src="/img/pizza-house.png" alt="pizza house logo">
        <div class="title m-b-md">
            The North's Best Pizzas
        </div>
        <script>
            var msg = '{{Session::get('alert')}}';
            var exist = '{{Session::has('alert')}}';
            if(exist){
              alert(msg);
            }
          </script>
        
        <a href ="/pizza/create">Order a pizza</a>
    </div>
</div>
@endsection

