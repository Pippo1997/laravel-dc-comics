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
        
          @foreach ($fumetti as $key => $fumettiItem)
          <div class="fumetto">
            {{-- link per accedere alla pagina card --}}
            <a href="{{ route('card', ['id' => $key]) }}">
              <div class="fumetto-img">
                <img src="{{ $fumettiItem['thumb'] }}" alt="{{ $fumettiItem['title'] }}"> 
              </div>
              <h5>{{ $fumettiItem['title'] }}</h5>  
            </a>
            </div>
          @endforeach
          
      </div>
      <div>
        <button class="button_load">LOAD MORE</button>
      </div>
    </div>
  </div>
</main>
@endsection