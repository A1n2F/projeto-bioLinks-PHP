<div>
    <h1>DASHBOARD</h1>

    <ul>
        @foreach ($links as $link)
            <li>
                <a href="/links/{{ $link->id }}">{{ $link->name }}</a>
            </li>
        @endforeach
    </ul>
</div>
