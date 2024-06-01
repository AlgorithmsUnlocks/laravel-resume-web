<header>
    <button onclick="sharePage()" class="btn btn-white btn-share ml-auto mr-3 ml-md-0 mr-md-auto"><img src="{{asset('assets/images/share.svg')}}" alt="share" class="btn-img">
        SHARE</button>
    <nav class="collapsible-nav" id="collapsible-nav">
        <a href="{{url('/')}}" class="nav-link active">HOME</a>
        <a href="{{url('/resume')}}" class="nav-link">RESUME</a>
        <a href="{{url('/portfolio')}}" class="nav-link">PORTFOLIO</a>
        <a href="{{url('/blog')}}" class="nav-link">BLOG</a>
        <a href="{{url('/contact')}}" class="nav-link">CONTACT</a>
    </nav>
    <button class="btn btn-menu-toggle btn-white rounded-circle" data-toggle="collapsible-nav"
            data-target="collapsible-nav"><img src="{{asset('assets/images/hamburger.svg')}}" alt="hamburger"></button>
</header>
