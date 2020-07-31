@extends('frontend.layout')

@section('content')
    <ul class="breadCrumb clearFix">
        <li><a href="{{url('/')}}">Trang chủ</a></li>
        <li class="active">{{$post->category->name}}</li>
    </ul>
    <div class="boxDetails">
        <div class="headBox">
            <h3 class="titleBox">{{$post->title}}</h3>
            <span class="datePost">
                Ngày đăng: {{$post->updated_at->format('d/m/Y')}}
            </span>
            <span class="view">
                Lượt xem: {{$post->views}}
            </span>
        </div>
        {!! $post->content !!}
    </div>


    <div class="boxOrther">
        <h3 class="globalTitle">
            <a href="#">Tin liên quan</a>
        </h3>
        <ul class="listQuestion" id="listQuestion">
            @foreach ($relatedPosts as $relatedPost)
                <li><a href="{{url($relatedPost->slug.'.html')}}">{{$relatedPost->title}}</a></li>
            @endforeach
        </ul>
    </div>

    <div class="boxNews">
        <h3 class="globalTitle"><a href="#">Bài mới nhất</a></h3>
        <div class="listNews clearFix">
            @foreach ($latestNews as $latestNew)
                <div class="item">
                    <a href="{{url($latestNew->slug.'.html')}}" class="thumb">
                        <img src="{{ \App\Helpers::imgCache($latestNew->image, 188, 125) }}" alt="List news">
                    </a>
                    <p>
                        <a href="{{url($latestNew->slug.'.html')}}">{{$latestNew->title}}</a>
                    </p>
                    <span class="datePost">{{$latestNew->updated_at->format('d/m/Y')}}</span>
                    <span class="countView">{{$latestNew->views}} lượt xem</span>
                </div>
            @endforeach
        </div>
    </div>
@endsection