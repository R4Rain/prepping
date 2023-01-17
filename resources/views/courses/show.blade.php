<x-app title="{!! $course->title !!}">
    <x-navbar></x-navbar>

    <div class="container-lg p-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card border-0 rounded-4 shadow-sm">
                    <div class="rounded-4 m-3"
                        style="
                        background-image: url('/storage/courses/{{ $course->photo }}');
                        background-position: top;
                        background-size:100%;
                        height:15rem;
                        ">
                    </div>
                    <div class="card-body px-5">
                        <h4>{{ $course->title }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
