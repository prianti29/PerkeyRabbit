<nav class="navbar navbar-default">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li><a href=" {{ url('/addpost') }}">Posts</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            {{-- <li><a href="{{url('/register')}}"><span class="glyphicon glyphicon-user"></span>
                    Sign Up</a></li>
            <li> --}}
            <li>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-link" style="padding-top: 15px;"><span
                            class="glyphicon glyphicon-log-out"></span> Logout </button>
                </form>
            </li>
        </ul>




    </div>
</nav>
