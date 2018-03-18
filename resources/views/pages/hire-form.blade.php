@extends('layout')

@section('pagetitle')
    {{--page title--}}
    <seaction id="portfolio-header">
        <div class="small-12 medium-12 large-12 columns page-title text-center caption">
            <h2 class="text-3d">استخدام در گروه متریال دیزاین</h2>
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

    {{--hire form--}}
    <section id="hire">
        <div class="row">
            <div class="small-12 medium-12 large-12 columns">
                <blockquote>
                    <h5 class="dark-stork-shadow">فرم استخدام در گروه طراحی سایت متریال دیزاین</h5>
                </blockquote>
                <form action="" id="hire-form" data-abide>
                    <!--name-->
                    <div class="small-12 medium-6 large-6 columns">
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
                    <!--family-->
                    <div class="small-12 medium-6 large-6 columns">

                        <div class="small-4 medium-3 large-3 columns">
                            <label class="inline" for="family">نام خانوادگی</label>
                        </div>
                        <div class="small-8 medium-9 large-9 columns">
                            <input required type="text" class="text-right" id="family" placeholder="نام خانوادگی شما ...">
                            <small class="error text-right">
                                لطفا نام خانوادگی خود را وارد کنید.
                            </small>
                        </div>
                    </div>
                    <!--code-->
                    <div class="small-12 medium-6 large-6 columns">

                        <div class="small-4 medium-3 large-3 columns">
                            <label class="inline" for="code">کد ملی</label>
                        </div>
                        <div class="small-8 medium-9 large-9 columns">
                            <input required type="number" class="text-right" id="code" placeholder="کد ملی شما ...">
                            <small class="error text-right">
                                لطفا کد ملی خود را وارد کنید.
                            </small>
                        </div>
                    </div>
                    <!--birthday-->
                    <div class="small-12 medium-6 large-6 columns">
                        <div class="small-4 medium-3 large-3 columns">
                            <label class="inline" for="birthday">تاریخ تولد</label>
                        </div>
                        <div class="small-8 medium-9 large-9 columns">
                            <input required type="text"pattern="^13[4-8]{1}[0-9]{1}/[0-1]{1}[0-2]{1}/[0-3]{1}[0-9]{1}" class="text-right" id="birthday" placeholder="مثال: 1365/01/01">
                            <small class="error text-right">
                                لطفا تاریخ تولد خود را وارد کنید.
                            </small>
                        </div>
                    </div>
                    <!--town-->
                    <div class="small-12 medium-6 large-6 columns">
                        <div class="small-4 medium-3 large-3 columns">
                            <label class="inline" for="town">محل تولد</label>
                        </div>
                        <div class="small-8 medium-9 large-9 columns">
                            <input required type="text" class="text-right" id="town" placeholder="محل تولد شما ...">
                            <small class="error text-right">
                                لطفا محل تولد خود را وارد کنید.
                            </small>
                        </div>
                    </div>
                    <!--Marriage-->
                    <div class="small-12 medium-6 large-6 columns">
                        <div class="small-5 medium-3 large-3 columns">
                            <label class="inline">وضعیت تاهل</label>
                        </div>
                        <div class="small-7 medium-9 large-9 columns">
                            <input required type="radio" name="Marriage" value="mojarad" id="mojarad" class="text-right">
                            <label for="mojarad">مجرد</label>
                            <input required type="radio" name="Marriage" value="moteahel" id="moteahel" class="text-right">
                            <label for="moteahel">متاهل</label>
                            <small class="error text-right">
                                لطفا وضعیت تاهل خود را وارد کنید.
                            </small>
                        </div>
                    </div>
                    <!--mobile-->
                    <div class="small-12 medium-6 large-6 columns">
                        <div class="small-4 medium-3 large-3 columns">
                            <label class="inline" for="mobile">تلفن همراه</label>
                        </div>
                        <div class="small-8 medium-9 large-9 columns">
                            <input required type="number" pattern="^09[0-9]{9}" class="text-right" id="mobile" placeholder="تلفن همراه شما ...">
                            <small class="error text-right">
                                لطفا تلفن همراه خود را وارد کنید.
                            </small>
                        </div>
                    </div>
                    <!--new-town-->
                    <div class="small-12 medium-6 large-6 columns">
                        <div class="small-4 medium-3 large-3 columns">
                            <label class="inline" for="new-town">محل سکونت</label>
                        </div>
                        <div class="small-8 medium-9 large-9 columns">
                            <input required type="text" class="text-right" id="new-town" placeholder="محل سکونت شما ...">
                            <small class="error text-right">
                                لطفا محل سکونت خود را وارد کنید.
                            </small>
                        </div>
                    </div>
                    <!--email-->
                    <div class="small-12 medium-6 large-6 columns">
                        <div class="small-4 medium-3 large-3 columns">
                            <label class="inline" for="email">ایمیل</label>
                        </div>
                        <div class="small-8 medium-9 large-9 columns">
                            <input required type="email" class="text-right" id="email" placeholder="ایمیل شما ...">
                            <small class="error text-right">
                                لطفا ایمیل خود را وارد کنید.
                            </small>
                        </div>
                    </div>
                    <!--telephone-->
                    <div class="small-12 medium-6 large-6 columns">
                        <div class="small-4 medium-3 large-3 columns">
                            <label class="inline" for="telephone">تلفن ثابت</label>
                        </div>
                        <div class="small-8 medium-9 large-9 columns">
                            <input required type="text"pattern="^0[1-9]{1}[1-9]{1}-[0-9]{8}" class="text-right" id="telephone" placeholder="مثال: 22222222-021">
                            <small class="error text-right">
                                لطفا تلفن ثابت خود را وارد کنید.
                            </small>
                        </div>
                    </div>
                    <!--military-->
                    <div class="small-12 medium-6 large-6 columns">
                        <div class="small-4 medium-3 large-3 columns">
                            <label class="inline">نظام وظیفه</label>
                        </div>
                        <div class="small-8 medium-9 large-9 columns">
                            <input required type="radio" name="military" value="Red" id="moaf" class="text-right">
                            <label for="moaf">معاف</label>
                            <br class="show-for-small-only">
                            <input required type="radio" name="military" value="Blue" id="payane-khedmat" class="text-right">
                            <label for="payane-khedmat">کارت پایان خدمت</label>
                            <br class="show-for-small-only">
                            <input required type="radio" name="military" value="Blue" id="mashmool" class="text-right">
                            <label for="mashmool">مشمول</label>
                            <small class="error text-right">
                                لطفا وضعیت تاهل خود را وارد کنید.
                            </small>
                        </div>
                    </div>
                    <!--license-->
                    <div class="small-12 medium-6 large-6 columns">
                        <div class="small-4 medium-3 large-3 columns">
                            <label class="inline">تحصیلات</label>
                        </div>
                        <div class="small-8 medium-9 large-9 columns">
                            <select>
                                <option value="دیپلم">دیپلم</option>
                                <option value="فوق دیپلم">فوق دیپلم</option>
                                <option value="لیسانس">لیسانس</option>
                                <option value="فوق لیسانس">فوق لیسانس</option>
                                <option value="دکترا">دکترا</option>
                            </select>
                            <small class="error text-right"></small>
                        </div>
                    </div>
                    <!--reshte-->
                    <div class="small-12 medium-6 large-6 columns">
                        <div class="small-4 medium-3 large-3 columns">
                            <label class="inline" for="reshte">رشته</label>
                        </div>
                        <div class="small-8 medium-9 large-9 columns">
                            <input required type="text" class="text-right" id="reshte" placeholder="رشته تحصیلی شما ...">
                            <small class="error text-right">
                                لطفا رشته  تحصیلی خود را وارد کنید.
                            </small>
                        </div>
                    </div>
                    <!--pay-->
                    <div class="small-12 medium-6 large-6 columns">
                        <div class="small-4 medium-3 large-3 columns">
                            <label class="inline" for="pay">حقوق</label>
                        </div>
                        <div class="small-8 medium-9 large-9 columns">
                            <input required type="text" class="text-right" id="pay" placeholder="حقوق پیشنهادی شما ...">
                            <small class="error text-right">
                                لطفا حقوق پیشنهادی خود را وارد کنید.
                            </small>
                        </div>
                    </div>
                    <!--talent-->
                    <div class="small-12 medium-12 large-12 columns">
                        <div class="small-4 medium-1 large-1 columns">
                            <label class="inline" for="talent">تخصص</label>
                        </div>
                        <div class="small-8 medium-11 large-11 columns">
                            <textarea required name="message" id="talent" rows="5" class="text-right" placeholder="لطفا در رابطه با تخصص و سوابق خود توضیح دهید ..."></textarea>
                            <small class="error text-right" id="talent-error">
                                لطفا تخصص خود را وارد نمایید.
                            </small>
                        </div>
                    </div>
                    <!--submit-->
                    <div class="small-12 medium-12 large-12 columns">
                        <div class="small-4 medium-3 large-3 columns">
                            <label>&nbsp;</label>
                        </div>
                        <div class="small-12 medium-9 large-9 columns">
                            <button type="submit" class="bttn-pill bttn-lg bttn-royal b-margin">ارسال</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
