<div>
    <h1>Login</h1>
    <form action="/login" method="POST">

        @csrf

        <input type="email" name="email" placeholder="Email" />
        <input type="password" name="password" placeholder="Senha" />

        <button>Logar</button>
    </form>
</div>
