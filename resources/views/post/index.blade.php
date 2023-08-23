@extends('layouts.app')

@section('contents')
<div class="post-list-container">
    <a href="{{ url('/addpost/create') }}" class="btn btn-success add-post-btn">Add Post</a>
    <hr class="divider">

    <form action="{{ route('post.index') }}" method="GET" class="search-form">
        <input type="text" name="search" placeholder="Search by title" class="search-input">
        <button type="submit" class="btn btn-primary search-btn">Search</button>
    </form>
    <hr class="divider">

    <table class="table table-content">
        <tr>
            <th>User Name</th>
            <th>Title</th>
            <th>Content</th>
            <th>Image</th>
            <th>Action</th>
        </tr>

        @foreach($post_list as $item)
        <tr>
            <td>{{ $item->user->name }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->content }}</td>
            <td><img src="{{ url("/$item->image") }}" class="post-image"></td>
            <td class="action-container">
                <a href="{{ url("/addpost/$item->id/edit") }}" class="btn btn-warning btn-sm action-btn">Update</a>
                <form action="{{ url("/addpost/$item->id") }}" method="POST"
                    onsubmit="return confirm('Do you really want to delete this post?');"
                    class="action-form">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" class="btn btn-danger btn-sm action-btn">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $post_list->links() }}
</div>
@endsection


