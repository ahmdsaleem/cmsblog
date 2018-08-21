<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="case-item">
        <div class="case-item__thumb">
            <img src="/storage/{{ $post->featured }}" alt="our case">
        </div>
        <h6 class="case-item__title"><a href="{{ route('post.show',['slug' => $post->slug]) }}">{{$post->title}}</a></h6>
    </div>
</div>
