@extends('layouts.main')

@section('title', "| $tag->name Tag")

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $tag->name }} Tag <small> {{ $tag->posts()->count() }} Posts</small></h1>
        </div>

        <div class="col-md-2 offset-me-2">
            <a href="" class="btn btn-lg btn-primary pull-right btn-block" style="">Edit</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Tags</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($tag->posts as $post)
                        <th>{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>
                            @foreach ($post->tags as $tag)
                            <span class="badge badge-secondary">{{ $tag->name }}</span>
                            @endforeach
                        </td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection