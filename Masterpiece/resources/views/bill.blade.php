@extends('layout.master')
@section('title','Home')
@section('css','bill.css')
@section('layout.content')
<div class="container">
    <div class="card">
        <div class="card-body mx-4">
          <div class="container">
            <h2 class="my-5 mx-5 text-center">Thank for your purchase</h2>
            <div class="row">
              <ul class="list-unstyled">
                <li class="text-black">John Doe</li>
                <li class="text-black mt-1"><span class="text-black">Invoice</span> #12345</li>
                <li class="text-black mt-1">April 17 2021</li>
              </ul>
              <hr>
              <div class="col-xl-10 text-black">
                <p class="">Prodct Name </p>
              </div>
              <div class="col-xl-2">
                <p class="float-end">Lorem ipsum dolor sit amet consectetur adipisicing elit
              </div>
              <hr>
            </div>
            <div class="row">
              <div class="col-xl-10">
                <p>Product Quantity</p>
              </div>
              <div class="col-xl-2">
                <p class="float-end">1
                </p>
              </div>
              <hr>
            </div>
            <div class="row">
              <div class="col-xl-10">
                <p>Product Subtotal</p>
              </div>
              <div class="col-xl-2">
                <p class="float-end">14 JOD
                </p>
              </div>
              <hr style="border: 2px solid black;">
            </div>
            <div class="row text-black">
      
              <div class="col-xl-12">
                <p class="float-end text-black">Total: 14.00 JOD
                </p>
              </div>
              <hr style="border: 2px solid black;">
            </div>
            <div class="text-center" style="margin-top: 90px;">
   
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
      
          </div>
        </div>
      </div>
</div>
@endsection