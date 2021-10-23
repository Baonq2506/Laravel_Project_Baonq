<form action="{{ route($link) }}" method="post">
    @csrf
    {{ $method }}
    <button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Trash"><i
            class="{{ $icon }}" aria-hidden="true"></i></button>
</form>
