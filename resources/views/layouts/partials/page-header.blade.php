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

    <a class="arrow bounce" href="#video"></a>

    <div class="header-social">
        <a href="https://www.facebook.com/textorialpark/">
            <img src="{{ asset('images/fb-ico.png') }}" alt="Facebook">
        </a>

        <a href="https://www.instagram.com/textorial_park/">
            <img src="{{ asset('images/insta-ico.png') }}" alt="Instagram">
        </a>
    </div>
</header>
@endif