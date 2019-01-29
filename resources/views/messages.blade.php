@extends('layouts.app')

@section('content')
<h1>Messages</h1>
@if(count($messages))
@foreach($messages as $message)
<ul class="list-group">
	 <li class="list-group-item"><a href="{{route('todo.edit',$message->id) }}">Id:{{$message->id}}</a></li>

  <li class="list-group-item">Name: {{$message->name}}</li>
  <li class="list-group-item">Email:{{$message->email}}</li>

  <li class="list-group-item">Message:{{$message->Message}}</li>
</ul>
@endforeach
@endif
@endsection

@section('sidebar')
@parent
<p>This is appended to the sidebar</p>
@endsection
