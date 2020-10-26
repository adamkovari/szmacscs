<div class="timeline-item">
    <div class="timeline-img"></div>

    <div class="timeline-content js--{{$album->fadeIn}}">
        <div class="timeline-img-header" style="background: linear-gradient(rgba(0,0,0,0), rgba(0,0,0, .4)), url('{{$album->img}}') center center no-repeat;
                background-size: auto;">
            <h2>{{$album->titel}}</h2>
        </div>
        <div class="date">{{$album->date}}</div>
        <p>{{$album->intro}}</p>
        <a class="bnt-more" href="{{$album->link}}">Részletek</a>
    </div>
</div>

