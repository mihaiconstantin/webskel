@extends('templates.master')


@section('meta_seo')
    <meta name="description" content="{{ $meta_description }}">
    <meta name="keywords" content="{{ $meta_keywords }}">
    
    <meta property="og:description" name="description" content="{{ $og_description }}">
    <meta property="og:image:url" content="{{ $og_image }}">
@endsection


@section('styles')
    @include('partials._styles_blog_post')
@endsection


@section('title', $title)


@section('content')
    <div id="app" v-cloak data-app-api="{{ Request::path() }}">
        <template>

            <app-navigation :links="{{ $links }}"></app-navigation>
            
            <div class="g container">
                <main id="app-post" class="g row justify-content-center">
                    <article class="b col-md-11" data-aos="zoom-in-down">
                            
                        <i class="pin pin-top-left"></i>
                        <i class="pin pin-top-right"></i>
                        <i class="pin pin-bottom-left"></i>
                        <i class="pin pin-bottom-right"></i>

                        <div class="r post-content-row row justify-content-center">


                            <header class="y post-header col-12 text-center">
                                <h1 class="p post-title display-4">
                                    {{ $post->title }}
                                    
                                    @if ($post->featured) 
                                        <span class="featured-ribbon ribbon-bottom-right">Featured</span> 
                                    @endif
                                </h1>

                                <p class="p post-author small text-muted">By <span><a href="{{ route('blog.author', ['id' => $post->user->id]) }}">{{ $post->user->name }}</a></span></p>

                                <div class="p post-details small text-muted">
        							<time class="s post-pubdate" datetime="{{ $post->created_at['timestamp'] }}" pubdate>{{ $post->created_at['formatted'] }}</time>
		        					in <span class="s post-category"><a href="{{ route('blog.category', ['slug' => $post->category->slug]) }}">{{ $post->category->name }}</a></span>
				        		</div>

                                @if ($post->image_display) 
                                    <img src="{{ URL::asset('storage/' . $post->image) }}" alt="{{ $post->seo_title }}" class="s post-featured-image img-fluid">
                                @endif
                            </header>



                            <section class="y post-content col-11">
                                {!! $post->body !!}
                            </section>



                            <hr class="col-8">



                            <aside class="y post-next col-8 text-center">
                                <p class="p text-muted">Suggested read:</p>

                                @if (isset($post->next))
                                    <a href="{{ $post->next->slug }}" class="p">
                                        <span class="s effect-underline">{{ $post->next->title }}</span>
                                    </a>
                                @else
                                    <p class="p">No other posts in {{ $post->category->name }}</p>
                                @endif
                            </aside>



                            <app-footer social-icon="{{ $socialIcon }}" social-link="{{ $socialLink }}" home-url="{{ route('home.index') }}" copyright="{{ $copyright }}"></app-footer>

                        </div>

                    </article>
                </main>
            </div>

        </template>
    </div>
@endsection


@section('scripts')
    @include('partials._scripts_blog_post')
@endsection
