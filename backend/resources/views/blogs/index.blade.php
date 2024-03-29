@extends('layouts.main')



@section('title', '| Blog')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>Blog</h1>
        </div>
    </div>

    @foreach ($posts as $post)
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2> {{ $post->title }}</h2>
            <h6>published: {{ date('M j, y', strtotime($post->created_at)) }}</h6>

            <p>{{ html_entity_decode(substr(strip_tags($post->body), 0, 250), ENT_NOQUOTES, 'UTF-8') }}{{ strlen( html_entity_decode(strip_tags($post->body), ENT_NOQUOTES, 'UTF-8') ) > 250 ? "..." : "" }}</p>

            <a href="{{ route('blogs.single', $post->slug) }}" class="btn btn-primary">Read More</a>
            <hr>
        </div>
    </div>
    @endforeach

    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-center">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
@endsection
