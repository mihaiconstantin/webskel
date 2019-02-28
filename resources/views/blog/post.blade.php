@extends('templates.master')


@section('meta_seo')
    <meta name="description" content="{{ $meta_description }}">
    <meta name="keywords" content="{{ $meta_keywords }}">
    
    <meta property="og:description" name="description" content="{{ $og_description }}">
    <meta property="og:image:url" content="{{ $og_image }}">
@endsection


@section('styles')
    @include('partials._styles_post_index')
@endsection


@section('title', $title)


@section('content')


    <div id="app" v-cloak data-app-api="{{ Request::path() }}">
        <template>

            <app-navigation :links="{{ $links }}" active="{{ $activeLink }}"></app-navigation>
            
            <div class="b container">
                <app-footer twitter-icon="{{ $twitter }}" home-url="{{ route('home.index') }}"></app-footer>
            </div>

        </template>
    </div>
@endsection


@section('scripts')
    @include('partials._scripts_post_index')
@endsection
