<x-layout.app>
    <x-container>
        <div class="flex flex-col items-center space-y-2">
            <x-img src="/storage/{{ $user->photo }}" alt="Profile Picture" />
            <h2 class="text-2xl font-bold tracking-wider">{{ $user->name }}</h2> 
            <h3 class="opacity-80">{{ $user->description }}</h3>

            <ul class="space-y-2">
                @foreach ($links as $link)
                    <li class="w-3xs flex items-center gap-2">
                        @unless($loop->first)
                            <x-form :route="route('links.up', $link)" patch>
                                <x-button ghost>
                                    <x-icons.arrow-up class="w-6 h-6" />
                                </x-button>
                            </x-form>

                            @else
                                <x-button disabled ghost>
                                    <x-icons.arrow-up class="w-6 h-6 text-gray-500" />
                                </x-button>
                        @endunless

                        @unless($loop->last)
                            <x-form :route="route('links.down', $link)" patch>
                                <x-button ghost>
                                    <x-icons.arrow-down class="w-6 h-6" />
                                </x-button>
                            </x-form>

                            @else
                                <x-button disabled ghost>
                                    <x-icons.arrow-down class="w-6 h-6 text-gray-500" />
                                </x-button>
                        @endunless

                        <x-button href="{{ route('links.edit', $link) }}" block outline info>
                            {{ $link->name }}
                        </x-button>

                        <x-form :route="route('links.destroy', $link)" delete onsubmit="return confirm('Tem certeza?')">
                            <x-button ghost>
                                <x-icons.trash class="w-6 h-6" />
                            </x-button>
                        </x-form>
                    </li>
                @endforeach
            </ul>
        </div>
    </x-container>
</x-layout.app>