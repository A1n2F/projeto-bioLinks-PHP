<x-layout.app>
    <x-container>
        <div class="absolute top-30 left-100">
            <x-button ghost :href="route('profile')">Update Profile</x-button>
            <x-button ghost :href="route('links.create')">Create a new link</x-button>
        </div>
        <div class="absolute top-30 right-100">
            <x-button ghost :href="route('logout')">Logout</x-button>
        </div>

        <div class="flex flex-col items-center space-y-2 w-2/3">
            <x-img src="/storage/{{ $user->photo }}" alt="Profile Picture" />
            <h2 class="text-2xl font-bold tracking-wider">{{ $user->name }}</h2> 
            <h3 class="opacity-80">{{ $user->description }}</h3>

            <ul class="space-y-2 mt-5">
                @foreach ($links as $link)
                    <li class="flex items-center justify-center gap-2 pr-16">
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