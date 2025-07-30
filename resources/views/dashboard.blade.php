<div>
    <h1>Dashboard</h1>

    @if ($message = session()->get('message'))
        <div>
            {{ $message }}
        </div>
    @endif

    <p>Bem vindo, {{ auth()->user()->name }}!</p>

    <a href="{{ route('links.create') }}">Criar um novo</a>
    <ul>
        @foreach ($links as $link)
            <li>
                <a href="{{ route('links.edit', $link) }}">{{ $link->name }}</a>
                <form action="{{ route('links.destroy', $link) }}" method="POST"
                    onsubmit="return confirm('Are you sure you want to delete this link?')">

                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </li>
        @endforeach

    </ul>


</div>
