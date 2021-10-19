<textarea id="summernote" style="display: none;" name='{{ $name }}'
    placeholder="Content"> {{ $description }}</textarea>
@push('stack_js')
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote({
                height: 130,
            })
        })
    </script>
@endpush
