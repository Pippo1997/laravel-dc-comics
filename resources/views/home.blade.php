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
          <div class="m-2">
            {{-- EDIT --}}
            <a href="{{ route('comics.edit', ['comic' => $fumettiItem->id]) }}">
              <button class="btn btn-sm btn-square btn-warning p-2">
                <i class="fa-regular fa-pen-to-square text-white"></i>
              </button>
            </a>
            {{-- CANCELLAZIONE --}}
            <form class="d-inline-block" method="POST" action="{{ route('comics.destroy', ['comic' => $fumettiItem->id]) }}">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-square btn-danger confirm-delete-button p-2" data-title="{{ $fumettiItem->title }}"> 
                <i class="fa-solid fa-trash"></i>
              </button>
            </form>
          </div>
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
        {{-- CREAZIONE --}}
        <a href="{{ route('comics.create') }}">
          <button class="button_load">LOAD MORE</button>
        </a>
      </div>
    </div>
  </div>
</main>
@include ('comics.modal_delete')
@endsection