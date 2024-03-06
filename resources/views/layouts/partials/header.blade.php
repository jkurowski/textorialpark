<div class="header-holder">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container-fluid">
            <a class="navbar-brand js-scroll-trigger" href="/">
                <img src="{{ asset('images/logo.png') }}" class="logo" alt="Logo">
            </a>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/pl/kampus/">KAMPUS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/pl/do-wynajecia/">DO WYNAJĘCIA</a>
                    </li>
                    <li class="nav-item @isset($page) @if($page->slug == 'spacer-wirtualny') active @endif @endisset">
                        <a class="nav-link js-scroll-trigger" href="/pl/spacer-wirtualny/">SPACER WIRTUALNY</a>
                    </li>
                    <li class="nav-item @isset($page) @if($page->slug == 'newsboard') active @endif @endisset">
                        <a class="nav-link js-scroll-trigger" href="/pl/newsboard/">NEWSBOARD</a>
                    </li>
                    <li class="nav-item {{ Request::routeIs('front.history') ? 'active' : '' }}">
                        <a class="nav-link js-scroll-trigger" href="/pl/historia/">HISTORIA</a>
                    </li>
                    <li class="nav-item @isset($page) @if($page->slug == 'najemcy') active @endif @endisset"
                    ><a class="nav-link js-scroll-trigger" href="/pl/najemcy/">NAJEMCY</a>
                    </li>
                    <li class="nav-item @isset($page) @if($page->slug == 'o-nas') active @endif @endisset">
                        <a class="nav-link js-scroll-trigger" href="/pl/o-nas/">INWESTOR</a>
                    </li>
                    <li class="nav-item {{ Request::routeIs('contact') ? 'active' : '' }}">
                        <a class="nav-link js-scroll-trigger" href="/pl/kontakt/">KONTAKT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger lang-pl" href="#"><b>PL</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger lang-en" href="#">EN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>