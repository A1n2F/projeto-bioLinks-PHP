<x-layout.app>
    <div>
        <h1 className="text-red-500">BIO LINKS</h1>
        <x-img src="/storage/{{ $user->photo }}" alt="Photo Profile" />
        <h2>User {{ $user->name }} :: {{ $user->id }}</h2>
        <h3>{{ $user->description }}</h3>

        <ul>
            @foreach ($user->links as $link)
                <li> 
                    <a href="{{ $link->link }}" target="_blank">
                        {{ $link->id }}. {{ $link->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout.app>