@extends('applayout')
@section('content')
<div class="container">
	<a href="/ideas" class="btn btn-default btn-lg" role="button">Go Back</a><br>
	<h2 class="btn btn-warning btn-lg" role="button">{{$idea->Title}}</h2>
</div>
	<div class="container">
		{{$idea->Body}}
	</div>
@endsection
