<x-layout.app>
    <div>

        <x-img src="/storage/{{ $user->photo }}" alt="Foto de perfil" />
        <h2>User {{ $user->name }}!</h2>
        <h3>{{ $user->description }}</h3>

        <ul>
            @foreach ($user->links as $link)
                <li>

                    <a href="{{ $link->link }}" target="_blank">
                        {{ $link->id }} . {{ $link->name }}
                    </a>

                </li>
            @endforeach

        </ul>


    </div>
</x-layout.app>
