@extends('admin.layout')
@section('meta_title', '- '.$cardTitle)

@section('content')
    @if(Route::is('admin.renters.edit'))
        <form method="POST" action="{{route('admin.renters.update', $entry->id)}}" enctype="multipart/form-data">
            @method('PUT')
            @else
                <form method="POST" action="{{route('admin.renters.store')}}" enctype="multipart/form-data">
                    @endif
                    @csrf
                    <div class="container">
                        <div class="card-head container">
                            <div class="row">
                                <div class="col-12 pl-0">
                                    <h4 class="page-title"><i class="fe-grid"></i><a href="{{route('admin.article.index')}}" class="p-0">Najemcy</a><span class="d-inline-flex me-2 ms-2">/</span>{{ $cardTitle }}</h4>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3">
                            @include('form-elements.back-route-button')
                            <div class="card-body control-col12">

                                <div class="row w-100 form-group">
                                    @include('form-elements.html-input-text', ['label' => 'Nazwa', 'name' => 'name', 'value' => $entry->name, 'required' => 1])
                                </div>
                                @if(!Request::get('lang'))
                                <div class="row w-100 form-group">
                                    @include('form-elements.html-color', ['label' => 'Kolor tła (tekst biały)', 'name' => 'bgcolor', 'value' => $entry->bgcolor, 'required' => 1])
                                </div>

                                <div class="row w-100 form-group">
                                    @include('form-elements.html-input-file', ['label' => 'Obrazek', 'sublabel' => '(wymiary: '.config('images.box.width').'px / '.config('images.box.height').'px)', 'name' => 'file'])
                                </div>
                                @endif
                                <div class="row w-100 form-group">
                                @include('form-elements.textarea-fullwidth', ['label' => 'Opis', 'name' => 'text', 'value' => $entry->text, 'rows' => 21, 'class' => 'tinymce', 'required' => 1])
                                </div>

                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="lang" value="{{$current_locale}}">
                    @include('form-elements.submit', ['name' => 'submit', 'value' => 'Zapisz'])
                </form>
                @include('form-elements.tintmce')
        @endsection
