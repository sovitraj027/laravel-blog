@extends('layouts.master')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">description</th>
            <th scope="col">image</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post->title}}</th>
                <th scope="row">{{substr($post->description,1,20)}}...</th>
                <th scope="row">
                    <img src="/storage/post_image/{{ $post->image }}" height="50px" width="60px" />
                </th>
                <th>

                    <a type="button" class="btn btn-success btn-sm" href="{{route('posts.create')}}" >Add</a>
                    <a type="button" class="btn btn-primary btn-sm" href="{{route('posts.edit',$post->slug)}}">update</a>

                    <form id="delete-form" method="POST" action="{{route('posts.destroy',$post->slug)}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <div class="form-group">
                            <input type="submit" class="btn btn-danger" value="delete">
                        </div>
                    </form>
                </th>

            </tr>
        @endforeach

        </tbody>
    </table>


@endsection
