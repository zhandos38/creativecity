@php

    use App\Models\CallRequest;

    /**
     * @var $model CallRequest
     */

@endphp
<p>
    Здравствуйте, Новый запрос на нашем сайте.
</p>
</br>

<p>Ниже, информация о запросе:</p></br>
</br>

<p><b>Имя:</b> {{ $model->name }}</p>
<p><b>Телефон:</b> {{ $model->phone }}</p>
<p><b>Email:</b> {{ $model->email }}</p>

</br>
<p>---</p>
<p>
    С уважением, <a href='{{ url()->to('/') }}'>{{ $domain_name }}</a>
</p>
