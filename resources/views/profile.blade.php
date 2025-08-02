<x-layout.app>
    <div>
        <h1>Profile</h1>

        @if ($message = session()->get('message'))
            <div>
                {{ $message }}
            </div>
        @endif

        <form action="{{ route('profile') }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div>
                <img src="/storage/{{ $user->photo }}" alt="Profile picture"
                    style="width: 150px; height: 150px; border-radius: 100%;" />

                <br>
                <br>
                <input type="file" name="photo" />
            </div>

            <br><br><br>

            <div>
                <input name="name" placeholder="Nome" value="{{ old('name', $user->name) }}" />

                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <br><br>

            <div>
                <textarea name="description" placeholder="Breve resumo">{{ old('description', $user->description) }}</textarea>

                @error('description')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <br><br>

            <div>
                <span>biolinks.com.br/</span>
                <input name="handler" placeholder="@seuLink" value="{{ old('handler', $user->handler) }}" />

                @error('handler')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <br><br>


            <a href="{{ route('dashboard') }}">Cancelar</a>
            <button>Update</button>
        </form>
    </div>


</x-layout.app>
