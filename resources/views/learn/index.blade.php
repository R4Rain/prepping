<x-app title="Learn to Cook">
    <div class="container-lg py-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card border-0 rounded-4 shadow-sm">
                    <div class="card-body p-5">
                        <div class="mb-5">
                            <h2 class="mb-4 text-center">Master the culinary arts today</h2>
                        </div>
                        <div>
                            <div class="mb-3">
                                <h4>Cooking courses for beginners</h4>
                                <p class="text-muted m-0">
                                    Learn basic skills and techniques in culinary arts
                                </p>
                            </div>
                            @if($courses->count() > 0)
                                <div class="row row-cols-4 g-3">
                                    @foreach ($courses as $course)
                                        <div class="col">
                                            <x-course :course='$course'></x-course>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="card rounded-4 bg-light border-0">
                                    <div class="card-body text-center p-5 text-muted">
                                        <h5>No course found</h5>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>