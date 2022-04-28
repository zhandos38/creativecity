<nav>
    <ol class="breadcrumb p-0 m-b-0">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.dashboard') }}">
                <i class="ti ti-home"></i>
            </a>
        </li>
        @if(isset($first) && $first)
            @if($active == 1)
                <li class="breadcrumb-item active text-primary" aria-current="page">
                    {{ $first }}
                </li>
            @else
                <li class="breadcrumb-item" >
                    <a href="{{ $first_link }}">
                        {{ $first }}
                    </a>
                </li>
            @endif
        @endif
        @if(isset($second) && $second)
            @if($active == 2)
                <li class="breadcrumb-item active text-primary" aria-current="page">
                    {{ $second }}
                </li>
            @else
                <li class="breadcrumb-item" >
                    <a href="{{ $second_link }}">
                        {{ $second }}
                    </a>
                </li>
            @endif
        @endif
    </ol>
</nav>

