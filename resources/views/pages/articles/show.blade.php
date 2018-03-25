@extends('layout')

@section('pagetitle')
    {{--page title--}}
    <seaction>
        <div class="small-12 medium-12 large-12 columns page-title text-center caption">
            <h2 class="text-3d">{{ $article->title }}</h2>
        </div>
    </seaction>
@endsection

@section('content')
    {{--blog--}}
    <section id="blog-show">
        {{--blog category title--}}
        <div class="row row-margin">
            <div class="smal-12 medium-12 large-12 columns">
                <hr>
                <h2 class="text-center dark-stork-shadow">{{ $article->title }}</h2>
                <hr>
            </div>
        </div>
        {{--blog posts--}}
        <div class="row">
            <div class="large-9 columns" role="content">
                <article>
                    <img src="https://placehold.it/720x300" alt="" class="blog-image right">
                    <br>
                    <div class="panel-shadow">
                        <p class="text-justify" data-equalizer-watch>{!! $article->body !!}</p>
                        <ul class="panel no-bullet blog-info">
                            <li>
                                <i class="fi-clock"></i><span>تاریخ انتشار: {{ jdate($article->updated_at)->format('Y/m/d ساعت H:i:s') }}</span>
                            </li>
                            <li><i class="fi-pencil"></i><span>نوشته شده توسط: <a
                                            href="#">{{ $article->user->name }}</a></span></li>
                            <li><i class="fi-archive"></i><a>نام دسته بندی</a></li>
                        </ul>
                    </div>
                </article>
                <p class="text-right bold">ارسال دیدگاه</p>
                @if(auth::check())
                    <div class="no-margin">
                        @include('layouts.errors')
                    </div>
                    <form action="{{ route('comment.store', ['article' => $article->slug]) }}" method="post" class="panel" data-abide>
                        @csrf
                        <div>
                            <label for="comment">دیدگاه:</label>
                            <textarea required id="comment" name="comment" rows="2" class="text-right"
                                      placeholder="دیدگاه شما ...">{!! old('comment') !!}</textarea>
                            <small class="error text-right">
                                لطفا دیدگاه خود را وارد نمایید.
                            </small>
                        </div>
                        <button type="submit" class="bttn-pill bttn-lg bttn-royal">ارسال دیدگاه</button>
                    </form>
                    @if(!count($comments))
                        <ul class="no-bullet blog-info comment b-margin">
                            <li>
                                <i class="fi-comments"></i><label for="comment" class="inline dark-lighter-text">اولین نفری باشید که برای این مطلب دیدگاهی ارسال میکند.</label>
                            </li>
                        </ul>
                    @endif
                @else
                    <div class="panel callout">برای ارسال دیدگاه باید <a href="/login">وارد</a> شده باشید. اگر اکانت ندارید <a
                                href="/register">ثبت نام</a> کنید.</div>
                @endif


                @foreach($comments as $comment)
                    <ul class="no-bullet blog-info comment" id="comment">
                        <li>
                            <i class="fi-torso"></i><span class="bold">{{ $comment->user->name }}</span>
                        </li>
                        <li>
                            <i class="fi-clock"></i><span>تاریخ انتشار: {{ jdate($article->updated_at)->format('Y/m/d ساعت H:i:s') }}</span>
                        </li>
                        <li>
                            <i class="fi-comment"></i><span>{!! $comment->comment !!}</span>
                        </li>
                    </ul>
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
