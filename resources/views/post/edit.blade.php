@extends('layouts.index')
@section('content')
    <br>
<h1>Edit</h1>

    {!! Form::model($post,['method'=>'PATCH','action'=>['Post@update',$post->id]]) !!}
    {!! Form::label('Title') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}

    {!! Form::label('Posts') !!}
    {!! Form::text('body',null,['class'=>'form-control']) !!}

    {!! Form::submit('Update Post',['class'=>'btn btn-success form-control']) !!}
    {!! Form::close() !!}

    {!! Form::open(['method'=>'delete','action'=>['Post@destroy',$post->id]]) !!}
    {!! Form::submit('Delete Post',['class'=>'btn btn-danger form-control']) !!}
    {!! Form::close() !!}

@stop
