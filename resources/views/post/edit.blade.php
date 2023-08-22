@extends('layouts.app')
@section('contents')
<h3>Edit Post</h3>
<hr>
<form class="form-horizontal" action="{{ url("/addpost/$post->id") }}" method="POST" enctype="multipart/form-data"
    class="edit-form">
    @method("put")
    @csrf
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">User:</label>
        <div class="col-sm-10">
            <input type="text" class="edit-input" id="email" placeholder="Enter post title"
                value="{{$post->user->name}}" name="user_id">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Title:</label>
        <div class="col-sm-10">
            <input type="text" class="edit-input" id="email" placeholder="Enter post title" value="{{$post->title}}"
                name="title">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Content:</label>
        <div class="col-sm-10">
            <input type="text" class="edit-input" id="pwd" placeholder="Enter post content" value="{{$post->content}}"
                name="content">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Image:</label>
        <div class="col-sm-10">
            <input type="file" class="edit-input" id="pwd" placeholder="Enter Image" value="{{$post->image}}"
                name="image">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div>
</form>
@endsection
