<ul>
    @foreach ($childs as $child)
        <li>
            @if (count($child->children))
                <i class="fas fa-plus"></i>
            @else
                <input type="checkbox" name="permissions[]" value="{{ $child->id }}">
            @endif

            {{ $child->name }}
            @if (count($child->children))
                @include('backend.personnel.manageChild',['childs' => $child->children])
            @endif
        </li>
    @endforeach
</ul>
