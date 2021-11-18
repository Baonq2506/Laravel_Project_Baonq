<ul>
    @foreach ($childs as $child)
        <li>
            @if (count($child->children))
                <i class="fas fa-plus"></i>
            @endif
            {{ $child->name }}
            @if (count($child->children))
                @include('backend.roles.manageChild',['childs' => $child->children])
            @endif
        </li>
    @endforeach
</ul>
