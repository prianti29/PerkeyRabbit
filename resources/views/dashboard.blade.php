@extends('layouts.app')
@section('contents')
<div class="user-content">
    <div class="user-details">
        <h1>Welcome {{Auth::user()->name}} </h1>
    </div>
</div>
@endsection
