@extends('frontend.layout')

@section('content')
    <!-- /endboxRecommended -->
    <div class="boxNews clearFix">
        <h3 class="globalTitle">
            <a href="#">Bài mới nhất</a>
        </h3>
        <div class="listNews clearFix">
            @foreach (\App\Helpers::getLatestIndex() as $postNew)
                <div class="item">
                    <a href="{{ url($postNew->slug.'.html') }}" class="thumb">
                        <img src="{{ \App\Helpers::imgCache($postNew->image, 130, 80)  }}" alt="List news">
                    </a>
                    <p>
                        {{ \Illuminate\Support\Str::limit($postNew->desc, 120) }}
                    </p>
                    <span class="datePost">{{ $postNew->created_at->format('d/m/Y') }}</span>
                    <span class="countView">{{ $postNew->views }} lượt xem</span>
                </div>
            @endforeach

        </div>
    </div>

@endsection