@extends('layout.master')
@section('title','Home')
@section('css','cart.css')
@section('layout.content')
<main>
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <table class="table table-hover">
                    <thead>
                        <tr>
                       
                            <th class="text-center">Product</th>
                            <th>Product Quantity</th>
                            <th class="text-center">Product Price</th>
                            <th class="text-center">Product Subtotal</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td class="col-sm-8 col-md-6 product-info">
                                <div class="media">
                                    <a class="thumbnail pull-left" href="#"> <img class="media-object" src="/img/shop/WholemealGlutenFreeFlourBlend.jpg" style="width: 72px; height: 72px;"> </a>
                                    <div class="media-body">
                                    {{-- <h4 class="media-heading"><a href="#">Product name</a></h4>
                                    <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                                    <span>Status: </span><span class="text-success"><strong>In Stock</strong></span> --}}
                                        <h4>Wholemeal Flour Blend</h4>
                                    </div>
                                </div>
                            </td>
                            <td class="col-sm-1 col-md-1" style="text-align: center">
                                <input type="email" class="form-control text-center" id="exampleInputEmail1" value="1">
                            </td>
                            <td class="col-sm-1 col-md-1 text-center"><strong>14 JOD</strong></td>
                            <td class="col-sm-1 col-md-1 text-center"><strong>$14 JOD</strong></td>
                            <td class="col-sm-1 col-md-1">
                            <button type="button" class="btn btn-danger">
                                <span class="glyphicon glyphicon-remove"></span> Remove
                            </button></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td><h5>Subtotal</h5></td>
                            <td class="text-right"><h5><strong>14 JOD</strong></h5></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td><h5>Shipping</h5></td>
                            <td class="text-right"><h5 class="free"><strong>FREE</strong></h5></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td><h3>Total</h3></td>
                            <td class="text-right"><h3><strong>14 JOD</strong></h3></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td>
                            <a href="./shop" type="button" class="btn btn-default continue-shopping">
                                <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                            </a></td>
                            <td>
                            <a href="./checkout" type="button" class="btn btn-success checkout-btn">
                                Checkout <span class="glyphicon glyphicon-play"></span>
                            </a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
@endsection
</main>