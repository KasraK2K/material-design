<!doctype html>
<html class="no-js" lang="fa" dir="rtl">
<head>
    {{--head-down-extentions--}}
    @yield('head-up-extention')

    {{--head links--}}
    @include('layouts.head')

    {{--head-down-extentions--}}
    @yield('head-down-extention')

</head>
<body>
{{--Body Content--}}

{{--main menu--}}
@include('layouts.navbar')

{{--slider--}}
@yield('slider')

{{--page title--}}
@yield('pagetitle')

{{--content--}}
@yield('content')

{{--footer--}}
@include('layouts.footer')

{{--copyright--}}
@include('layouts.copyright')

{{--joyride--}}
@yield('joyride')

{{--JavaScripts Here--}}
@include('layouts.footer-script')

{{--down-extentions--}}
@yield('down-extention')

{{--joyride--}}
@yield('joyride-js')

</body>
</html>
