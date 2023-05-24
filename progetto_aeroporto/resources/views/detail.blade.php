<x-main>
    <x-navbar />

    <h1>{{ $dettagli['city'] }}</h1>

    <x-card :dettagli="$dettagli" :posti="$posti" />

    <x-footer />
</x-main>
