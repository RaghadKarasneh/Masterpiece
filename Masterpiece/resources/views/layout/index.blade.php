@extends('layout.master')
@section('title','Home')
@section('layout.content')
<main>
<div class="container">
    <!--Start Hero Section -->
        <div class="hero">
            <div class="row">
                <!--Left-side: The main concept-->
                <div class="col-lg-6 m-auto">
                    <h2>To make the life much better for our <span class="special">SPECIAL</span> loved people.</h2>
                </div>
                <!--Right-side: The hero's img-->
                <div class="col-lg-6">
                    <img src="/images/homePage/hero.jpg" width= "100%" height= "auto">
                </div>
            </div>
        </div>
    <!-- End Hero Section -->

    <div class="clearfix"></div>

    <!--Start About-us Section-->
        <div class="about-us">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="/images/homePage/about.jpg" class="rounded-start" width="100%" height="100%" alt="About-Us">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h2 class="card-title text-center">ABOUT US</h2>
                        <p class="card-text text-center">I have turned my personal experiance juicer into this website to be close to people who are like me, to work together to solve our problems and make life simpler and more beautiful. And always remember that you're the center of the universe becuase you are <span class="special">SPECIAL</span>.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <!--End About-us Section-->
    <div class="features">
        <!--Section Title-->
        <div class="divider">
            <span></span>
            <h2>OUR FEATURES</h2>
            <span></span>
        </div>
    </div>
    <!-- Cards Section -->
    <div class="row">
        <div class="card card1 col-lg-4">
            <div class="overlay"></div>
            <div class="card-text text-center">
                <h2>Highest Quality</h2>
                <p>
                High quality services keep up with the latest technological developments to develop the capabilities of all distinguished people and improve their lifestyle
                </p>
            </div>
        </div>

        <div class="card card2 col-lg-4">
            <div class="overlay"></div>
            <div class="card-text text-center">
                <h2>Economical</h2>
                <p>
                    We provide you with high quality services at a very excellent price so you can benefit your loved ones
                </p>
            </div>
        </div>

        <div class="card card3 col-lg-4">
            <div class="overlay"></div>
            <div class="card-text text-center">
                <h2>Customer Services</h2>
                <p>
                    We have a distinguished team that offers high-level services 24 hours a day
                </p>
            </div>

        </div>
    </div>
</div>
</main>
@stop