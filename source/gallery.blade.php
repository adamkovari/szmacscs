@extends('_layouts.master')

@section('body')
    <div class="gallery-page">
        <section class="timeline">
            <div class="container">
                @foreach($albums as $album)
                    @include('_includes.album_card', ['album' => $album])
                @endforeach
            </div>
        </section>
    </div>




@endsection