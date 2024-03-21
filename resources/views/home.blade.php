@extends('layouts.app')


@section('main-content')
  <section>
    <h1>TRENI</h1>

    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>azienda</th>
          <th>stazione di partenza</th>
          <th>stazione di arrivo</th>
          <th>orario di partenza</th>
          <th>orario di arrivo</th>
          <th>numero di fermate</th>
          <th>codice treno</th>
          <th>numero di carrozze</th>
          <th>prezzo del biglietto</th>
          <th>posto a sedere</th>
          <th>fumatori</th>
          <th>in orario</th>
          <th>cancellato</th>
        </tr>
      </thead>

      <tbody>
        @forelse($trains as $train)
        <tr>
          <td>{{ $train->id }}</td>
          <td>{{ $train->azienda }}</td>
          <td>{{ $train->stazione_di_partenza }}</td>
          <td>{{ $train->stazione_di_arrivo }}</td>
          <td>{{ $train->orario_di_partenza }}</td>
          <td>{{ $train->orario_di_arrivo }}</td>
          <td>{{ $train->numero_di_fermate }}</td>
          <td>{{ $train->codice_treno }}</td>
          <td>{{ $train->numero_di_carrozze }}</td>
          <td>{{ $train->prezzo_del_biglietto }}</td>
          <td>{{ $train->posto_a_sedere }}</td>
          <td>{{ $train->fumatori ? 'si' : 'no' }}</td>
          <td>{{ $train->in_orario ? 'si' : 'no' }}</td>
          <td>{{ $train->cancellato ? 'si' : 'no'}}</td>
        </tr>

        @empty

        @endforelse
      </tbody>
    </table>
  </section>
@endsection