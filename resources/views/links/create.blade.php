<x-layout.app>
    <div>

        <h1>Criar um link</h1>


        @if ($message = session()->get('message'))
            <div>
                {{ $message }}
            </div>
        @endif
        <form action="{{ route('links.create') }}" method="POST">

            @csrf

            <div>
                <input name="link" placeholder="Link" value="{{ old('link') }}" />

                @error('link')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <br>
            <br>
            <div>
                <div>
                    <input name="name" placeholder="Name" value="{{ old('name') }}" />

                    @error('name')
                        <span>{{ $message }}</span>
                    @enderror
                </div>


                <button>Salvar</button>
        </form>
    </div>
</x-layout.app>
