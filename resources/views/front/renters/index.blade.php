@extends('layouts.page', ['body_class' => $page->slug])

@section('meta_title', $page->title)
@section('seo_title', '')
@section('seo_description', '')

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => $page->title, 'header_file' => $page->header])
@stop

@section('content')
    <section id="video" class="container container-dashed">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <div class="col-12 text-center">
                        @foreach($renters as $r)

                            <div class="row najemcy-row position-relative {{ $loop->even ? 'flex-row-reverse' : '' }}">
                                <div class="text-line text-center najemcy-pasek {{ $loop->even ? 'text-line-right' : '' }}" style="background:{{ $r->bgcolor }}">
                                    <font class="f400">{{ $r->name }}</font>
                                </div>
                                <div class="col-lg-7 p-0">
                                    <div class="mb-0">
                                        <img src="{{ asset('/uploads/renters/'.$r->file) }}" class="w-100" alt="{{ $r->name }}">
                                    </div>
                                </div>
                                <div class="col-lg-5 text-container text-justify najemcy-text d-flex align-items-center" style="background:{{ $r->bgcolor }};color:#fff">
                                    <div>
                                        {!! parse_text($r->text) !!}
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection