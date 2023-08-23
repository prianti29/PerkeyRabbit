@extends('layouts.app')

@section('contents')
<div class="edit-post-container">
    <h3 class="edit-post-title">Edit Post</h3>
    <hr class="divider">

    <form action="{{ url("/addpost/$post->id") }}" method="POST" enctype="multipart/form-data" class="edit-form">
        @method("put")
        @csrf
        <div class="form-group">
            <label for="user_id" class="form-label">User:</label>
            <select class="form-control edit-input" id="user_id" name="user_id">
                @foreach($user_list as $user)
                    <option value="{{$user->id}}" {{ $user->id == $post->user_id ? 'selected' : '' }}>{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" placeholder="Enter post title"
                value="{{ $post->title }}" name="title">
        </div>
        <div class="form-group">
            <label for="content" class="form-label">Content:</label>
            <textarea class="form-control" id="content" placeholder="Enter post content"
                name="content">{{ $post->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="image" class="form-label">Image:</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-update">Update Post</button>
        </div>
    </form>
</div>
@endsection

