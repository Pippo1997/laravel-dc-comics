@extends('layout')
@section('content')
<div class="black">
    <div class="container">
        <div class="row justify-content-center text-light">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label class="control-label py-2">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Insert title">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label py-2">Description</label>
                    <textarea class="form-control" name="description" cols="30" rows="10" placeholder="Insert description"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label class="control-label py-2">Thumb</label>
                    <input class="form-control" name="thumb" placeholder="Insert thumb">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label py-2">Price</label>
                    <input class="form-control" name="price" placeholder="Insert price">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label py-2">Series</label>
                    <input class="form-control" name="series" placeholder="Insert series">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label py-2">Type</label>
                    <input class="form-control" name="type" placeholder="Insert type">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label py-2">Sale date</label>
                    <input type="date" class="form-control" name="sale_date" placeholder="Insert Sale date">
                </div>
                <div class="form-group">
                    <button type="submit" class="button_load">SAVE</button>
                </div>     
            </form>
        </div>
    </div>
</div>

@endsection