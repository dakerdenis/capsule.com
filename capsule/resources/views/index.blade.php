@extends('layouts.app')

@section('title', 'Capsule - car proection')

@section('content')
    <div class="main__container">
        <!---header-->
        <header class="header" id="header">

        </header>

        <!---main home section---->
        <section class="main" id="main">
            <!----text and car--->
            <div class="main__wrapper">
                <!---- Name desc button ---->
                <div class="main__info">
                    <div class="main__name">
                        <h1>Premium class</h1>
                        <h1>Paint Protection Film.</h1>
                    </div>
                    <div class="main__desc">
                        Cutting-edge Paint Protection Film production delivering unmatched quality.
                        A forward-thinking catalog of clear, colored, and tinted PPFs, powered by advanced nanotechnology
                        research and innovation.
                    </div>
                    <div class="main__buttons">

                    </div>
                </div>

                <!---car and description---->
                <div class="main__car">
                    <img src="{{asset('./images/car_main.png')}}" alt="Car info image" srcset="">
                </div>
            </div>

            <!---main background--->
            <div class="main__background">
                <img src="{{ asset('./images/background.png') }}" alt="Car Image">
            </div>
        </section>

        <!---About us section---->
        <section class="about_us" id="about_us">

        </section>

        <!----Catalogue-->
        <section class="catalog" id="catalog">

        </section>

        <!------Gallery---->
        <section class="gallery" id="gallery">

        </section>

        <!---COntact US----->
        <section class="contact" id="contact">

        </section>

        <footer>
            <p>&copy; {{ date('Y') }} PPF Website. All rights reserved.</p>
        </footer>
    </div>
@endsection
