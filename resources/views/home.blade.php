@extends('layout')

@section('content')
<main>

  {{-- Bottone current --}}
  <div class="upper-title">
    <div class="title">
      CURRENT SERIES
    </div>
  </div>

  {{-- Sezione fumetti --}}
  <div class="black">
    <div class="container">
      <div class="row">
        @foreach($comics as $fumettiItem)
        <div class="fumetto">
          {{-- link per accedere alla pagina card --}}
          <a href="{{ route('comics.show', ['comic' => $fumettiItem['id']]) }}">
            <div class="fumetto-img">
              <img src="{{ $fumettiItem['thumb'] }}" alt="{{ $fumettiItem['title'] }}"> 
            </div>
            <h5>{{ $fumettiItem['title'] }}</h5>  
          </a>
        </div>
        @endforeach
      </div>
      <div>
        <a href="{{ route('comics.create') }}">
          <button class="button_load">LOAD MORE</button>
        </a>
      </div>
    </div>
  </div>
</main>
@endsection