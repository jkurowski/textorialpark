@isset($header_file)
<header class="masthead text-center text-white d-flex" style="background-image: url('{{ asset('uploads/headers/'.$header_file) }}') !important">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">

            </div>
        </div>
    </div>

    <div class="header-circle">
        <h1>{{ $title }}</h1>
    </div>

    <div class="scrollsection">
        <a class="arrow bounce scroll" href="#video" data-offset="0"></a>
    </div>

    <div class="header-social">
        <a href="https://www.facebook.com/textorialpark/" class="me-2" target="_blank">
            <img src="{{ asset('images/fb-ico.png') }}" alt="Facebook" width="35" height="33">
        </a>

        <a href="https://www.instagram.com/textorial_park/" class="me-2" target="_blank">
            <img src="{{ asset('images/insta-ico.png') }}" alt="Instagram" width="34" height="34">
        </a>

        <a href="https://www.linkedin.com/company/textorial-park-ii/" class="me-2" target="_blank">
            <img src="{{ asset('images/linkedin-ico.png') }}" alt="LinkedIn Logo" width="34" height="34">
        </a>

        <a href="https://www.youtube.com/@textorialpark539" target="_blank">
            <img src="{{ asset('images/yt-ico.png') }}" alt="YouTube Logo" width="34" height="34">
        </a>
    </div>
</header>
@endif