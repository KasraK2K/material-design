<aside class="large-3 columns">
    <h5>دسته بندی ها</h5>
        {{--@foreach( $article->categories()->pluck('name') as $cate)--}}
            {{--<li><a href="/article/category/{{ $cate }}">{{ $cate }}</a></li>--}}
        {{--@endforeach--}}

    {{--with chunk() method--}}
    {{--@foreach( $categories as $row)--}}
        {{--<ul class="side-nav">--}}
            {{--@foreach( $row as $category)--}}
                {{--<li><a href="/article/category/{{ $category->name }}">{{ $category->name }}</a></li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--@endforeach--}}

    <ul class="side-nav">
        @foreach( $categories as $category)
            <li><a href="/article/category/{{ $category->name }}">{{ $category->name }}</a></li>
        @endforeach
    </ul>

    <div class="panel">
        <h5>ویژگی ها</h5>
        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که </p>
        <a href="#">خواندن بیشتر ...</a>
    </div>
</aside>
