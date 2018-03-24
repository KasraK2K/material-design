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
                        <h3 class="text-right"><a
                                    href="{{ route( 'article.show', [ 'article' => $article->slug ]) }}">{{ $article->title }}</a>
                        </h3>
                        <a href="{{ route( 'article.show', [ 'article' => $article->slug ]) }}"><img
                                    src="https://placehold.it/720x300" alt="" class="blog-image right"></a>
                        <br>
                        <div class="panel-shadow">
                            <p class="text-justify" data-equalizer-watch>{!! $article->body !!}</p>
                            <ul class="panel no-bullet blog-info">
                                <li>
                                    <i class="fi-clock"></i><span>تاریخ انتشار: {{ jdate($article->updated_at)->format('Y/m/d ساعت H:i:s') }}</span>
                                </li>
                                <li><i class="fi-pencil"></i><span>نوشته شده توسط: <a href="#">{{ $article->user->name }}</a></span></li>
                                <li><i class="fi-archive"></i><a>نام دسته بندی</a></li>
                            </ul>
                            <p class="text-right b-margin">
                                <button class="bttn-pill bttn-lg bttn-royal"><a
                                            href="{{ route( 'article.show', [ 'article' => $article->slug ]) }}"
                                            muse_scanned="true">ادامه مطلب</a></button>
                            </p>
                        </div>
                    </article>
                @endforeach
            </div>
            <!--blog sidebar-->
            <aside class="large-3 columns">
                <h5>دسته بندی ها</h5>
                <ul class="side-nav">
                    <li><a href="#">مدیریت سایت</a></li>
                    <li><a href="#">مقالات آموزشی</a></li>
                    <li><a href="#">طراحی سایت</a></li>
                    <li><a href="#">مدیریت و ارتقا شغلی</a></li>
                    <li><a href="#">تکنولوژی</a></li>
                </ul>
                <div class="panel">
                    <h5>ویژگی ها</h5>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که </p>
                    <a href="#">خواندن بیشتر ...</a>
                </div>
            </aside>
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
