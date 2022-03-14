@extends('layouts.site')

@section('content')

<div class="container">
    <div class="row section">
        <h3 align="center">Imóvel</h3>
        <div class="divider"></div>
    </div>
    <div class="row section">
        <div class="col s12 m8">
            <div class="row">
                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="https://picsum.photos/id/1026/600/400" alt="Lorem">
                            <div class="caption center-align">

                                <h3>Lorem ipsum is simply 1</h3>
                                <h5>Descrição do Slide</h5>
                            
                            </div>
                        </li>

                        <li>
                            <img src="https://picsum.photos/id/1025/600/400" alt="Lorem">
                            <div class="caption center-align">

                                <h3>Lorem ipsum is simply 2</h3>
                                <h5>Descrição do Slide</h5>
                            
                            </div>
                        </li>

                        <li>
                            <img src="https://picsum.photos/id/1024/600/400" alt="Lorem">
                            <div class="caption center-align">

                                <h3>Lorem ipsum is simply 3</h3>
                                <h5>Descrição do Slide</h5>
                            
                            </div>
                        </li>

                        <li>
                            <img src="https://picsum.photos/id/1023/600/400" alt="Lorem">
                            <div class="caption center-align">

                                <h3>Lorem ipsum is simply 4</h3>
                                <h5>Descrição do Slide</h5>
                            
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Buttons -->
            <div class="row" align="center">
                <button onclick="sliderPrev()" class="btn blue">Anterior</button>
                <button onclick="sliderNext()" class="btn blue">Próxima</button>
            </div>
        </div>

        <div class="col s12 m4">
            <h4>A Empresa</h4>
            <blockquote>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </blockquote>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium id nobis ipsum harum doloribus voluptatem amet architecto esse eius rerum labore tempore laudantium, accusantium debitis maiores, officiis in repellat quibusdam?
            </p>
        </div>
    </div>
</div>

@endsection