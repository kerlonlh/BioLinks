<x-layout.app>

    <div>
        <h1>Login</h1>


        @if ($message = session()->get('message'))
            <div>
                {{ $message }}
            </div>
        @endif
        <form action="{{ route('login') }}" method="POST">

            @csrf

            <div>
                <input class="input input-bordered" name="email" placeholder="Email" value="{{ old('email') }}" />

                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <input class="input input-bordered" type="password" name="password" placeholder="Senha" />
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <br>
            <button class="btn btn-primary">Logar</button>
        </form>
    </div>

    <button class="btn btn-primary">Teste</button>

</x-layout.app>

<button class="btn btn-primary">Teste</button>
