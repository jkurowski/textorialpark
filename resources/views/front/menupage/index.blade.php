@extends('layouts.page', ['body_class' => $page->slug])

@section('meta_title', $page->title)
@section('seo_title', '')
@section('seo_description', '')

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => $page->title, 'header_file' => $page->header])
    @include('front.menupage.'.$page->slug)
@stop