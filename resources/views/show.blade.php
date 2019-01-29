@extends('layouts.app')

@section('content')

<h1>Edit</h1>

<h1><a href="{{route('todo.edit',$message->id) }}">{{$message->id}}</a></h1>

<form action="{{ route('todo.update' ,$message->id) }}" method="post">
		{{csrf_field()}}

   <input type="hidden" name="_method" value="PUT">
<div class="form-group">
    <label>Name</label>
	<input type="text"  class="form-control" name="name" placeholder="Enter Title" value="{{$message->name}}" required="">
</div>
       <div class="form-group">
               <label>Email</label>

		<input type="text" class="form-control" name="email" placeholder="Enter Title" value="{{$message->email}}" required="">
       </div>
              <div class="form-group">
             <label>Message</label>

	<input type="text" class="form-control" name="message" placeholder="Enter Title" value="{{$message->Message}}" required="">
</div>
	<input type="submit"  class="btn btn-primary" name="submit" value="update">


</form>

  


<br><br>
<h1>Delete</h1>

<form method="post" action="{{route('todo.destroy',$message->id) }}">
			{{csrf_field()}}


	<input type="hidden" name="_method" value="DELETE">
	<input type="submit"  class="btn btn-primary" name="submit" value="DELETE">
</form>

@endsection


