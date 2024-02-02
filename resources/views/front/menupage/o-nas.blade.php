<div id="video" class="container-fluid">
    <div class="row">
        <div class="col-md-1 off992"></div>
        <div class="col-lg-10 col-md-12 hp-video-col text-center">

            <div class="row">
                <div class="col-md-6">
                    <div class="o-nas-page-title bg-orange text-center f300"><font class="f400">ST. PAUL'S DEVELOPMENTS</font> POLSKA</div>
                </div>
            </div>

            <br>
            <br class="moff">

            <div class="row">
                <div class="col-md-6">
                    <div class="o-nas-page bg-orange text-start">
                        {!! parse_text($page->content) !!}
                    </div>
                </div>
                <div class="col-md-6 text-center my-auto">
                    <br>
                    <img src="{{ asset('/images/stpauls.png') }}" class="img-fluid o-nas-page-img" alt="St Pauls Logo">
                </div>
            </div>
        </div>
        <div class="col-md-1 off992"></div>
    </div>
</div>