@extends('layout')

@section('slider')
    <div class="small-12 medium-12 large-12" id="slider">
        <ul data-orbit>
            <li>
                <div class="slider-bg-first">
                    <img src="img/body/material-ui-logo.svg" alt="">
                    <h2 class="text-center">طراحی سایت متریال دیزاین</h2>
                </div>
            </li>
            <li>
                <div class="slider-bg-first">
                    <img src="img/body/material-ui-logo.svg" alt="">
                    <h2 class="text-center">بهینه سازی و سئو حرفه ای</h2>
                </div>
            </li>
            <li>
                <div class="slider-bg-first">
                    <img src="img/body/material-ui-logo.svg" alt="">
                    <h2 class="text-center">کمپین های تبلیغاتی هدفمند</h2>
                </div>
            </li>
            <li>
                <div class="slider-bg-first">
                    <img src="img/body/material-ui-logo.svg" alt="">
                    <h2 class="text-center">افزایش بازدهی سایت کاملا واقعی</h2>
                </div>
            </li>
        </ul>
    </div>
@endsection

@section('content')
    {{--talent--}}
    <section id="talent">
        <div class="row">
            <div class="small-12 medium-12 large-12 columns" id="joyride1">
                <hr>
                <h2 class="text-center dark-stork-shadow">مهارت های طراحی سایت ما</h2>
                <hr>
                <blockquote>
                    <p>ما در بین رقبا این ادعا را داریم که بهترین خدمات را ارائه می دهیم و همواره خدمات خود را با مناسب ترین
                        قیمت ارائه میدهیم. همچنین طی طراحی های ما به دلیل استفاده از لایسنس های اورجینال و کنترل پنل قدرتمند
                        ما هیچ گونه مشکلی برای آپدیت وبسایت خود نخواهید داشت. ضمنا پس از اتمام طراحی سایت با آموزش های ساده
                        و قابل فهم ما که فیلم تمام آموزش ها تقدیم شما می شود، خواهید توانست خود به یک طراح سایت تبدیل شوید و
                        تمام امورات خود را به صورت حرفه ای انجام دهید و دیگر هیچ نیازی به طراحی سایت نخواهید داشت.</p>
                </blockquote>
            </div>
        </div>
    </section>

    {{--target--}}
    <div class="row row-margin" id="target" data-equalizer>
        <div class="small-12 medium-12 large-12 text-center columns">
            <hr>
            <h2 class="dark-stork-shadow">اهداف ما</h2>
            <hr>
        </div>
        <div class="small-12 medium-3 large-3 text-center columns">
            <img src="img/svg/like.svg" title="رضایت مندی" alt="رضایت مندی">
            <h3>رضایت مندی</h3>
            <p class="panel" id="joyride2" data-equalizer-watch>جلب رضایت مشتری و بهترین تبلیغ برای ماست لذا همواره در تلاشیم بتوانیم با
                خدمات خود شما عزیزان را راضی و خشنود نماییم.</p>
        </div>
        <div class="small-12 medium-3 large-3 text-center columns">
            <img src="img/svg/time.svg" title="تحویل به موقع پروژه" alt="تحویل به موقع پروژه">
            <h3>تحویل به موقع پروژه</h3>
            <p class="panel" data-equalizer-watch>ما این اطمینان را به شما می دهیم زمانی که با ما قرارداد طراحی سایت بستید
                سایت شما را در زمان مقرر تحویل می دهیم چرا که اگر وقت انجام آن را نداشته باشیم طراحی سایت شما را قبول نمی
                کنیم.</p>
        </div>
        <div class="small-12 medium-3 large-3 text-center columns">
            <img src="img/svg/support.svg" title="پشتیبانی 12 ماهه" alt="پشتیبانی 12 ماهه">
            <h3>پشتیبانی 12 ماهه</h3>
            <p class="panel" data-equalizer-watch>به مدت 12 ماه در سریع ترین زمان مشکلات سایت شما را حل می کنیم و همیشه
                همراه شما خواهیم بود.</p>
        </div>
        <div class="small-12 medium-3 large-3 text-center columns">
            <img src="img/svg/learn.svg" title="آموزش مدیریت سایت" alt="آموزش مدیریت سایت">
            <h3>آموزش مدیریت سایت</h3>
            <p class="panel" data-equalizer-watch>ما مدیریت سایت را به صور کامل بدون هیچ قید و شرط به شما آموزش می دهیم به
                طوری که پس از آموزش شما هیچ گونه نیازی به ما نداشته باشید.</p>
        </div>
    </div>

    {{--blog--}}
    <section id="blog">
        <div class="row row-margin">
            <div class="smal-12 medium-12 large-12 columns">
                <hr>
                <h2 class="text-center dark-stork-shadow">آخرین مقالات منتشر شده</h2>
                <hr>
            </div>
        </div>
        <div class="row" id="blog-sibling" data-equalizer>
            <div class="smal-12 medium-4 large-4 columns" id="joyride3">
                <article>
                    <h3 class="text-right"><a href="#">مطلب نمونه به عنوان مقاله دو</a></h3>
                    <img src="https://placehold.it/300x240" alt="" class="blog-image right">
                    <br>
                    <div class="panel panel-shadow">
                        <p class="text-justify" data-equalizer-watch>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی</p>
                        <hr>
                        <ul class="no-bullet blog-info">
                            <li><i class="fi-clock"></i><span>تاریخ انتشار: 1365/01/01 ساعت 11:45</span></li>
                            <li><i class="fi-archive"></i><a>دسته بندی</a></li>
                        </ul>
                        <hr>
                        <p class="text-right b-margin">
                            <a href="#">ادامه مطلب...</a>
                        </p>
                    </div>
                </article>
            </div>
            <div class="smal-12 medium-4 large-4 columns">
                <article>
                    <h3 class="text-right"><a href="#">مطلب نمونه به عنوان مقاله دو</a></h3>
                    <img src="https://placehold.it/300x240" alt="" class="blog-image right">
                    <br>
                    <div class="panel panel-shadow">
                        <p class="text-justify" data-equalizer-watch>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی</p>
                        <hr>
                        <ul class="no-bullet blog-info">
                            <li><i class="fi-clock"></i><span>تاریخ انتشار: 1365/01/01 ساعت 11:45</span></li>
                            <li><i class="fi-archive"></i><a>دسته بندی</a></li>
                        </ul>
                        <hr>
                        <p class="text-right b-margin">
                            <a href="#">ادامه مطلب...</a>
                        </p>
                    </div>
                </article>
            </div>
            <div class="smal-12 medium-4 large-4 columns">
                <article>
                    <h3 class="text-right"><a href="#">مطلب نمونه به عنوان مقاله دو</a></h3>
                    <img src="https://placehold.it/300x240" alt="" class="blog-image right">
                    <br>
                    <div class="panel panel-shadow">
                        <p class="text-justify" data-equalizer-watch>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی</p>
                        <hr>
                        <ul class="no-bullet blog-info">
                            <li><i class="fi-clock"></i><span>تاریخ انتشار: 1365/01/01 ساعت 11:45</span></li>
                            <li><i class="fi-archive"></i><a>دسته بندی</a></li>
                        </ul>
                        <hr>
                        <p class="text-right b-margin">
                            <a href="#">ادامه مطلب...</a>
                        </p>
                    </div>
                </article>
            </div>
        </div>
        <div class="row">
            <div class="small-12 medium-12 large-12 columns">
                <h4 class="text-center">
                    <button class="bttn-pill bttn-lg bttn-royal"><a href="articles.html">مطالعه بیشتر وبلاگ</a></button>
                </h4>
            </div>
        </div>
    </section>

    {{--portfolio--}}
    <section id="portfolio">
        <div class="row row-margin">
            <div class="smal-12 medium-12 large-12 columns">
                <hr>
                <h2 class="text-center dark-stork-shadow">برخی از نمونه کارها</h2>
                <hr>
            </div>
        </div>
        <div class="row" id="joyride4">
            <div class="smal-12 medium-12 large-12 columns">
                <ul class="clearing-thumbs no-bullet small-block-grid-2 medium-block-grid-4 large-block-grid-4"
                    data-clearing>
                    <li>
                        <a href="img/portfolio/rahavardweld.jpg">
                            <img src="img/portfolio/rahavardweld-thumb.jpg" alt="" class="th"
                                 data-caption="طراحی سایت کارخانه رهاورد سازه اراک">
                        </a>
                        <blockquote>
                            <h4 class="text-right"><a href="#" class="portfolio-text">کارخانه رهاورد سازه اراک</a></h4>
                        </blockquote>
                    </li>
                    <li>
                        <a href="img/portfolio/damnooshkadeh.jpg">
                            <img src="img/portfolio/damnooshkadeh-thumb.jpg" alt="" class="th"
                                 data-caption="طراحی فروشگاه اینترنتی دمنوشکده">
                        </a>
                        <blockquote>
                            <h4 class="text-right"><a href="#">فروشگاه اینترنتی دمنوشکده</a></h4>
                        </blockquote>
                    </li>
                    <li>
                        <a href="img/portfolio/paresang.jpg">
                            <img src="img/portfolio/paresang-thumb.jpg" alt="" class="th"
                                 data-caption="طراحی فروشگاه اینترنتی نولند">
                        </a>
                        <blockquote>
                            <h4 class="text-right"><a href="#">فروشگاه اینترنتی نولند</a></h4>
                        </blockquote>
                    </li>
                    <li>
                        <a href="img/portfolio/aradpackcenter.jpg">
                            <img src="img/portfolio/aradpackcenter-thumb.jpg" alt="" class="th"
                                 data-caption="طراحی سایت شرکت آراد پک سنتر">
                        </a>
                        <blockquote>
                            <h4 class="text-right"><a href="#">شرکت آراد پک سنتر</a></h4>
                        </blockquote>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="smal-12 medium-12 large-12 text-center columns">
                <button class="bttn-pill bttn-lg bttn-royal b-margin"><a href="portfolio.html" class="awsome">مشاهده نمونه کارهای بیشتر</a></button>
            </div>
        </div>
    </section>
