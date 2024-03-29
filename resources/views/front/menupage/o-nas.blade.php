<div id="content"></div>
<section id="video" class="container container-dashed">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row">
                <div class="col-md-6">
                    <div class="o-nas-page-title bg-orange text-center f300"><font class="f400">ST. PAUL'S DEVELOPMENTS</font> POLSKA</div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-6">
                    <div class="o-nas-page bg-orange text-start">
                        {!! parse_text($page->content) !!}
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('/images/stpauls.png') }}" class="img-fluid o-nas-page-img" alt="St Pauls Logo">
                </div>
            </div>
        </div>
    </div>
</section>