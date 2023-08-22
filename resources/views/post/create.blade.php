@extends('layouts.app')
@section('contents')
<h3>Add new Post</h3>
<hr>
<form class="form-horizontal" action="{{ url('/addpost') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class="control-label col-sm-2">User Name:</label>
        <div class="col-sm-10">
            <select name="user_id" class="edit-input">
                <option value="">--Select a User---</option>
                @foreach ($user_list as $item)
                <option value="{{ $item->id }}" {{old('user_id') ==$item->id ? 'selected' : ''}}> {{ $item->name }}
                </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Title:</label>
        <div class="col-sm-10">
            <input type="text" class="edit-input" id="email" placeholder="Enter Post Title" name="title">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Content:</label>
        <div class="col-sm-10">
            <input type="text" class="edit-input" id="pwd" placeholder="Enter Post Content" name="content">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Image:</label>
        <div class="col-sm-10">
            <input type="file" class="edit-input" id="pwd" placeholder="Enter Image" name="image"
                style="margin-top: 7px">
        </div>
    </div>



    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Create</button>
        </div>
    </div>
</form>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@endsection
