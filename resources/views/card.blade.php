@extends('layout')

@section('content')
{{-- riga blue --}}
<div class="blue"></div>
<div class="container my-2">
    {{-- sezione superiore --}}
    <div class="card-jumbo my-2">
        <div class="position">
            <div class="view">
                <img class="thumb" src="{{ $single['thumb'] }}" alt="{{ $single['title'] }}">
                <div class="gallery">View Gallery</div>
                <div class="fumetto">{{ $single['type'] }}</div>
            </div>
        </div>
        <div class="d-flex">
            <div>
                <div class="title">
                    <h4>{{ $single['title'] }}</h4>
                </div>
                <div class="green">
                    <div class="avaible col-7">
                        <span>U.S. Price: <span class="text-white">{{ $single['price'] }}</span></span>
                        <span>Avaiable</span>
                    </div>
                    <div class="check-avaible col-3">
                        <span class="text-white">Check Availability</span>
                    </div>
                </div>
                <div class="col-10">
                    <p>{{$single['description']}}</p>
                </div>
            </div>
            <div class="advertisement">
                <span class="adv">Advertisement</span>
                <img src="{{Vite::asset('public/images/adv.jpg')}}" alt="img-fumetto-advertisement">
            </div>
        </div>
    </div>
    {{-- seizione inferiore --}}
    <div class="section-talent-specs">
        <div class="talent-and-specs">
            <div class="talent col-5">
                <h2>Talent</h2>
                <p>Art by: <a href="/"> {{ implode(', ', $single['artists']) }} </a></p>
                <p>Written by: <a href="/"> {{ implode(', ', $single['writers']) }} </a></p>
            </div>
            <div class="specs col-5">
                <h2>Specs</h2>
                <p>Series: <a href="/">{{ $single['series'] }}</a></p>
                <p>U.S. Price: {{ $single['price'] }}</p>
                <p>On Sale Date: {{ $single['sale_date'] }}</p> 
            </div>
        </div>
    </div>
</div>
@endsection