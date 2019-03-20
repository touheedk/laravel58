
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=""{{ url('home') }}"">KT Blog</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
            <li class="{{ Request::getPathInfo() == '/home'? 'active' : '' }}"><a href="{{ url('home') }}">Home</a></li>
            <li class="{{ Request::getPathInfo() == '/about'? 'active' : '' }}"><a href="{{ url('about') }}">About</a></li>
            <li class="{{ Request::getPathInfo() == '/contact'? 'active' : '' }}"><a href="{{ url('contact') }}">Contact</a></li>
            <li class="{{ Request::getPathInfo() == '/messages'? 'active' : '' }}"><a href="{{ url('messages') }}">Messages</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
