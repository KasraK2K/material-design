<div class="contain-to-grid sticky">
    <nav class="top-bar" id="main-menu" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name">
                <h2 class="show-for-medium-up">
                    <a href="#">متریال دیزاین</a>
                </h2>
            </li>
            <li class="toggle-topbar menu-icon">
                <a href="#">
                    <span>منو</span>
                </a>
            </li>
        </ul>
        <section class="top-bar-section text-right">
            <ul class="right">
                <li>
                    <a href="/">خانه</a>
                </li>
                <li class="has-dropdown">
                    <a href="javascript:;">خدمات</a>
                    <ul class="dropdown">
                        <li>
                            <a href="#">طراحی سایت</a>
                        </li>
                        <li>
                            <a href="#">بهینه سازی سایت</a>
                        </li>
                        <li>
                            <a href="#">تبلیغات در گوگل</a>
                        </li>
                        <li>
                            <a href="">تبلیغات در اینستاگرام</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">فروشگاه</a>
                </li>

                <li>
                    <a href="/portfolio">نمونه کارها</a>
                </li>
                <li class="has-dropdown">
                    <a href="/article">مقالات</a>
                    <ul class="dropdown">
                        <li>
                            <a href="/article/create">ایجاد مقاله جدید</a>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="/about-us" rel="nofollow">درباره ما</a>
                    <ul class="dropdown">
                        <li>
                            <a href="#">قوانین و مقرارات</a>
                        </li>
                        <li>
                            <a href="#">معرفی عوامل و تخصص ها</a>
                        </li>
                        <li>
                            <a href="http://127.0.0.1:8000/about-us" rel="nofollow">درباره گروه طراحی متریال دیزاین</a>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="/contact-form" rel="nofollow">تماس با ما</a>
                    <ul class="dropdown">
                        <li>
                            <a href="/contact-form">تماس با متریال دیزاین</a>
                        </li>
                        <li>
                            <a href="/discontent-form">فرم ارسال شکایت برای مدیریت</a>
                        </li>
                        <li>
                            <a href="/hire-form">استخدام در متریال دیزاین</a>
                        </li>
                    </ul>
                </li>
                @if(auth::check())
                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="logout">خروج</button>
                        </form>
                    </li>
                @else
                    <li class="has-dropdown">
                        <a href="javascript:;" rel="nofollow">گزینه های کاربری</a>
                        <ul class="dropdown">
                            <li>
                                <a href="/login">ورود</a>
                            </li>
                            <li>
                                <a href="/register">ثبت نام</a>
                            </li>
                        </ul>
                    </li>
                @endif

            </ul>
        </section>
    </nav>
</div>
