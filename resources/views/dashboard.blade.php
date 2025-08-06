<x-layout.app>
    <x-container>
        <x-card>
            <div class="text-center space-y-2">
                <x-img src="/storage/{{ $user->photo }}" alt="Profile picture" />
                <div class="font-bold text-2xl tracking-wider">{{ $user->name }}</div>
                <div class="text-sm opacity-80"> {{ $user->description }}</div>

                <ul class="space-y-2">
                    @foreach ($links as $link)
                        <li class="flex items-center gap-2">

                            @unless ($loop->last)
                                <x-form :route="route('links.down', $link)" patch>
                                    <x-button ghost>
                                        <x-icons.arrow-down class="w-6 h-6" />
                                    </x-button>
                                </x-form>
                            @else
                                <x-button disabled ghost>
                                    <x-icons.arrow-down class="w-6 h-6" />
                                </x-button>
                            @endunless

                            @unless ($loop->first)
                                <x-form :route="route('links.up', $link)" patch>
                                    <x-button ghost>
                                        <x-icons.arrow-up class="w-6 h-6" />
                                    </x-button>
                                </x-form>
                            @else
                                <x-button disabled ghost>
                                    <x-icons.arrow-up class="w-6 h-6" />
                                </x-button>
                            @endunless

                            <x-button href="{{ route('links.edit', $link) }}" block outline info>
                                {{ $link->name }}
                            </x-button>

                            <x-form :route="route('links.destroy', $link)" delete
                                onsubmit="return confirm('Are you sure you want to delete this link?')">

                                <x-button ghost>
                                    <x-icons.trash class="w-6 h-6" />
                                </x-button>
                            </x-form>
                        </li>
                    @endforeach
                </ul>
            </div>
        </x-card>
    </x-container>
</x-layout.app>
