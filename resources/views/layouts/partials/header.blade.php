<div class="header-holder">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container-fluid">
            <a class="navbar-brand js-scroll-trigger" href="/">
                <img src="{{ asset('images/logo.png') }}" class="logo" alt="Logo">
            </a>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">HOME</a>
                    </li>
                    <li class="nav-item {{ Request::routeIs('front.kampus') ? 'active' : '' }}">
                        <a class="nav-link js-scroll-trigger" href="{{ route('front.kampus') }}">@lang('website.menu-campus')</a>
                    </li>
                    <li class="nav-item {{ Request::routeIs('front.plan') ? 'active' : '' }}">
                        <a class="nav-link js-scroll-trigger" href="{{ route('front.plan') }}">@lang('website.menu-for-rent')</a>
                    </li>
                    <li class="nav-item @isset($page) @if($page->slug == 'spacer-wirtualny') active @endif @endisset">
                        <a class="nav-link js-scroll-trigger" href="{{ route('static', ['uri' => 'spacer-wirtualny']) }}">@lang('website.menu-virtual-walk')</a>
                    </li>
                    <li class="nav-item @isset($page) @if($page->slug == 'newsboard') active @endif @endisset">
                        <a class="nav-link js-scroll-trigger" href="{{ route('front.news.index') }}">NEWSBOARD</a>
                    </li>
                    <li class="nav-item {{ Request::routeIs('front.history') ? 'active' : '' }}">
                        <a class="nav-link js-scroll-trigger" href="{{ route('front.history') }}">@lang('website.menu-history')</a>
                    </li>
                    <li class="nav-item {{ Request::routeIs('renters') ? 'active' : '' }}"
                    ><a class="nav-link js-scroll-trigger" href="{{ route('renters') }}">@lang('website.menu-renters')</a>
                    </li>
                    <li class="nav-item @isset($page) @if($page->slug == 'o-nas') active @endif @endisset">
                        <a class="nav-link js-scroll-trigger" href="{{ route('static', ['uri' => 'o-nas']) }}">@lang('website.menu-investor')</a>
                    </li>
                    <li class="nav-item {{ Request::routeIs('contact') ? 'active' : '' }}">
                        <a class="nav-link js-scroll-trigger" href="{{ route('contact') }}">@lang('website.menu-contact')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger lang-pl d-none" href="#"><b>PL</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger lang-en d-none" href="#">EN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>