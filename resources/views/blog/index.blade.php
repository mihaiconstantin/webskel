@extends('templates.master')


@section('meta_seo')    
    @include('partials.meta.meta')
    @include('partials.meta.og')
    @include('partials.meta.twitter')    
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
