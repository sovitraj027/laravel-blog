@extends('layouts.master')

@section('content')


    <div class="card card-primary mt-3">
        <div class="card-header">
            <h3 class="card-title">Create Post</h3>
        </div>
        <!-- form start -->
        <form role="form" action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" value="{{old('title')}}" name="title">
                </div>


                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" name="description"
                              id="article-ckeditor">{{old('description')}}</textarea>
                </div>



                <div class="form-group">
                    <label for="image">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="image" id="image">
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-sm btn-outline-primary">Create</button>
            </div>
        </form>
    </div>
@endsection

@section('js')

    <script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('article-ckeditor');
    </script>
@endsection
