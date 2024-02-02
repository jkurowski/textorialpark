@extends('layouts.page', ['body_class' => $page->slug])

@section('meta_title', $page->title)
@section('seo_title', '')
@section('seo_description', '')

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => $page->title, 'header_file' => $page->header])

    <div id="video" class="container-fluid">
        <div class="row">
            <div class="col-md-1 off992"></div>
            <div class="col-lg-10 col-md-12 hp-video-col text-center">
                @foreach($renters as $r)

                    <div class="row najemcy-row position-relative {{ $loop->even ? 'flex-row-reverse' : '' }}">
                        <div class="text-line text-center najemcy-pasek {{ $loop->even ? 'text-line-right' : '' }}" style="background:{{ $r->bgcolor }}">
                            <font class="f400">{{ $r->name }}</font>
                        </div>
                        <div class="col-lg-7 p-0">
                            <div class="mb-0">
                                <img src="{{ asset('/uploads/renters/'.$r->file) }}" class="img-fluid" alt="{{ $r->name }}">
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
            <div class="col-md-1 off992"></div>
        </div>
    </div>
@stop