<x-main>
    <img src="{{ empty($mybook->image) ? Storage::url('/images/default.jpg') : Storage::url($mybook->image) }}"
        alt="Copertina">
    <p>Nome: {{ $mybook->title }}</p>
    <p>Autore: {{ $mybook->author }}</p>
    <p>Numero pagine: {{ $mybook->pages }}</p>
    <p>Anno: {{ $mybook->year }}</p>
</x-main>

{{-- {{ empty($mybook->image) ? Storage::url('/images/default.png') :  --}}
