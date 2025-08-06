<x-layout.app>
    <x-container>
        <div class="flex flex-col items-center space-y-2 w-2/3">
            <x-img src="/storage/{{ $user->photo }}" alt="Profile Picture" />
            <h2 class="text-2xl font-bold tracking-wider">{{ $user->name }}</h2> 
            <h3 class="opacity-80">{{ $user->description }}</h3>

            <ul class="space-y-2 mt-5">
                @foreach ($user->links as $link)
                    <li class="flex items-center justify-center w-80">
                        <x-button href="{{ $link->link }}" block outline info target="_blank">
                            {{ $link->name }}
                        </x-button>
                    </li>
                @endforeach
            </ul>
        </div>
    </x-container>
</x-layout.app>