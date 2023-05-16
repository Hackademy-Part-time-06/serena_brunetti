<div class="card" style="width: 18rem;">
    <img src="{{ $dettagli['cover'] }}" class="card-img-top" alt="...">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Orario: {{ $dettagli['time'] }}</li>
        <li class="list-group-item">Compagnia: {{ $dettagli['company'] }}</li>
        <li class="list-group-item">Gate: {{ $dettagli['gate'] }}</li>
        <li class="list-group-item">{{ $posti }}</li>
    </ul>
</div>
