<nav class="sidebar sidebar-offcanvas bg-primary " id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="{{ route('home') }}" class="nav-link">
                <img src="{{ asset('frontend/images/logo-white.png') }}" alt="Voicedash Logo"
                    srcset="{{ asset('frontend/images/logo-white.png') }}" width="50" height="50">
            </a>
        </li>
        <li class="nav-item p-0 m-0">
            <a class="nav-link text-light" href="{{ route('home') }}">
                <i class="mdi mdi-home menu-icon icon-md text-white"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item p-0 m-0">
            <a class="nav-link text-light" href="{{ route('wavenet.index')}}">
                <i class="mdi mdi-google menu-icon icon-md text-white"></i>
                <span class="menu-title">TTS (Wavenet)</span>
            </a>
        </li>
        <li class="nav-item p-0 m-0">
            <a class="nav-link text-light" href="{{ route('polly.index')}}">
                <i class="mdi mdi-polymer menu-icon icon-md text-white"></i>
                <span class="menu-title">TTS (Polly)</span>
            </a>
        </li>
        <li class="nav-item p-0 m-0">
            <a class="nav-link text-light" href="{{ route('audio.index') }}">
                <i class="mdi mdi-music-box-outline menu-icon icon-md text-white"></i>
                <span class="menu-title">Audio List</span>
            </a>
        </li>
        <li class="nav-item p-0 m-0">
            <a class="nav-link text-light" href="{{ route('audio.create') }}">
                <i class="mdi mdi-audiobook menu-icon icon-md text-white"></i>
                <span class="menu-title">Merge Audio</span>
            </a>
        </li>
        <li class="nav-item p-0 m-0">
            <a class="nav-link text-light" href="/">
                <i class="mdi mdi-nfc-variant menu-icon icon-md text-white"></i>
                <span class="menu-title">Create Merge Audio</span>
            </a>
        </li>
        <li class="nav-item p-0 m-0">
            <a class="nav-link text-light" href="{{ route('video.create') }}">
                <i class="mdi mdi-message-video menu-icon icon-md text-white"></i>
                <span class="menu-title">Video Creator</span>
            </a>
        </li>
        <li class="nav-item p-0 m-0">
            <a class="nav-link text-light" href="/">
                <i class="mdi mdi-bookmark-music menu-icon icon-md text-white"></i>
                <span class="menu-title">Merge Audio List</span>
            </a>
        </li>
        <li class="nav-item p-0 m-0">
            <a class="nav-link text-light" href="{{ route('image.index') }}">
                <i class="mdi mdi-movie menu-icon icon-md text-white"></i>
                <span class="menu-title">Image Galary</span>
            </a>
        </li>
        <li class="nav-item p-0 m-0">
            <a class="nav-link text-light" href="{{ route('video.index') }}">
                <i class="mdi mdi-video menu-icon icon-md text-white"></i>
                <span class="menu-title">Video Galary</span>
            </a>
        </li>
        <li class="nav-item p-0 m-0">
            <a class="nav-link text-light" href="/">
                <i class="mdi mdi-youtube menu-icon icon-md text-white"></i>
                <span class="menu-title">Youtube</span>
            </a>
        </li>
        <li class="nav-item p-0 m-0">
            <a class="nav-link text-light" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <i class="mdi mdi-logout menu-icon icon-md text-white"></i>
                <span class="menu-title">Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</nav>