@endsection

@section('joyride')
    {{--<ol class="hide" id="joyride" data-joyride>--}}
        {{--<li data-id="joyride1" data-options="prev_button:false;" data-text="بعدی">--}}
            {{--<H3 class="text-right">کیفیت اتفاقی نیست</H3>--}}
            {{--<ul class="no-bullet text-right">--}}
                {{--<li>ارائه برترین کنترل پنل در بین رقبا</li>--}}
                {{--<li>طراحی سبک وسریع و کاربر پسند</li>--}}
                {{--<li>طراحی متفاوت و کاملا اختصاصی</li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        {{--<li data-id="joyride2" data-prev-text="قبلی" data-text="بعدی">--}}
            {{--<H3 class="text-right">اهداف ما</H3>--}}
            {{--<ul class="no-bullet text-right">--}}
                {{--<li>جلب رضایت مشتری</li>--}}
                {{--<li>تحویل به موقع پروژه</li>--}}
                {{--<li>پشتیبانی 12 ماهه</li>--}}
                {{--<li>آموزش کامل مدیریت سایت</li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        {{--<li data-id="joyride3" data-prev-text="قبلی" data-text="بعدی">--}}
            {{--<H3 class="text-right">مقالات آموزشی</H3>--}}
            {{--<ul class="no-bullet text-right">--}}
                {{--<li>--}}
                    {{--<a href="#">آخرین تیتر وبلاگ</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#">یکب مونده به آخرین تیتر وبلاگ</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        {{--<li data-id="joyride4" data-options="next_button:false;" data-prev-text="قبلی">--}}
            {{--<H3 class="text-right">برخی از نمونه کارها</H3>--}}
            {{--<ul class="no-bullet text-right">--}}
                {{--<li>--}}
                    {{--<a href="#">شرکت آراد پک سنتر</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#">فروشگاه اینترنتی نولند</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#">فروشگاه اینترنتی دمنوشکده</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#">کارخانه رهاورد سازه اراک</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}
    {{--</ol>--}}
@endsection

@section('joyride-js')
    {{--<script>--}}
        {{--$(document).ready(function () {--}}
            {{--$(document).foundation('joyride', 'start');--}}
        {{--});--}}
    {{--</script>--}}
@endsection
