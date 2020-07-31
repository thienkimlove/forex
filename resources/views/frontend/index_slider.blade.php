<section class="boxSlidePage bg">
    <div class="container">
        <h3 class="globalTitle noneAfter">
            <a href="#">&nbsp;
                <span class="highLight">&nbsp;</span>
                <span class="bgLight">Tiêu điểm</span>
            </a>
        </h3>
        <div class="listSlidePage clearFix">
            <div class="owl-carousel" id="slidePage">
                @foreach (\App\Helpers::getIndexSliders() as $slider)
                    <div class="item wow slideInLeft" data-wow-duration="0.8s" data-wow-delay="1s">
                        <a href="{{url($slider->slug.'.html')}}" title="{{$slider->title}}">
                            <img src="{{ \App\Helpers::imgCache($slider->image, 274, 174) }}" width="274" height="174" alt=""/>
                        </a>
                        <h3>
                            <a href="{{url($slider->slug.'.html')}}">
                                {{$slider->title}}
                            </a>
                        </h3>
                        <p>
                            {{$slider->desc}}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>