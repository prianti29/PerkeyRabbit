<nav class="navbar navbar-default custom-navbar">
    <div class="container-fluid">
        <!-- Navbar Header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
            </button>
        </div>

        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url('/addpost') }}">Posts</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <form action="{{ route('logout') }}" method="POST" class="logout-form">
                        @csrf
                        <button type="submit" class="btn btn-link logout-btn"><span class="glyphicon glyphicon-log-out"></span> Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
