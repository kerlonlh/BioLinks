<x-layout.app>

    <div>

        <h1>Editar um link :: {{ $link->id }}</h1>


        @if ($message = session()->get('message'))
            <div>
                {{ $message }}
            </div>
        @endif
        <form action="{{ route('links.edit', $link) }}" method="POST">

            @csrf

            @method('PUT')

            <div>
                <input name="link" placeholder="Link" value="{{ old('link', $link->link) }}" />

                @error('link')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <br>
            <br>
            <div>
                <div>
                    <input name="name" placeholder="Name" value="{{ old('name', $link->name) }}" />

                    @error('name')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <a href="{{ route('dashboard') }}">Cancelar</a>
                <button>Salvar</button>
        </form>
    </div>
</x-layout.app>
