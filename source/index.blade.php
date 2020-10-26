@extends('_layouts.master')

@section('body')
    <video autoplay muted loop id="myVideo">
        <source src="assets/images/toborz_video2.mp4" type="video/mp4">
    </video>
    <div class="welcome-container">

        <div class="welcome-text">
            <img src="assets/images/scout-lily-wt-glance.svg" align="left">
            <img src="assets/images/scout-lily-wt-glance.svg" align="right">
            <h1>
                Üdvözlünk, kedves Vándor!
            </h1>
            <h1>
                Gyere, pihenj meg itt a tűz körül!
            </h1>
        </div>
    </div>
    <div class="news-title" id="news-title">
        <img src="assets/images/news-feed-icon-bw.svg" id="news-icon">
        <h1>Hírfolyam</h1>
    </div>
    <div class="news-container">

        <ul class="news-feed">
            @foreach($news as $new)
                @include('_includes.new_card', ['new' => $new])
            @endforeach
        </ul>
        <div id='calendar'></div>
    </div>

@endsection
