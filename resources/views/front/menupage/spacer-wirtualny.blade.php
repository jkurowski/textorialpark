@extends('layouts.page', ['body_class' => 'no-header'])

<div class="p-5">
    {!! parse_text($page->content) !!}
</div>
<style>header.masthead{display:none !important;}p{margin:0;line-height:normal}</style>