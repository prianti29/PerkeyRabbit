@extends('layouts.app')
@section('contents')
<a href="{{ url('/addpost/create') }}" class="btn btn-success" style="margin-top: 10px">Add post</a>
<hr>
<table class="table tables-content">
<tr>
    <th>User name</th>
    <th>Title</th>
    <th>Content</th>
    <th>Image</th>
    <th>Action</th>
</tr>
<tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>
        <a href={{ url("/post/$item->id/edit") }} class="btn btn-warning btn-sm action-btn">Update</a>
        <form action="" method="POST"
            onsubmit="return confirm('Do you really want to delete this category?');" class="action-btn">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
        </form>
    </td>
</tr>
</table>
@endsection
