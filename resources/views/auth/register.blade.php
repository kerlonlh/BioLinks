<x-layout.app>
    <x-container>
        <x-card title="Registrar">
            <x-form :route="route('register')" post id="register-form">
                <x-input name="name" placeholder="Nome" value="{{ old('name') }}" />
                <x-input name="email" placeholder="E-mail" value="{{ old('email') }}" />
                <x-input name="email_confirmation" placeholder="E-mail de confirmação"
                    value="{{ old('email_confirmation') }}" />
                <x-input name="password" type="password" placeholder="Senha" />
            </x-form>
            <x-slot:actions>
                <x-button type="submit" form="register-form">Registrar</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
