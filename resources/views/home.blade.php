@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="homepage">

            <div class="col-lg-3 col-md-3">
                <div class="sb_left">
                    <div class="quick-links">
                        <ul>
                            <li><i class="fa fa-globe" aria-hidden="true"></i><a href="#">View Everything</a><span class="badge">4</span></li>
                            <li><i class="fa fa-beer" aria-hidden="true"></i><a href="#">Crew Feed</a><span class="badge">14</span></li>
                            <li><i class="fa fa-map" aria-hidden="true"></i><a href="#">Top Spots</a><span class="badge">2</span></li>
                            <li><i class="fa fa-camera" aria-hidden="true"></i><a href="#">Top Footage</a><span class="badge">5</span></li>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i><a href="#"> Events</a><span class="badge">9</span></li>
                        </ul>
                    </div>
                    <div class="invite">
                        <i class="fa fa-globe" aria-hidden="true"></i> <h3>get people involved</h3>
                        <div class="line"></div>
                        <p>
                            skatespot lets you share and organise skate trips with the people with the same interest.
                        </p>
                        <i class="fa fa-address-book-o fa-2x ico" aria-hidden="true"></i>
                        <p>
                            Enter email address of your friends to invite to skatespot.
                        </p>
                        <form class="" action="index.html" method="post">
                            <input type="text" name="invite" value="" placeholder="Invite to skatespot">
                            <input type="submit" name="" value="Send Invite">
                        </form>
                    </div>
                    <div class="product">
                        <i class="fa fa-shopping-basket" aria-hidden="true"></i> <h3>Featured Product</h3>
                        <div class="line"></div>
                        <img src="/images/home/product/dgk.png" alt="">
                        <p>Stevie Williams - DGK 8.25</p>
                        <p class="price">£42.99</p>
                        <input type="button" name="" value="Buy Now">
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="home-main">

                    <div class="col-lg-8">
                        <div class="featured-spot">
                            <h2>Sneinton Market</h2>
                            <h5>Nottingham, UK</h5>

                            <div class="spot-type">
                                <p>skatepark</p>
                            </div>

                            <div class="rating-system">

                                <div class="star-ratings-css">
                                  <div class="star-ratings-css-top" style="width: 85%"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                                  <div class="star-ratings-css-bottom"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                                </div>
                                <p>Based on 3,012 ratings.</p>
                            </div>

                            <div class="bust-type">
                                <h5>Bust Type</h5>
                                <p>low</p>
                            </div>

                            <div class="difficulty">
                                <h5>difficulty</h5>
                                <p>high</p>
                            </div>

                            <img src="https://dev.theresortcrowd.com/bundles/app/images/our-properties-bg.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- <div class="featured-spot-right">

                            <h2>Kirkhallam Skatepark</h2>
                            <h5>Derbyshire, UK</h5>

                            <img src="https://dev.theresortcrowd.com/bundles/app/images/why-invest-in-holiday-resorts-bg.jpg" alt="">

                            <div class="spot-contents">
                                yo
                            </div>
                        </div> -->
                        <div class="featured-spot-right">
                        <div id="f1_card" class="shadow">
                          <div class="front face">
                              <h2>Kirkhallam Skatepark</h2>
                              <h5>Derbyshire, UK</h5>
                            <img src="https://dev.theresortcrowd.com/bundles/app/images/why-invest-in-holiday-resorts-bg.jpg"/>
                          </div>
                          <div class="back face center">
                            <p>This is nice for exposing more information about an image.</p>
                            <p>Any content can go here.</p>
                          </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="top-spots">
                            <img src="" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="top-spots">

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="top-spots">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
