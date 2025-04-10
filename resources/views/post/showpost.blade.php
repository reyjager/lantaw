
@extends('layouts.app')

@section('content')
<h1>{{ title: $post->title }}</h1>
<p>{{ id: $post->post_id }}</p>
<p>{{  content: $post->content }}</p>
<p>{{ created at: $post->created_at }}</p>
<p>{{ updated at: $post->updated_at }}</p>

@endsection
