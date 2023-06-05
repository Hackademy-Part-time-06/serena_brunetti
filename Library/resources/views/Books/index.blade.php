<x-main>

    @if (session('success'))
        {{ session('success') }}
    @endif
    <h1>I miei libri</h1>

    <ul>
        @foreach ($books as $book)
            <li>
                <a href="{{ route('books.show', ['book' => $book['id']]) }}">{{ $book['title'] }} -
                    {{ $book['author'] }}</a>
            </li>
            {{--    ('dettagliCorso', ['name' => $corso['name']]) }} --}}
        @endforeach
    </ul>

</x-main>
