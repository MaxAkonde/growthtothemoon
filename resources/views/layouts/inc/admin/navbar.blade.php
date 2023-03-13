<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="#">
            <span class="align-middle">Dashboard</span>
        </a>

        <ul class="sidebar-nav">

            {{-- <li class="sidebar-item {{ $active == 'dashboard' ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('dashboard') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li> --}}

            <li class="sidebar-item {{ $active == 'topics' ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('topics.index') }}">
                    <i class="align-middle" data-feather="bookmark"></i> <span class="align-middle">Sujets</span>
                </a>
            </li>

            <li class="sidebar-item {{ $active == 'posts' ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('posts.index') }}">
                    <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Articles</span>
                </a>
            </li>
            <li class="sidebar-item {{ $active == 'avis' ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('avis.index') }}">
                    <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Avis</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
