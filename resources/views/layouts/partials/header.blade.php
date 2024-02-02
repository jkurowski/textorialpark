<nav class="navbar navbar-expand-lg navbar-light fixed-top {{ empty($page->header) ? 'navbar-orange' : '' }}" id="mainNav" style="position:absolute">
    <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger" href="/">
            <img src="{{ asset('images/logo.png') }}" class="logo" alt="Logo">
        </a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/">HOME</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/oferta-2/">KAMPUS</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/do-wynajecia/">DO WYNAJĘCIA</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/spacer-wirtualny/">SPACER WIRTUALNY</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/newsboard/">NEWSBOARD</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/historia/">HISTORIA</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/najemcy/">NAJEMCY</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/o-nas/">INWESTOR</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/kontakt/">KONTAKT</a></li>
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