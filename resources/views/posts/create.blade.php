@extends('applayout')
@section('content')
<div class="container">
<h1>Create post</h1>
{!! Form::open(['action' => 'IdeasController@store','method'=>'Idea']) !!}
    <div class="form-group">
    	{{Form::label('Title', 'Title')}}
    	{{Form::text('Title','', ['class'=> 'form-control','placeholder'=>'Title'])}}
    </div>

    <div class="form-group">
    	{{Form::label('Body', 'Body')}}
    	{{Form::textarea('Body','', ['id'=>'article-ckeditor','class'=> 'form-control','placeholder'=>'Body'])}}
    </div>

	<div class="form-group">
    	{{Form::label('Date', 'Date')}}<br>
    	{{Form::date('name', \Carbon\Carbon::now())}}
    </div>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection
