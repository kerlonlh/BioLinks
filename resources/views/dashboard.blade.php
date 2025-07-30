<div>
    <h1>Dashboard</h1>

    @if ($message = session()->get('message'))
        <div>
            {{ $message }}
        </div>
    @endif

    <p>Bem vindo, {{ auth()->user()->name }}!</p>
    <ul>
        @foreach ($links as $link)
            <li><a href="{{ route('links.edit', $link) }}">{{ $link->name }}</a></li>
        @endforeach

    </ul>


</div>
