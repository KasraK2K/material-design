@extends('layout')

@section('pagetitle')
    {{--page title--}}
    <seaction id="portfolio-header">
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
                        <h3 class="text-right"><a href="#">{{ $article->title }}</a></h3>
                        <img src="https://placehold.it/720x300" alt="" class="blog-image right">
                        <br>
                        <div class="panel-shadow">
                            <p class="text-justify" data-equalizer-watch>{!! $article->body !!}</p>
                            <ul class="panel no-bullet blog-info">
                                <li><i class="fi-clock"></i><span>تاریخ انتشار: 1365/01/01 ساعت 11:45</span></li>
                                <li><i class="fi-pencil"></i><span>نوشته شده توسط:<a href="#"> کسری کرمی</a></span></li>
                                <li><i class="fi-archive"></i><a>نام دسته بندی</a></li>
                            </ul>
                            <p class="text-right b-margin">
                                <button class="bttn-pill bttn-lg bttn-royal"><a href="#" muse_scanned="true">ادامه مطلب</a></button>
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
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که </p>
                    <a href="#">خواندن بیشتر ...</a>
                </div>
            </aside>
        </div>
        {{--paginate--}}
        <div class="row">
            <div class="smal-12 medium-12 large-12 text-center columns">
                <div class="pagination-centered b-margin">
                    <ul class="pagination">
                        <li class="unavailable arrow">
                            <a href="#">قبلی</a>
                        </li>
                        <li class="current">
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li class="unavailable">
                            <a href="">&hellip;</a>
                        </li>
                        <li>
                            <a href="#">10</a>
                        </li>
                        <li class="arrow next">
                            <a href="#">بعدی</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
