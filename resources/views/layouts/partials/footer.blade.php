<div id="footerForm">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @include('front.contact.form')
            </div>
        </div>
    </div>
</div>

<div class="container footer">
    <div class="row">
        <div class="col-12 footbgbox text-right">
            <div class="footer-in">
                <div class="footer-space">&nbsp;</div>
                <div class="footer-col-1">
                    <a href="/" class="footer-link">HOME</a>
                    <a href="{{ route('front.live') }}" class="footer-link" style="display:inline-block">live</a>
                    <font style="color:#73859c">/</font>
                    <a href="{{ route('front.work') }}" class="footer-link d-inline">work</a>
                    <font style="color:#73859c">/</font>
                    <a href="{{ route('front.enjoy') }}" class="footer-link d-inline">enjoy</a>
                    <a href="{{ route('front.kampus') }}" class="footer-link b-block">KAMPUS</a>
                    <a href="{{ route('front.plan') }}" class="footer-link d-block">DO WYNAJĘCIA</a>
                    <a href="{{ route('static', ['uri' => 'spacer-wirtualny']) }}" class="footer-link d-block">SPACER WIRTUALNY</a>
                    <a href="{{ route('front.news.index') }}" class="footer-link d-block">NEWSBOARD</a>
                    <a href="{{ route('front.history') }}" class="footer-link d-block">HISTORIA</a>
                    <a href="{{ route('renters') }}" class="footer-link d-block">NAJEMCY</a>
                    <a href="{{ route('static', ['uri' => 'o-nas']) }}" class="footer-link d-block">INWESTOR</a>
                    <a href="{{ route('contact') }}" class="footer-link d-block">KONTAKT</a>
                </div>

                <div class="footer-col-2">
                    <img src="{{ asset('images/tplogo.png') }}" class="img-fluid footer-logo" alt="">
                </div>

                <div class="footer-col-3">
                    <p>Textorial Park</p>
                    <p>ul. Fabryczna 17, 90-344 Łódź</p>
                    <p>St. Paul’s Developments Polska</p>
                    <p><a href="mailto:biuro@st-pauls.com.pl">biuro@st-pauls.com.pl</a></p>
                    <p><a href="tel:+48422908003">+48 42 290 80 03</a></p>
                    <p><a href="tel:+48605273339">+48 605 273 339</a></p>
                </div>

            </div>
        </div>
    </div>
</div>

<!--Google font style-->
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&amp;subset=latin-ext" rel="stylesheet">