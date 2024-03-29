@extends('../layouts/main')

@section('title', '| App Posts')

@section('content')

    <div class="row">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>

        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-block btn-primary btn-h1-spacing">Create New Post</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created at</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                        <th>{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ html_entity_decode(substr(strip_tags($post->body), 0, 50), ENT_NOQUOTES, 'UTF-8') }} {{ strlen( html_entity_decode(strip_tags($post->body), ENT_NOQUOTES, 'UTF-8') ) > 50 ? "..." : ""}}</td>
                        <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
                        <td>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-default">View</a>
                            <a href="{{ route('posts.edit', $post->id)}}" class="btn btn-default">Edit</a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="d-flex justify-content-center">
                {!! $posts->links(); !!}
            </div>
        </div>
    </div>
@stop
