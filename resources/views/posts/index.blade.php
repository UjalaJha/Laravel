@extends('applayout')
@section('content')
<div class="container">
	<h1>Ideas</h1>
	@if(count($abc)>0)
		@foreach($abc as $ideas)
		<h2><a href="/ideas/{{$ideas->id}}"> {!!$ideas->Title!!}</a></h2>
		<p>{!!$ideas->Body!!}</p>
		<small>Written on {{$ideas->created_at}}</small>
		@endforeach

	@else
		No Post
	@endif
</div>
<div class="container">
{{$abc->links()}}
</div>
@endsection

