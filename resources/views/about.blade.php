@extends('layout')

@section('title', 'About page')



@section('h1')

  About Page

@endsection



@section('content')
  <ul>
    @foreach($tasks as $key=>$value)
      <li> {{ $key }} = {{ $value }} </li>
    @endforeach
  </ul>

@endsection
