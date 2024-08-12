@extends('layout.master')
@section('title','footer')
  <div class="footer">
    <ul>
      <li> <a href="./about">about</a></li>
      <li> <a href="{{ route("home") }}">home</a></li>
      <li> <a href="{{ route("footer") }}">footer</a></li>
      <li> <a href="{{ route("master") }}">master</a></li>



    </ul>
  </div>
