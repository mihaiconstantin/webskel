@extends('templates.master')


@section('meta_seo')    
    @include('partials.meta.meta')
    @include('partials.meta.og')
    @include('partials.meta.twitter')    
@endsection


@section('styles')
    @include('partials._styles_home_index')
@endsection


@section('title', $title)


@section('content')
    <div id="app" v-cloak>
        <template>

            <app-navigation :links="{{ $links }}" active-scroll="true" trigger="#app-about"></app-navigation>
            
            <div class="b container-fluid">

                <app-carousel :item="{{ $carousel }}"></app-carousel>
                
                <app-about :items="{{ $about }}"></app-about>
                
                <app-projects :items="{{ $projects }}" link-more="{{ $linkProjects }}"></app-projects>
                
                <app-publications :items="{{ $publications }}" link-more="{{ $linkPublications }}"></app-publications>
                
                <app-presentations :items="{{ $presentations }}" link-more="{{ $linkPresentations }}"></app-presentations>

                <app-contact>
                    <template v-slot:info>
                        <app-contact-info :item="{{ $contact }}"></app-contact-info>
                    </template>
                    
                    <template v-slot:social>
                        <app-contact-social username="{{ $username }}" height="550"></app-contact-social>
                    </template>
                </app-contact>
                
                <app-footer social-icon="{{ $socialIcon }}" social-link="{{ $socialLink }}" home-url="#app-carousel" copyright="{{ $copyright }}"></app-footer>
            
            </div>

        </template>
    </div>
@endsection


@section('scripts')
    @include('partials._scripts_home_index')
@endsection
