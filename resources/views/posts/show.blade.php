@extends('applayout')
@section('content')
<div class="container">
	<a href="/ideas" class="btn btn-default btn-lg" role="button">Go Back</a><br>
	<h2>{{$idea->Title}}</h2>
</div>
	<div class="container">
		{!!$idea->Body!!}
	</div>
	<a href="/ideas/{{$idea->id}}/edit" class="btn btn-alert">Edit</a>
	 {!!Form::open(['action' => ['IdeasController@destroy', $idea->id], 'method' => 'IDEA', 'class' =>'pull-right'])!!}
     {{Form::hidden('_method', 'DELETE')}}
     {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
     {!!Form::close()!!}
@endsection
