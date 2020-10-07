<div class="card-body">
    <a href="{{ $new->getUrl() }}">
        <div class="card-content">
            <img class="new-card-image" src="/assets/news_images/{{ $new->image }}">
            <h5 class="new-card-title"><a href="{{ $new->getUrl() }}">{{ $new->title }}</a></h5>
            <h6 class="card-location">{{ $new->location }}</h6>
            <hr>
            <p class="card-text">{{ $new->intro }}</p>
        </div>
    </a>

</div>