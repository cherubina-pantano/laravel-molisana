@extends('layouts.main')

@section('content')

  @if(! empty($lunghe))
    <section class="container">
      <h2 class="title">LE LUNGHE</h2>
      <div class="cards">
          @foreach ($lunghe as $card)
            <div class="card">
              <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
              <h3 class="title-small">{{ $card['titolo'] }}</h3>

              <a href="{{ route('product', $card['id']) }}">Vedi prodotto</a>
            </div>
          @endforeach
      </div>
    </section>
  @endif

  @if(! empty($corte))
    <section class="container">
      <h2 class="title">LE CORTE</h2>
      <div class="cards">
        @foreach ($corte as $card)
          <div class="card">
            <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
            <h3 class="title-small">{{ $card['titolo'] }}</h3>
            <a href="{{ route('product', $card['id']) }}">Vedi prodotto</a>

          </div>
        @endforeach
      </div>
    </section>
  @endif

  @if(! empty($cortissime))
    <section class="container">
      <h2 class="title">LE CORTISSIME</h2>
      <div class="cards">
        @foreach ($cortissime as $card)
          <div class="card">
            <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
            <h3 class="title-small">{{ $card['titolo'] }}</h3>
            <a href="{{ route('product', $card['id']) }}">Vedi prodotto</a>

          </div>
        @endforeach
      </div>
    </section>
  @endif







    {{-- <section class="container">
      <div class="cards">
        @foreach ($cards as $card)
          <div class="card">
            <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
            <h3>{{ $card['titolo'] }}</h3>

          </div>
        @endforeach

      </div>

    </section> --}}

@endsection
