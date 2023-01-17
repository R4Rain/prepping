<x-app title="My Subscription">
    <x-navbar></x-navbar>

    <div class="container p-5">
        <div class="row">
            <div class="col-4">
                <x-sidebar></x-sidebar>
            </div>
            <div class="col">
                <div class="card border-0 bg-white shadow-sm rounded-4">
                    <div class="card-body p-4">
                        @if ($subscription)
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h4>My Subscription</h4>
                                    <p>Ends on {{ date('F j, Y', strtotime($subscription->expiry)) }}</p>
                                </div>
                                <button type="buton" data-bs-toggle="modal"
                                    data-bs-target="#delete{{ $subscription->id }}"
                                    class="btn btn-outline-secondary px-4 rounded-3">Cancel</button>
                            </div>

                            <x-delete :model='$subscription' name='subscriptions'></x-delete>
                        @else
                            <form method="POST" action="{{ route('subscriptions.store') }}">
                                @csrf

                                <h4>Prepping Premium</h4>
                                <p class="text-muted">
                                    Choose the best plan. Change or cancel your plan anytime.
                                </p>

                                <div class="row justify-content-center my-5" id="subs">
                                    <div class="col-3">
                                        <label for="gold" class="card rounded-4 h-100">
                                            <div class="card-body py-4 text-center">
                                                <h5 class="mb-3">Gold</h5>
                                                <h5 class="text-primary">$6.99</h5>
                                                <span class="text-muted">Yearly subscription</span>
                                            </div>
                                        </label>
                                        <input type="radio" name="subscription" id="gold" value="gold" hidden>
                                    </div>
                                    <div class="col-3">
                                        <label for="plus" class="card rounded-4 h-100">
                                            <div class="card-body py-4 text-center">
                                                <h5 class="mb-3">Plus</h5>
                                                <h5 class="text-primary">$1.99</h5>
                                                <span class="text-muted">Monthly subscription</span>
                                            </div>
                                        </label>
                                        <input type="radio" name="subscription" id="plus" value="plus" hidden>
                                    </div>
                                    <div class="col-3">
                                        <label for="basic" class="card rounded-4 h-100">
                                            <div class="card-body py-4 text-center">
                                                <h5 class="mb-3">Basic</h5>
                                                <h5 class="text-primary">$0.4</h5>
                                                <span class="text-muted">One day pass</span>
                                            </div>
                                        </label>
                                        <input type="radio" name="subscription" id="basic" value="basic" hidden>
                                    </div>
                                </div>

                                <div class="text-center mb-3">
                                    <button id="btnSubscribe" class="btn btn-primary rounded-3 px-5"
                                        data-bs-toggle="modal" data-bs-target="#subscribe" disabled>Continue</button>
                                </div>

                                <div class="modal fade" id="subscribe" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content border-0 rounded-4">
                                            <div class="modal-body p-5">
                                                <div class="mb-4 text-center">
                                                    <h4 class="mb-2">Payment</h4>
                                                    <small class="text-muted">Fill in your credit card
                                                        information</small>
                                                </div>

                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="holder_name"
                                                        placeholder="Card Holder Name" required>
                                                    <label for="holder_name">Card Holder Name</label>

                                                    @error('holder_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="card_number"
                                                        placeholder="Card Number" required>
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
                                                            <input type="text" class="form-control" id="expiration"
                                                                placeholder="MM/YY" required>
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
                                                            <input type="text" class="form-control" id="cvv"
                                                                placeholder="CVV" required>
                                                            <label for="cvv">CVV</label>

                                                            @error('cvv')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-primary rounded-3 w-100">
                                                    {{ __('Pay') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
