@extends('layout.master')
@section('title','Home')
@section('css','checkout.css')
@section('layout.content')
<div class="container">
    <div class="row first-row">
        <h2 class="mb-3">Billing address</h2>
      <div class="col-md-8 order-md-1">
        
        <form class="needs-validation" novalidate>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">First name <span class="text-muted">(Required)</span></label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
  
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Last name <span class="text-muted">(Required)</span></label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>

            </div>
          </div>
  
          <div class="mb-3">
            <label for="email">Email <span class="text-muted">(Required)</span></label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com">
          </div>
  
          <div class="mb-3">
            <label for="address">Address <span class="text-muted">(Required)</span></label>
            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>

          </div>
  
          <div class="mb-3">
            <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
          </div>
  
          <div class="row">
            <div class="col-md-4 mb-3">
              <label for="state">State <span class="text-muted">(Required)</span></label>
              <select  id="state" required>
                <option value="">Choose...</option>
                <option value="">Aqaba</option>
                <option value="">Amman</option>
                <option value="">Irbid</option>
                <option value="">Ma'an</option>
              </select>
             
            </div>
            <div class="col-md-3 mb-3">
              <label for="zip">Zip <span class="text-muted">(Required)</span></label>
              <input type="text" class="form-control" id="zip" placeholder="" required>
            </div>
          </div>
          <hr class="mb-4">
          {{-- <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="same-address">
            <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="save-info">
            <label class="custom-control-label" for="save-info">Save this information for next time</label>
          </div> --}}
          <hr class="mb-4">
{{--   
          <h4 class="mb-3">Payment</h4>
  
          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
              <label class="custom-control-label" for="credit">Credit card</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="debit">Debit card</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="paypal">PayPal</label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="cc-name">Name on card</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-muted">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cc-number">Credit card number</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">Expiration</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="cc-cvv">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>--}}
          <hr class="mb-4">
          <a href="./bill" class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</a>
        </form>
      </div> 
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Your cart</span>
          <span class="badge badge-secondary badge-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Product name</h6>
              <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">12 JOD</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Second product</h6>
              <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">8 JOD</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Third item</h6>
              <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">5 JOD</span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">Promo code</h6>
              <small>EXAMPLECODE</small>
            </div>
            <span class="text-success">-5 JOD</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (JOD): </span>
            <strong>20 JOD</strong>
          </li>
        </ul>
      </div>
    </div>
</div>
@endsection