@extends('layouts.page')

@section('meta_title', 'Newsboard')
@section('seo_title', '')
@section('seo_description', '')

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => $page->title, 'header_file' => $page->header])
@stop

@section('content')
    <div id="content"></div>
    <section id="newsboard" class="container container-dashed blog-list">
        <div class="row justify-content-center">
            <div class="col-10">
                @foreach($articles as $key => $article)
                    <article class="{{ $loop->even ? 'row' : 'row flex-row-reverse' }}">
                        <div class="col-12 col-xl-6">
                            <div class="news-thumb mb-4 mb-xl-0">
                                @if($article->content)
                                    <a href="{{route('front.news.show', $article->slug)}}">
                                        @endif
                                        <picture>
                                            <source type="image/webp" srcset="{{asset('/uploads/articles/thumbs/webp/'.$article->file_webp) }}">
                                            <source type="image/jpeg" srcset="{{asset('/uploads/articles/thumbs/'.$article->file) }}">
                                            <img src="{{asset('/uploads/articles/thumbs/'.$article->file) }}" alt="{{ $article->file_alt }}" width="700" height="394" class="golden-border w-100">
                                        </picture>
                                        @if($article->content)
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="col-12 col-xl-6 d-flex align-items-center">
                            <div class="news-text">
                                <h2 class="mb-3 mb-sm-4">
                                    @if($article->content)
                                        <a href="{{route('front.news.show', $article->slug)}}">
                                            @endif
                                            {{ $article->title }}
                                            @if($article->content)
                                        </a>
                                    @endif
                                </h2>
                                <p>{{ $article->content_entry }}</p>
                                @if($article->content)
                                    <a href="{{route('front.news.show', $article->slug)}}" class="bttn mt-4 mt-xl-5">@lang('website.button-read-more')</a>
                                @endif
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection