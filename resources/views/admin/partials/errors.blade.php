@if ($errors->any())
    <div class="alert alert-danger mb-4">
        <strong>Ой!</strong> Исправьте следующие ошибки:<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-white">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
