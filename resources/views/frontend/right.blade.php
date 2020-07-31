<div class="contentRight">
    <!-- /endSale -->
    <div class="boxHot clearFix" id="sidebar">
        <h3 class="globalTitle"><a href="#">Bài viết nổi bật</a></h3>
        @foreach (\App\Helpers::getFeatureNews() as $post)
            <div class="item clearFix">
                <a href="{{url($post->slug.'.html')}}" class="thumb">
                    <img src="{{ \App\Helpers::imgCache($post->image, 100, 80) }}" alt="hot" width="100" height="80">
                </a>
                <h4>
                    <a href="{{url($post->slug.'.html')}}">{{$post->title}}</a>
                </h4>
            </div>
        @endforeach

    </div>
    <!-- /endHot -->
</div>