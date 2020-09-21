@extends('layouts.main-layout')

@section('content')

    <main>
      <h2>LE LUNGHE:</h2>
      <div class="boxpasta">
        @foreach ($data as $item)

          @if ($item['tipo'] == "lunga")
            <div class="lunga">
              <img src="{{ $item['src'] }}" alt="{{ $item['titolo'] }}">
              <div>{{ $item['titolo'] }}</div>
            </div>

          @endif
        @endforeach
      </div>

      <h2>LE CORTE:</h2>
      <div class="boxpasta">
        @foreach ($data as $item)

          @if ($item['tipo'] == "corta")

            <div class="corta">
              <img src="{{ $item['src'] }}" alt="{{ $item['titolo'] }}">
              <div>{{ $item['titolo'] }}</div>
            </div>

          @endif
        @endforeach
      </div>

      <h2>LE CORTISSIME:</h2>
      <div class="boxpasta">
        @foreach ($data as $item)

          @if ($item['tipo'] == "cortissima")

            <div class="cortissima">
              <img src="{{ $item['src'] }}" alt="{{ $item['titolo'] }}">
              <div>{{ $item['titolo'] }}</div>
            </div>

          @endif
        @endforeach
      </div>
    </main>

@endsection
