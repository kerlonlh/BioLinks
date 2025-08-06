<x-layout.app>
    <x-container>
        <x-card title="Register">
            <x-form :route="route('register')" post id="register-form">
                <x-input name="name" placeholder="Name" value="{{ old('name') }}" />
                <x-input name="email" placeholder="E-mail" value="{{ old('email') }}" />
                <x-input name="email_confirmation" placeholder="E-mail Confirmation" />
                <x-input name="password" type="password" placeholder="Password" />
            </x-form>
            <x-slot:actions>
                <x-a :href="route('login')">Already have an account!</x-a>
                <x-button type="submit" form="register-form" primary>Register</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
