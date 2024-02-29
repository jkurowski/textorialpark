@extends('layouts.page', ['body_class' => 'no-header'])

@section('meta_title', $article->title)
@section('seo_title', $article->meta_title)
@section('seo_description', $article->meta_description)
@section('seo_robots', $article->meta_robots)

@section('pageheader')
    @include('layouts.partials.page-header', ['page_title' => '', 'page' => $page, 'header_file' => $page->file_header])
@stop

@section('content')
    <section class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <div class="post-details">
                    <picture>
                        <source type="image/webp" srcset="{{asset('uploads/articles/webp/'.$article->file_webp) }}">
                        <source type="image/jpeg" srcset="{{asset('uploads/articles/'.$article->file) }}">
                        <img src="{{asset('uploads/articles/'.$article->file) }}" alt="{{ $article->title }}" class="w-100">
                    </picture>

                    <div class="post-details-entry mt-5 mb-3">
                        <h1 class="post-details-title mb-5">{{ $article->title }}</a></h1>
                        <h3>{{$article->content_entry}}</h3>
                    </div>
                    <div class="post-details-text">
                        <p>{!! parse_text($article->content) !!}</p>
                    </div>
                    <a href="{{route('front.news.index')}}" class="bttn mt-3 mt-md-5">@lang('website.button-back-to-list')</a>
                </div>
            </div>
        </div>
    </section>
@endsection
