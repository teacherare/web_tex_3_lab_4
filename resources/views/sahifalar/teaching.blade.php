@extends('shablon.layout')
@section('asosiy_qism')
<div class="b-example-divider b-example-vr container">
  <br><br>
  <h2 class="text-center">The main subjects I teach</h2>
  <ul class="list-group">
    @foreach ($fanlar as $fan)
    <li class="list-group-item">{{ $fan }}</li>
    @endforeach
  </ul>
  <br><br>
</div>
@endsection