@extends('layout')

@section('pagetitle')
    {{--page title--}}
    <seaction id="portfolio-header">
        <div class="small-12 medium-12 large-12 columns page-title text-center caption">
            <h2 class="text-3d">نمونه کارهای طراحی سایت ما</h2>
        </div>
    </seaction>
@endsection

@section('content')
    {{--search--}}
    <div class="row">
        <div class="small-12 medium-12 large-12 columns">
            <form class="form-wrapper" id="search-bar">
                <input type="text" id="search" placeholder="کلمه مورد نظر خود را وارد کنید ..." required>
                <input type="submit" value="جستجو" id="submit">
            </form>
        </div>
    </div>

    {{--portfolio--}}
    <section id="portfolio">
        <div class="row b-margin">
            <div class="smal-12 medium-12 large-12 columns">
                <hr>
                <h2 class="text-center dark-stork-shadow">برخی از نمونه کارها</h2>
                <hr>
            </div>
        </div>
        <div class="row">
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
                                 data-caption="طراحی فروشگاه اینترنتی یوزلند">
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
                                 data-caption="طراحی فروشگاه اینترنتی یوزلند">
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
                                 data-caption="طراحی فروشگاه اینترنتی یوزلند">
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
