<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{{ $title }}</title>

@include('includes.stylesheets')

</head>


<body class=" ">

<div class="content-wrapper">

    @include('includes.header')

    <div class="header-spacer"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <article class="hentry post post-standard has-post-thumbnail sticky">

                    <div class="post-thumb">
                        <img src="/storage/{{ $first_post->featured }}" alt="seo">
                        <div class="overlay"></div>
                        <a href="/storage/{{ $first_post->featured }}" class="link-image js-zoom-image">
                            <i class="seoicon-zoom"></i>
                        </a>
                        <a href="#" class="link-post">
                            <i class="seoicon-link-bold"></i>
                        </a>
                    </div>

                    <div class="post__content">

                        <div class="post__content-info">

                            <h2 class="post__title entry-title ">
                                <a href="{{ route('post.show',['slug' => $first_post->slug]) }}">{{ $first_post->title }}</a>
                            </h2>

                            <div class="post-additional-info">

                                        <span class="post__date">

                                            <i class="seoicon-clock"></i>

                                            <time class="published" datetime="2016-04-17 12:00:00">
                                                {{ $first_post->created_at->diffForHumans() }}
                                            </time>

                                        </span>

                                <span class="category">
                                            <i class="seoicon-tags"></i>
                                            <a href="#">{{ $first_post->category->name }}</a>
                                        </span>

                                <span class="post__comments">
                                            <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                            6
                                        </span>

                            </div>
                        </div>
                    </div>

                </article>
            </div>
            <div class="col-lg-2"></div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <article class="hentry post post-standard has-post-thumbnail sticky">

                    <div class="post-thumb">
                        <img src="/storage/{{ $second_post->featured }}" alt="seo">
                        <div class="overlay"></div>
                        <a href="/storage/{{ $second_post->featured }}" class="link-image js-zoom-image">
                            <i class="seoicon-zoom"></i>
                        </a>
                        <a href="#" class="link-post">
                            <i class="seoicon-link-bold"></i>
                        </a>
                    </div>

                    <div class="post__content">

                        <div class="post__content-info">

                            <h2 class="post__title entry-title ">
                                <a href="{{ route('post.show',['slug' => $second_post->slug]) }}">{{ $second_post->title }}</a>
                            </h2>

                            <div class="post-additional-info">

                                        <span class="post__date">

                                            <i class="seoicon-clock"></i>

                                            <time class="published" datetime="2016-04-17 12:00:00">
                                                {{ $second_post->created_at->diffForHumans() }}
                                            </time>

                                        </span>

                                <span class="category">
                                            <i class="seoicon-tags"></i>
                                            <a href="#">{{ $second_post->category->name }}</a>
                                        </span>

                                <span class="post__comments">
                                            <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                            6
                                        </span>

                            </div>
                        </div>
                    </div>

                </article>
            </div>
            <div class="col-lg-6">
                <article class="hentry post post-standard has-post-thumbnail sticky">

                    <div class="post-thumb">
                        <img src="/storage/{{ $third_post->featured }}" alt="seo">
                        <div class="overlay"></div>
                        <a href="/storage/{{ $third_post->featured }}" class="link-image js-zoom-image">
                            <i class="seoicon-zoom"></i>
                        </a>
                        <a href="#" class="link-post">
                            <i class="seoicon-link-bold"></i>
                        </a>
                    </div>

                    <div class="post__content">

                        <div class="post__content-info">

                            <h2 class="post__title entry-title ">
                                <a href="{{ route('post.show',['slug' => $third_post->slug]) }}">{{ $third_post->title }}</a>
                            </h2>

                            <div class="post-additional-info">

                                        <span class="post__date">

                                            <i class="seoicon-clock"></i>

                                            <time class="published" datetime="2016-04-17 12:00:00">
                                               {{ $third_post->created_at->diffForHumans() }}
                                            </time>

                                        </span>

                                <span class="category">
                                            <i class="seoicon-tags"></i>
                                            <a href="#">{{ $third_post->category->name }}</a>
                                        </span>

                                <span class="post__comments">
                                            <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                            6
                                        </span>

                            </div>
                        </div>
                    </div>

                </article>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row medium-padding120 bg-border-color">
            <div class="container">
                <div class="col-lg-12">

                    @foreach($categories as $category)
                        @if($category->posts->count() > 0)
                             @include('includes.categories')
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Subscribe Form -->

@include('includes.subscribeform')

    <!-- End Subscribe Form -->
</div>



<!-- Footer -->

@include('includes.footer')

<!-- End Footer -->

@include('includes.svg')

<!-- Overlay Search -->

@include('includes.search')

<!-- End Overlay Search -->

<!-- JS Script -->

@include('includes.scripts')

<!-- ...end JS Script -->

</body>
</html>
