<ul class="navbar">
    @foreach ($navigations as $navigation => $url)
        <li><a href="{{ $url }}">{{ $navigation }}</a></li>
    @endforeach
</ul>
