@extends('layouts.app')

@section('contents')
<div class="post-form-container">
    <h3 class="post-form-title">Add New Post</h3>
    <hr class="divider">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form class="post-form" action="{{ url('/addpost') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="user_id" class="form-label">User Name:</label>
            <select name="user_id" id="user_id" class="form-control">
                <option value="">-- Select a User --</option>
                @foreach ($user_list as $item)
                <option value="{{ $item->id }}" {{ old('user_id') == $item->id ? 'selected' : '' }}>
                    {{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" placeholder="Enter Post Title" name="title">
        </div>
        <div class="form-group">
            <label for="content" class="form-label">Content:</label>
            <textarea name="content" id="content" class="form-control" cols="30" rows="10"
                placeholder="Enter Post Content"></textarea>
        </div>
        <div class="form-group">
            <label for="image" class="form-label">Image:</label>
            <input type="file" id="image" name="image" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-create">Create Post</button>
        </div>
    </form>
</div>
@endsection

