@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row row-gap-3">
            @foreach($trains as $train)
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">{{ $train->azienda }}</li>
                          <li class="list-group-item">Da: {{ $train->stazione_di_partenza }}</li>
                          <li class="list-group-item">Dove: {{ $train->stazione_di_arrivo }}</li>
                          <li class="list-group-item">Orario di partenza: {{ $train->orario_di_partenza }}</li>
                          <li class="list-group-item">Orario di arrivo: {{ $train->orario_di_arrivo }}</li>
                          <li class="list-group-item">Fermate: {{ $train->ha_fermate }}</li>
                          <li class="list-group-item">Binario di arrivo: {{ $train->binario_arrivo }}</li>
                          <li class="list-group-item">Binario di partenza: {{ $train->binario_partenza }}</li>
                          <li class="list-group-item">Codice di treno: {{ $train->codice_treno }}</li>
                          <li class="list-group-item">Carozze: {{ $train->numero_carrozze }}</li>
                          <li class="list-group-item">Ritardo: {{ $train->in_orario }}</li>
                          <li class="list-group-item">Cancellato: {{ $train->cancellato }}</li>
                          <li class="list-group-item">Wifi: {{ $train->wifi }}</li>
                          <li class="list-group-item">Bar: {{ $train->bar }}</li>
                        </ul>
                      </div>
                </div>
            @endforeach
        </div>
    </div>  

@endsection