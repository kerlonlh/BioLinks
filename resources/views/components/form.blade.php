@props(['route', 'post' => null])

<form {{ $attributes->class(['flex flex-col gap-4']) }}action="{{ $route }}" method="{{ $post ? 'post' : 'get' }}"
    id="login-form">

    @csrf

    {{ $slot }}
</form>
