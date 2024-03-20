@extends('layouts.app')


@section('main-content')
  <section class="container mt-5">
    @forelse($trains as $train)
      <p>
        <strong>Type</strong>: {{ $train->Azienda }} <br>
        {{-- <strong>Stazione di partenza</strong>: {{ $train->'Stazione di partenza' }} <br> --}}
      </p>
      <hr>
  </section>
@endsection