<x-layout.app>
    <div>

        {{ auth()->id() }}
        <h1>Register</h1>


        @if ($message = session()->get('message'))
            <div>
                {{ $message }}
            </div>
        @endif
        <form action="{{ route('register') }}" method="POST">

            @csrf

            <div>
                <input name="name" placeholder="Name" value="{{ old('name') }}" />

                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <input name="email" placeholder="Email" value="{{ old('email') }}" />

                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <input name="email_confirmation" placeholder="Email Confirmation" />
            </div>

            <div>
                <input type="password" name="password" placeholder="Senha" />
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </div>


            <button>Registrar</button>
        </form>
    </div>
</x-layout.app>
