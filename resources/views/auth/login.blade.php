<div>
    <h1>Login</h1>


    @if ($message = session()->get('message'))
        <div>
            {{ $message }}
        </div>
    @endif
    <form action="/login" method="POST">

        @csrf

        <div>
            <input name="email" placeholder="Email" value="{{ old('email') }}" />

            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <input type="password" name="password" placeholder="Senha" />
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>


        <button>Logar</button>
    </form>
</div>
