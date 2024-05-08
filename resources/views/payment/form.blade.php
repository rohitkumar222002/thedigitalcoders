@extends('forntend-pro.admin')
@section('content')
<!-- resources/views/payment/form.blade.php -->
<!-- resources/views/payment/form.blade.php -->

<!-- Display success message -->
@if(session('success'))
<div style="color: green;">
    {{ session('success') }}
</div>
@endif

<!-- Display error message -->
@if(session('error'))
<div style="color: red;">
    {{ session('error') }}
</div>
@endif
<form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation" data-cc-on-file="false"
    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
    @csrf

    <div class='form-row row'>
        <div class='col-xs-12 form-group required'>
            <label class='control-label'>Name on Card</label> <input class='form-control' size='4' type='text'>
        </div>
    </div>

    <div class='form-row row'>
        <div class='col-xs-12 form-group card required'>
            <label class='control-label'>Card Number</label> <input autocomplete='off' class='form-control card-number'
                size='20' type='text'>
        </div>
    </div>

    <div class='form-row row'>
        <div class='col-xs-12 col-md-4 form-group cvc required'>
            <label class='control-label'>CVC</label> <input autocomplete='off' class='form-control card-cvc'
                placeholder='ex. 311' size='4' type='text'>
        </div>
        <div class='col-xs-12 col-md-4 form-group expiration required'>
            <label class='control-label'>Expiration Month</label> <input class='form-control card-expiry-month'
                placeholder='MM' size='2' type='text'>
        </div>
        <div class='col-xs-12 col-md-4 form-group expiration required'>
            <label class='control-label'>Expiration Year</label> <input class='form-control card-expiry-year'
                placeholder='YYYY' size='4' type='text'>
        </div>
    </div>

    <div class='form-row row'>
        <div class='col-md-12 error form-group hide'>
            <div class='alert-danger alert'>Please correct the errors and try
                again.</div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now ($100)</button>
        </div>
    </div>

</form>


@endsection