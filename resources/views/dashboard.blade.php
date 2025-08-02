<x-layout.app>
    <div>
        <h1>Dashboard</h1>

        @if ($message = session()->get('message'))
            <div>
                {{ $message }}
            </div>
        @endif

        <p>Bem vindo, {{ auth()->user()->name }}!</p>
        <br>
        <a href="{{ route('profile') }}">Atualizar perfil</a>
        <br>
        <a href="{{ route('links.create') }}">Criar um novo</a>
        <br>
        <ul>
            @foreach ($links as $link)
                <li style="display:flex">

                    @unless ($loop->last)
                        <form action="{{ route('links.down', $link) }}" method="POST">

                            @csrf
                            @method('PATCH')
                            <button>⬇️</button>
                        </form>
                    @endunless

                    @unless ($loop->first)
                        <form action="{{ route('links.up', $link) }}" method="POST">

                            @csrf
                            @method('PATCH')
                            <button>⬆️</button>
                        </form>
                    @endunless

                    <a href="{{ route('links.edit', $link) }}">
                        {{ $link->id }} . {{ $link->name }}
                    </a>
                    <form action="{{ route('links.destroy', $link) }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this link?')">

                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </li>
            @endforeach

        </ul>


    </div>

</x-layout.app>
