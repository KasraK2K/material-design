@component('mail::message')
# گروه طراحی سایت متریال دیزاین

{{ $user->name }} عزیز، دیدگاه شما با موفقیت ارسال شد.

@component('mail::button', ['url' => 'http://www.material-design.ir'])
مشاهده سایت
@endcomponent

با تشکر,<br>
{{ config('app.name') }}
@endcomponent
