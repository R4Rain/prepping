<div class="col-md-6 col-lg-4 col-xl-3 py-2">
    <div class="card shadow-sm flex-fill">
        <img src="
            @if ($recipe->image)
                {{asset('storage/'.$recipe->image)}}
            @else
                {{url('images/no-image.jpg')}}
            @endif
        " alt="" class="card-img-top" style="width: 100%; height: 250px; object-fit:cover;">
        <div class="card-body">
            <a href="/recipes/{{$recipe->id}}" class="link link-dark text-decoration-none stretched-link">
                <h6 class="card-title text-truncate fw-bold">{{$recipe->title}}</h6>
            </a>
            <h6 class="card-subtitle text-muted">{{$recipe->user->name}}</h6>
        </div>
        <div class="card-footer d-flex flex-column mb-1">
            <div style="font-size: 0.8rem;"><i class="bi bi-star-fill me-2 text-custom-star"></i>
                <span class="text-muted">{{$recipe->reviews_avg_rate ? number_format(round($recipe->reviews_avg_rate, 1), 1, '.', '') : 'No reviews'}}</span>
            </div>
            <div style="font-size: 0.8rem;"><i class="bi bi-stopwatch-fill me-2 text-custom-green"></i>
                <span class="text-muted">{{$recipe->duration}}</span>
            </div>
        </div>
    </div>
</div>