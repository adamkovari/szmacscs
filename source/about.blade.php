@extends('_layouts.master')

@section('body')
    <div class="about-page" id="about">
        <h1>Bemutatkozás</h1>
        <hr>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
            and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
        <div class="about-page-leaders" id="about-leaders">
            <h1>Vezetőink</h1>
            <hr>
            @foreach($leaders as $leader)
                @include('_includes.leader_card', ['leader' => $leader])
            @endforeach
        </div>
    <div id="cronolog">
        <h1>Kronológia</h1>
        <hr>
        <div class="about-cronolog-map">
            <iframe class="ifr" src="https://www.atlistmaps.com/map/9bcf9c66-bd8d-47e2-b6fa-87d43b7dc86f?share=true" allow="geolocation" width="60%" height="400px" frameborder="0" scrolling="no" allowfullscreen></iframe>

        </div>
    </div>
    <div id="eponym">
        <h1>Névadónk</h1>
        <hr>
        <div class="eponym-wrapper">
            <div class="eponym-info">
                <img src="../assets/images/szenczi.jpg">
                <p>Csapatunk névadója Szenczi Molnár Albert református lelkész, nyelvtudós, filozófus, zsoltárköltő, egyházi író, műfordító.
                    Sok tekintetben példaként tekinthetünk rá.</p>

            </div>
        </div>

    </div>

@endsection