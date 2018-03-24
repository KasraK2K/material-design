@if(count($errors))
    <div class="row alert-box alert" id="form-alert-box">
        <div class="small-12">
            @foreach($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    </div>
@endif
