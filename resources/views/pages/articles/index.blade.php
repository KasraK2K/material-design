@extends('layout')

@section('pagetitle')
    {{--page title--}}
    <seaction>
        <div class="small-12 medium-12 large-12 columns page-title text-center caption">
            <h2 class="text-3d">مقالات آموزشی گروه متریال دیزاین</h2>
        </div>
    </seaction>
@endsection

@section('content')
    {{--blog--}}
    <section id="blog">
        {{--blog category title--}}
        <div class="row row-margin">
            <div class="smal-12 medium-12 large-12 columns">
                <hr>
                <h2 class="text-center dark-stork-shadow">مقالات نام دسته بندی</h2>
                <hr>
            </div>
        </div>
        {{--blog posts--}}
        <div class="row">
            <div class="large-9 columns" role="content">
                @foreach($articles as $article)
                    <article>
                        <h3 class="text-right">
                            {{--article title--}}
                            <a href="{{ route( 'article.show', [ 'article' => $article->slug ]) }}">{{ $article->title }}</a>
                            {{--update article--}}
                            @if(auth::check())<a href="{{ route('article.edit', ['article' => $article->slug]) }}" class="article-update">ویرایش مقاله</a>@endif
                        </h3>
                        <a href="{{ route( 'article.show', [ 'article' => $article->slug ]) }}"><img
                                    src="https://placehold.it/720x300" alt="" class="blog-image right"></a>
                        <br>
                        <div class="panel-shadow">
                            {{--article body--}}
                            <p class="text-justify" data-equalizer-watch>{!! $article->body !!}</p>
                            <ul class="panel no-bullet blog-info">
                                <li>
                                    <i class="fi-clock"></i><span>تاریخ انتشار: {{ jdate($article->updated_at)->format('Y/m/d ساعت H:i:s') }}</span>
                                </li>
                                <li><i class="fi-pencil"></i><span>نوشته شده توسط: <a href="#">{{ $article->user->name }}</a></span></li>
                                <li><i class="fi-archive"></i>
                                    @foreach( $article->categories()->pluck('name') as $cate)
                                        <a href="/article/category/{{ $cate }}">{{ $cate }}</a>@if(!$loop->last) - @endif
                                    @endforeach
                                </li>
                            </ul>
                            <p class="text-right b-margin">
                                <a href="{{ route( 'article.show', [ 'article' => $article->slug ]) }}" muse_scanned="true">
                                    <button class="bttn-pill bttn-lg bttn-royal">ادامه مطلب</button>
                                </a>
                            </p>
                        </div>
                    </article>
                    @if(!$loop->last)
                        <hr class="b-margin">
                    @endif
                @endforeach
            </div>
            {{--blog sidebar--}}
            @include('layouts.sidebar')
        </div>
        {{--paginate--}}
        <div class="row">
            <div class="smal-12 medium-12 large-12 text-center columns">
                <div class="pagination-centered b-margin">
                    {{ $articles->render() }}
                </div>
            </div>
        </div>
    </section>
@endsection
