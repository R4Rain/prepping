<x-app title="Prepping">
    <x-navbar></x-navbar>

    <section id="header">
        <div class="container-lg p-5">
            <div class="row g-5">
                <div class="col-md my-auto">
                    <h1 class="mb-3">The Ultimate Cooking Platform</h1>
                    <p class="text-muted mb-4">
                        Helping and inspiring a new generation to find joy in the kitchen and take pride in putting a
                        home-cooked meal on the table, all with the unbridled fun and spirit!
                    </p>

                    @if (!auth()->check())
                        <button type="button" class="btn btn-secondary rounded-3" data-bs-toggle="modal"
                            data-bs-target="#register">Sign up for free</button>
                    @endif
                </div>
                <div class="col-md-5">
                    <img src="/storage/assets/figur-1.png" width="100%">
                </div>
            </div>
        </div>
    </section>

    <section id="subscription">
        <div class="container-lg p-5">
            <div class="row">
                <div class="col-5">
                    <div class="card border-0 rounded-4 mb-4">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4>Gold</h4>
                                <div class="text-end">
                                    <h5 class="text-primary">$6.99</h5>
                                    <span class="text-muted">Yearly subscription</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 rounded-4 mb-4">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4>Plus</h4>
                                <div class="text-end">
                                    <h5 class="text-primary">$1.99</h5>
                                    <span class="text-muted">Monthly subscription</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 rounded-4">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4>Basic</h4>
                                <div class="text-end">
                                    <h5 class="text-primary">$0.4</h5>
                                    <span class="text-muted">One day pass</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col offset-1 my-auto">
                    <h1 class="mb-4">Subscirbe to Prepping Premium</h1>
                    <ul class="fs-5">
                        <li>Unlimited recipe creation</li>
                        <li>Full access to all courses</li>
                        <li>Create your own community</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="recipe">
        <div class="container-lg p-5">
            <div class="text-center mb-5">
                <h2>More than 500 recipes have been shared on this platform</h2>
                <p>Find and share everyday cooking inspiration with ratings and reviews you can trust.</p>
            </div>

            <div class="card border-0 rounded-4 shadow-sm">
                <div class="card-body p-5">
                    <div class="row row-cols-4 mb-4">
                        @foreach ($recipes as $recipe)
                            <div class="col">
                                <x-recipe :recipe='$recipe'></x-recipe>
                            </div>
                        @endforeach
                    </div>

                    <div class="text-center">
                        <button type="button" class="btn btn-primary rounded-3 px-3">View all</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>

    </footer>
</x-app>
