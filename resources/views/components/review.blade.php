<div class="row mt-3">
    <div class="col-auto">
        <img 
        class="rounded-circle"
        src="
            @if ($review->user->image)
                {{asset('storage/'.$review->user->image)}}
            @else
                {{url('images/user-default.png')}}
            @endif
        "
        alt="" style="width: 55px; height: 55px;object-fit: cover;"
        >
    </div>
    <div class="col">
        <div class="col">
            <div>
                <span class="text fw-bold">
                    {{$review->user->name}} 
                </span>
                <span style="font-size: 0.8rem;">
                    <x-star :rate="$review->rate"></x-star>
                </span>
                @if($current == 1)
                    <span class="dropdown-center float-end">
                        <a class="text" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots-vertical"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./{{$recipe->id}}?edit=1">Edit</a></li>
                            <li><a class="dropdown-item text-danger" href="#" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Delete</a></li>
                            <form action="{{$recipe->id}}/reviews/{{$review->id}}/delete" id="delete-form" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </span>
                @endif
            </div>
            <small class="text-muted">{{$review->created_at}}</small>
        </div>
        <div class="col mt-2">
            @if($review->comment)
                <p class="lh-sm">{{$review->comment}}</p>
            @else
                <p class="text-muted fst-italic fw-light">No comment given</p>
            @endif
        </div>
    </div>
</div>