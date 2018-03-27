@extends('layout')

@section('pagetitle')
    {{--create article--}}
    <seaction>
        <div class="small-12 medium-12 large-12 columns page-title text-center caption">
            <h2 class="text-3d">صفحه ویرایش مقاله</h2>
        </div>
    </seaction>
@endsection

@section('content')
    {{--create article form--}}
    <section id="article-create">
        <div class="row">
            <div class="small-12 medium-12 large-12 columns">
                <blockquote>
                    <h5 class="dark-stork-shadow">فرم ویرایش مقاله</h5>
                </blockquote>
                {{--errors--}}
                @include('layouts.errors')
                <form action="{{ route('article.update', ['article' => $article->slug]) }}" method="post" data-abide>
                    @csrf
                    {{ method_field('PATCH') }}
                    {{--title--}}
                    <div class="row">
                        <div class="small-3 medium-2 large-2 columns">
                            <label class="inline" for="title">عنوان مقاله</label>
                        </div>
                        <div class="small-9 medium-10 large-10 columns">
                            <input required type="text" class="text-right" id="title" name="title" value="{{ $article->title }}" placeholder="لطفا تیتر مقاله خود را وارد کنید ...">
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
                                        <input name="category[]" id="category{{ $id }}" {{ in_array($id, $article->categories()->pluck('id')->toArray()) ? 'checked' : '' }} type="checkbox" value="{{ $id }}"><label for="category{{ $id }}">{{ $name }}</label>
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
                                  placeholder="متن پیام شما ...">{!! $article->body !!}</textarea>
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
                            <button type="submit" class="bttn-pill bttn-lg bttn-royal b-margin">ویرایش مقاله</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
