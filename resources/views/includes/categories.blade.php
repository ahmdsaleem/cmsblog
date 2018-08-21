<div class="offers">
    <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
            <div class="heading" id="{{ $category->id }}">
                <h4 class="h1 heading-title">{{ $category->name }}</h4>
                <div class="heading-line">
                    <span class="short-line"></span>
                    <span class="long-line"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="case-item-wrap">
            @foreach($category->posts as $post)
            @include('includes.posts')
            @endforeach
        </div>
    </div>
</div>
<div class="padded-50"></div>