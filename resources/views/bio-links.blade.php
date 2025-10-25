<x-layout.app>
    <x-container>
        <x-card>
            <div class="text-center space-y-2 w2/3">
                <x-img src="/storage/{{ $user->photo }}" alt="Profile picture" />
                <div class="font-bold text-2xl tracking-wider">{{ $user->name }}</div>
                <div class="text-sm opacity-80 mb-6"> {{ $user->description }}</div>

                <ul class="space-y-2">
                    @foreach ($user->links as $link)
                        <li class="flex items-center justify-center gap-2">
                            <x-button href="{{ $link->link }}" wide outline info target="_blank">
                                {{ $link->name }}
                            </x-button>
                        </li>
                    @endforeach
                </ul>
            </div>
        </x-card>
    </x-container>
</x-layout.app>
