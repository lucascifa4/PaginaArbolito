@extends('layout')

@section('content')
<section class="mt-3 ">
    <form action="{{ route('store.voto') }}" method="post">
        @csrf
        @method('post')
        <div id="carouselExample" class="carousel slide fotos container">
            <div class="carousel-inner">
                <div class="carousel-item active" id="1">
                    <img src="{{ asset('img/ropa2.jpeg') }}" class="d-block w-100">
                </div>
                <div class="carousel-item" id="2">
                    <img src="{{ asset('img/ropa3.jpeg') }}" class="d-block w-100">
                </div>
                <div class="carousel-item" id="3">
                    <img src="{{ asset('img/ropa4.jpeg') }}" class="d-block w-100">
                </div>
                <div class="carousel-item" id="4">
                    <img src="{{ asset('img/ropa5.jpeg') }}" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <input type="hidden" name="voto" value="" id="voto">
            <button type="submit" class="w-100 btn-success" id="btn-votar">Votar</button> 
            <div>     
                <label for="mail" class="form-label"></label>
                <input type="text" name="mail" id="mail" class="form-control" aria-describedby="email" required>
                <div id="email" class="form-text">
                    Ingrese su mail, Solo podrá votar una vez.
                </div>
                @error('mail')
                    <span class="form-control-feedback text-danger">{{ $message }}</span>
                @enderror
            </div>  
        </div>
    </form>
</section>

@endsection
