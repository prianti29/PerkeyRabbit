@extends('layouts.app')
@section('contents')
<a href="{{ url('/addpost/create') }}" class="btn btn-success" style="margin-top: 10px">Add post</a>
<hr>
<form action="{{ route('post.index') }}" method="GET">
    <input type="text" name="search" placeholder="Search by title">
    <button type="submit">Search</button>
</form>
<hr>
<table class="table tables-content">
    <tr>
        <th>User name</th>
        <th>Title</th>
        <th>Content</th>
        <th>Image</th>
        <th>Action</th>
    </tr>

    @foreach($post_list as $item)
    <tr>
        <td>{{ $item->user->name }}</td>
        {{-- <td>{{ $item->user_id}}</td> --}}
        <td>{{$item->title}}</td>
        <td>{{$item->content}}</td>
        <td><img src="{{url("/$item->image")}}" class="img1"></td>
        <td class="button-container">
            <a href="{{ url("/addpost/$item->id/edit") }}"
                class="btn btn-warning btn-sm action-btn custom-btn">Update</a>
            <form action="{{ url("/addpost/$item->id")}}" method="POST"
                onsubmit="return confirm('Do you really want to delete this category?');" class="action-btn">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="btn btn-danger btn-sm custom-btn">
            </form>
        </td>
    </tr>
    @endforeach
    {{-- {{ $post_list->links('pagination::bootstrap-4') }} --}}
    {{-- <div>Page {{ $item->currentPage() }} of {{ $item->lastPage() }}</div> --}}
</table>
{{ $post_list->links() }}
@endsection
