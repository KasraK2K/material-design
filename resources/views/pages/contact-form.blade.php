@extends('layout')

@section('pagetitle')
    {{--page title--}}
    <seaction id="portfolio-header">
        <div class="small-12 medium-12 large-12 columns page-title text-center caption">
            <h2 class="text-3d">تماس با متریال دیزاین</h2>
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

    {{--contact form--}}
    <section id="contact-us">
        <div class="row">
            <div class="small-12 medium-6 medium-offset-1 large-6 large-offset-1 columns">
                <blockquote>
                    <h5 class="dark-stork-shadow">فرم تماس با ما</h5>
                </blockquote>
                <form action="" id="contact-form" data-abide>
                    {{--name--}}
                    <div class="row">
                        <div class="small-4 medium-3 large-3 columns">
                            <label class="inline" for="name">نام</label>
                        </div>
                        <div class="small-8 medium-9 large-9 columns">
                            <input required type="text" class="text-right" id="name" placeholder="نام شما ...">
                            <small class="error text-right">
                                لطفا نام خود را وارد کنید.
                            </small>
                        </div>
                    </div>
                    {{--family--}}
                    <div class="row">
                        <div class="small-4 medium-3 large-3 columns">
                            <label class="inline" for="family">نام خانوادگی</label>
                        </div>
                        <div class="small-8 medium-9 large-9 columns">
                            <input required type="text" class="text-right" id="family" placeholder="نام خانوادگی شما ...">
                            <small class="error text-right">
                                لطفا نام خانوادگی خود را وارد نمایید.
                            </small>
                        </div>
                    </div>
                    {{--email--}}
                    <div class="row">
                        <div class="small-4 medium-3 large-3 columns">
                            <label class="inline" for="email">ایمیل</label>
                        </div>
                        <div class="small-8 medium-9 large-9 columns">
                            <input required type="email" class="text-right" id="email" placeholder="ایمیل شما ...">
                            <small class="error text-right">
                                لطفا ایمیل خود را وارد نمایید.
                            </small>
                        </div>
                    </div>
                    {{--subject--}}
                    <div class="row">
                        <div class="small-4 medium-3 large-3 columns">
                            <label class="inline" for="subject">موضوع پیام</label>
                        </div>
                        <div class="small-8 medium-9 large-9 columns">
                            <input type="text" class="text-right" id="subject" placeholder="موضوع پیام شما ...">
                            <small class="error text-right"></small>
                        </div>
                    </div>
                    {{--message--}}
                    <div class="row">
                        <div class="small-4 medium-3 large-3 columns">
                            <label class="inline" for="message">متن پیام</label>
                        </div>
                        <div class="small-8 medium-9 large-9 columns">
                        <textarea required name="message" id="message" cols="30" rows="5" class="text-right"
                                  placeholder="متن پیام شما ..."></textarea>
                            <small class="error text-right">
                                لطفا متن پیام خود را وارد نمایید.
                            </small>
                        </div>
                    </div>
                    {{--submit--}}
                    <div class="row">
                        <div class="small-4 medium-3 large-3 columns">
                            <label>&nbsp;</label>
                        </div>
                        <div class="small-8 medium-9 large-9 columns">
                            <button type="submit" class="bttn-pill bttn-lg bttn-royal b-margin">ارسال</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="small-12 medium-5 large-5 columns">
                <blockquote>
                    <h5 class="dark-stork-shadow">اطلاعات بیشتر</h5>
                </blockquote>
                <ul class="inline-list">
                    <li>09183619290</li>
                    <li><i class="fi-telephone"></i></li>
                </ul>
                <ul class="inline-list">
                    <li>
                        info@imensite.com
                    </li>
                    <li>
                        <i class="fi-mail"></i>
                    </li>
                </ul>
                <ul class="inline-list">
                    <li>
                        اراک ، خیابان ، خرّم ، نبش کوچه حق
                    </li>
                    <li>
                        <i class="fi-home"></i>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
