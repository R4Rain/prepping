<x-app title="My Subscription">
    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if ($subscription)
                    <div class="card border-0 bg-light rounded-4">
                        <div class="card-body p-4">
                            <div class="row mb-2">
                                <div class="col">
                                    <h3>Prepping Premium</h3>
                                    <p class="m-0">
                                        Your subscription expires on
                                        {{ date('j F', strtotime($subscription->expiry)) }}
                                    </p>
                                </div>
                                <div class="col-md-3 text-end mt-auto">
                                    <button class="btn btn-outline-primary px-4">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="text-center mb-4">
                        <h3>Prepping Premium</h3>
                        <p class="text-muted">Get access to all premium recipes in our platform</p>
                    </div>

                    <div class="card border-0 bg-light rounded-4">
                        <div class="card-body p-4 text-center">
                            <h2 class="text-primary">Rp250.000 / month</h2>
                            <p>Recurring billing <i class="bi bi-dot"></i> Cancel anytime</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#subscribe">
                                Subscribe Now
                            </button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="modal fade" id="subscribe" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content border-0">
                <div class="modal-body p-5">
                    <div class="text-center mb-4">
                        <img src="/storage/assets/logo.png" alt="Prepping" width="40" class="mb-3">
                        <h4>Payment</h4>
                        <small class="text-muted">Fill in your credit card information</small>
                    </div>

                    <form method="POST" action="{{ route('subscriptions.store') }}">
                        @csrf

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="holder_name" placeholder="Card Holder Name"
                                required>
                            <label for="holder_name">Card Holder Name</label>

                            @error('holder_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="card_number" placeholder="Card Number"
                                required>
                            <label for="card_number">Card Number</label>

                            @error('card_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="expiration" placeholder="MM/YY"
                                        required>
                                    <label for="expiration">MM/YY</label>

                                    @error('expiration')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="cvv" placeholder="CVV"
                                        required>
                                    <label for="cvv">CVV</label>

                                    @error('cvv')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            {{ __('Pay') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app>
