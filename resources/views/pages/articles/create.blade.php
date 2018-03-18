@extends('layout')

@section('pagetitle')
    {{--create article--}}
    <seaction id="portfolio-header">
        <div class="small-12 medium-12 large-12 columns page-title text-center caption">
            <h2 class="text-3d">صفحه ایجاد مقاله جدید</h2>
        </div>
    </seaction>
@endsection

@section('content')
    {{--create article form--}}
    <section id="article-create">
        <div class="row">
            <div class="small-12 medium-12 large-12 columns">
                <blockquote>
                    <h5 class="dark-stork-shadow">فرم ایجاد مقاله جدید</h5>
                </blockquote>
                <form action="{{ route('article.store') }}" method="post" data-abide>
                    {{ csrf_field() }}
                    {{--title--}}
                    <div class="row">
                        <div class="small-3 medium-2 large-2 columns">
                            <label class="inline" for="title">عنوان مقاله</label>
                        </div>
                        <div class="small-9 medium-10 large-10 columns">
                            <input type="text" class="text-right" id="title" name="title" placeholder="لطفا تیتر مقاله خود را وارد کنید ...">
                            <small class="error text-right">
                                لطفا نام خود را وارد کنید.
                            </small>
                        </div>
                    </div>
                    {{--subject--}}
                    <!--<div class="row">
                        <div class="small-3 medium-2 large-2 columns">
                            <label class="inline" for="category">دسته بندی</label>
                        </div>
                        <div class="small-9 medium-10 large-10 columns">
                            <select>
                                <option value="دیپلم">دیپلم</option>
                                <option value="فوق دیپلم">فوق دیپلم</option>
                                <option value="لیسانس">لیسانس</option>
                                <option value="فوق لیسانس">فوق لیسانس</option>
                                <option value="دکترا">دکترا</option>
                            </select>
                            <small class="error text-right"></small>
                        </div>
                    </div>-->
                    {{--body--}}
                    <div class="row">
                        <div class="small-3 medium-2 large-2 columns">
                            <label class="inline" for="body">متن مقاله</label>
                        </div>
                        <div class="small-9 medium-10 large-10 columns">
                        <textarea id="body" name="body" cols="30" rows="7" class="text-right"
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
                            <button type="submit" class="bttn-pill bttn-lg bttn-royal b-margin">ارسال مقاله</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
