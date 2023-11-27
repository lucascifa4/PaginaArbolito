@extends('layout')

@section('content')

    <section class="mt-3 ">

            <div id="carouselExample" class="carousel slide fotos container">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/ropa2.jpeg') }}" class="d-block w-100">
                        <button class="w-100 btn-success">Agregar al Carrito</button>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/ropa3.jpeg') }}" class="d-block w-100">
                        <button class="w-100 btn-success">Agregar al Carrito</button>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/ropa4.jpeg') }}" class="d-block w-100">
                        <button class="w-100 btn-success">Agregar al Carrito</button>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/ropa5.jpeg') }}" class="d-block w-100">
                        <button class="w-100 btn-success">Agregar al Carrito</button>
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
            </div>
        </section>

@endsection
