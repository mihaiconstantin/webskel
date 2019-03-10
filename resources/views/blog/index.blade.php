@extends('templates.master')


@section('meta_seo')
    <meta name="description" content="{{ $meta_description }}">
    <meta name="keywords" content="{{ $meta_keywords }}">
    
    <meta property="og:description" name="description" content="{{ $og_description }}">
    <meta property="og:image:url" content="{{ $og_image }}">
@endsection


@section('styles')
    @include('partials._styles_blog_index')
@endsection


@section('title', $title)


@section('content')


    <div id="app" v-cloak data-app-api="{{ Request::path() }}">
        <template>

            <app-navigation :links="{{ $links }}" active="{{ $activeLink }}"></app-navigation>
            
            <div class="b container">
                <main id="app-blog" class="b row">

                    <i class="pin pin-top-left"></i>
					<i class="pin pin-top-right"></i>
					<i class="pin pin-bottom-left"></i>
					<i class="pin pin-bottom-right"></i>

                    <app-blog-header></app-blog-header>

                    <app-post-list></app-post-list>

                    <app-footer  v-if="ready" social-icon="{{ $socialIcon }}" social-link="{{ $socialLink }}" home-url="{{ route('home.index') }}" copyright="{{ $copyright }}"></app-footer>

                </main>
            </div>

        </template>
    </div>
@endsection


@section('scripts')
    @include('partials._scripts_blog_index')
@endsection
