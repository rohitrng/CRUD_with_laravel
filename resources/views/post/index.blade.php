
@extends('layouts.index')
@section('content')
    <br>

    @if(Session::has('create_post'))
        <p class="alert alert-success">{{ Session('create_post') }}</p>
        @endif

    @if(Session::has('update_post'))
        <p class="alert alert-success">{{session('update_post')}}</p>
        @endif

    @if(Session::has('delete_post'))
        <p class="alert alert-danger">{{session('delete_post')}}</p>
        @endif
    <h1 class="bg-info">Create</h1>
    {!! Form::open(['method'=>'POST','action' => 'Post@store']) !!}
    {!! Form::label('Title') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
    {!! Form::label('Body') !!}
    {!! Form::text('body',null,['class'=>'form-control']) !!}
    {!! Form::submit('Submit') !!}

    <br><br>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Posts</th>
            <th>Create Date</th>
            <th>Update At</th>
        </tr>
        @foreach($post as $posts)
        <tr>
            <td>{{ $posts->id }}</td>
            <td><a href="{{Route('post.edit',$posts->id)}}" class="link-item text-danger">{{ $posts->title }}</a></td>
            <td>{{ $posts->body }}</td>
            <td>{{ $posts->created_at->diffForHumans() }}</td>
            <td>{{ $posts->updated_at->diffForHumans() }}</td>
        </tr>
        @endforeach
    </table>





@stop


