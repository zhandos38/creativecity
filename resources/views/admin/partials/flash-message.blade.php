@if ($message = Session::get('success'))
    @push('page-scripts')
        <script>
            toastr.success('{{ $message }}')
        </script>
    @endpush
@endif

@if ($message = Session::get('error'))
    @push('page-scripts')
        <script>
            toastr.error('{{ $message }}')
        </script>
    @endpush
@endif

@if ($message = Session::get('warning'))
    @push('page-scripts')
        <script>
            toastr.warning('{{ $message }}')
        </script>
    @endpush
@endif

@if ($message = Session::get('info'))
    @push('page-scripts')
        <script>
            toastr.info('{{ $message }}')
        </script>
    @endpush
@endif

