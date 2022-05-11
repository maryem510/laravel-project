<!-- <h1>
    @php $name="users" ; @endphp
    {{$name }}
</h1>

<a href="{{url('about') }}" >About</a>
<a href="{{url('contact') }}" >Contact</a>
<a href="{{url('users') }}" >Users</a>
<a href="{{url('/') }}" >Home</a>

<ul>
    @foreach($users as $user)
    <li> {{$user}}</li>
    @endforeach
</ul> -->

@extends('layout')
@section('content')
<h1>Users Page</h1>
<ul>
    @foreach($users as $user)
    <li> {{$user}}</li>

    @endforeach
</ul>
@endsection