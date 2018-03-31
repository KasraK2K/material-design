@extends('layout')

@section('pagetitle')
    {{--create article--}}
    <seaction>
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
                {{--sucsses message--}}
                @if($message = session('message'))
                    <div class="row margin-0">
                        <div data-alert class="small-12 columns alert-box success radius text-center">
                            {{ $message }}
                            <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                @endif
                {{--errors--}}
                @include('layouts.errors')
                <form action="{{ route('article.store') }}" method="post" data-abide>
                    @csrf
                    {{--title--}}
                    <div class="row">
                        <div class="small-3 medium-2 large-2 columns">
                            <label class="inline" for="title">عنوان مقاله</label>
                        </div>
                        <div class="small-9 medium-10 large-10 columns">
                            <input required type="text" class="text-right" id="title" name="title" value="{{ old('title') }}" placeholder="لطفا تیتر مقاله خود را وارد کنید ...">
                            <small class="error text-right">
                                لطفا نام خود را وارد کنید.
                            </small>
                        </div>
                    </div>
                    {{--subject--}}
                    <div class="row">
                        <div class="small-3 medium-2 large-2 columns">
                            <label class="inline" for="category">دسته بندی</label>
                        </div>
                        <div class="small-9 medium-10 large-10 columns">
                            <fieldset id="category">
                                <legend>دسته بندی</legend>
                                @foreach( $categories as $id => $name )
                                    <span>
                                        <input name="category[]" id="category{{ $id }}" type="checkbox" value="{{ $id }}"><label for="category{{ $id }}">{{ $name }}</label>
                                    </span>
                                @endforeach
                            </fieldset>
                        </div>
                    </div>
                    {{--body--}}
                    <div class="row">
                        <div class="small-3 medium-2 large-2 columns">
                            <label class="inline" for="body">متن مقاله</label>
                        </div>
                        <div class="small-9 medium-10 large-10 columns">
                        <textarea required id="body" name="body" cols="30" rows="7" class="text-right"
                                  placeholder="متن پیام شما ...">{!! old('body') !!}</textarea>
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
