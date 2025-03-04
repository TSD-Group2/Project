@extends('frontend.layouts.app')
@section('title', 'Home')
@section('content')
<section class="section section-lg section-main-bunner section-main-bunner-filter text-center">
        <div class="main-bunner-img" style="background-image: url(&quot;images/bg-bunner-2.jpg&quot;); background-size: cover;"></div>
        <div class="main-bunner-inner">
          <div class="container">
            <div class="box-default">
              <h1 class="box-default-title">Welcome</h1>
              <div class="box-default-decor"></div>
              <p class="big box-default-text">Our restaurant offers full-service dining with breathtaking views seen from our indoor covered patio and our outdoor sundeck.</p>
            </div>
          </div>
        </div>
      </section>
      <div class="bg-gray-1">
        <section class="section-transform-top">
          <div class="container">
            <div class="box-booking">
              <form class="rd-form rd-mailform booking-form">
                <div>
                  <p class="booking-title">Name</p>
                  <div class="form-wrap">
                    <input class="form-input" id="booking-name" type="text" name="name" data-constraints="">
                    <label class="form-label" for="booking-name">Your name</label>
                  </div>
                </div>
                <div>
                  <p class="booking-title">Phone</p>
                  <div class="form-wrap">
                    <input class="form-input" id="booking-phone" type="text" name="phone" data-constraints="@Numeric">
                    <label class="form-label" for="booking-phone">Your phone number</label>
                  </div>
                </div>
                <div>
                  <p class="booking-title">Date</p>
                  <div class="form-wrap form-wrap-icon"><span class="icon mdi mdi-calendar-text"></span>
                    <input class="form-input" id="booking-date" type="text" name="date" data-constraints="" data-time-picker="date">
                  </div>
                </div>
                <div>
                  <p class="booking-title">no. of people</p>
                  <div class="form-wrap">
                    <select data-placeholder="2">
                      <option label="placeholder"></option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                    </select>
                  </div>
                </div>
                <div>
                  <button class="button button-lg button-gray-600" type="submit">Check availability</button>
                </div>
              </form>
            </div>
          </div>
        </section>
        <section class="section section-lg section-inset-1 bg-gray-1 pt-lg-0">
          <div class="container">
            <div class="row row-50 justify-content-xl-between align-items-lg-center">
              <div class="col-lg-6 wow fadeInLeft">
                <div class="box-image"><img class="box-image-static" src="{{asset('frontend/images/home-3-1-483x327.jpg')}}" alt="" width="483" height="327"/><img class="box-image-position" src="{{asset('frontend/images/home-3-2-341x391.png')}}" alt="" width="341" height="391"/>
                </div>
              </div>
              <div class="col-lg-6 col-xl-5 wow fadeInRight">
                <h2>About Us</h2>
                <p>Pesto is a family owned and operated Italian Restaurant offering a combination of fresh ingredients and authentic Italian cooking.</p>
                <p>We will make sure you are served the most authentic and fresh Italian dishes, while offering the best customer service. Our kitchen is committed to providing our guests with the best Italian Cuisine.</p><img src="{{asset('frontend/images/signature-1-140x50.png')}}" alt="" width="140" height="50"/>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- Featured Offers-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-md-9 col-lg-7 wow-outer">
              <div class="wow slideInDown">
                <h2>Featured Offers</h2>
                <p class="text-opacity-80">We offer a great variety of  the best Italian dishes to our visitors and guests. Below are some of our most popular main dishes and desserts.</p>
              </div>
            </div>
          </div>
          <div class="row row-20 row-lg-30">
            <div class="col-md-6 col-lg-4 wow-outer">
              <div class="wow fadeInUp">
                <div class="product-featured">
                  <div class="product-featured-figure"><img src="{{asset('frontend/images/product-1-370x395.jpg')}}" alt="" width="370" height="395"/>
                    <div class="product-featured-button"><a class="button button-primary" href="#">order now</a></div>
                  </div>
                  <div class="product-featured-caption">
                    <h4><a class="product-featured-title" href="#">Ravioli</a></h4>
                    <p class="big">$8</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow-outer">
              <div class="wow fadeInUp">
                <div class="product-featured">
                  <div class="product-featured-figure"><img src="{{asset('frontend/images/product-2-370x395.jpg')}}" alt="" width="370" height="395"/>
                    <div class="product-featured-button"><a class="button button-primary" href="#">order now</a></div>
                  </div>
                  <div class="product-featured-caption">
                    <h4><a class="product-featured-title" href="#">Black Pasta</a></h4>
                    <p class="big">$13</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow-outer">
              <div class="wow fadeInUp">
                <div class="product-featured">
                  <div class="product-featured-figure"><img src="{{asset('frontend/images/product-3-370x395.jpg')}}" alt="" width="370" height="395"/>
                    <div class="product-featured-button"><a class="button button-primary" href="#">order now</a></div>
                  </div>
                  <div class="product-featured-caption">
                    <h4><a class="product-featured-title" href="#">Gelato</a></h4>
                    <p class="big">$4</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-gray-1">
        <div class="container">
          <h2 class="text-center">Our Restaurant Menu</h2>
          <div class="row">
            <div class="col-12">
              <div class="tabs-custom tabs-horizontal tabs-classic" id="tabs-1">
                <ul class="nav nav-tabs nav-tabs-classic">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab">mains</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">Desserts</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-toggle="tab">drinks</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-1-1">
                    <div class="box-event-modern">
                      <div class="event-item-modern">
                        <p class="event-time">$25.89</p>
                        <h4 class="event-item-modern-title"><a href="#">Osso Buco</a></h4>
                        <div class="event-item-modern-text">
                          <p>Osso Buco is one of the Italian greats - slow cooked veal in a white wine tomato sauce. Meltingly tender, this is both hearty and luxurious.</p>
                        </div>
                      </div>
                      <div class="event-item-modern">
                        <p class="event-time">$16.89</p>
                        <h4 class="event-item-modern-title"><a href="#">Pappardelle Mimmo</a></h4>
                        <div class="event-item-modern-text">
                          <p>This delicious dish tops long, wide pasta with scallops, lobster, asparagus, butter, sage and truffle oil to cater every palate.</p>
                        </div>
                      </div>
                      <div class="event-item-modern">
                        <p class="event-time">$17.89</p>
                        <h4 class="event-item-modern-title"><a href="#">Trippa Satriano</a></h4>
                        <div class="event-item-modern-text">
                          <p>Thinly sliced herb encrusted ahi tuna topped with diced tomatoes, olives, capers, red onions and fennel. Perfect choice even for the first-time visitors!</p>
                        </div>
                      </div>
                      <div class="event-item-modern">
                        <p class="event-time">$18.89</p>
                        <h4 class="event-item-modern-title"><a href="#">Filetto Di Manzo</a></h4>
                        <div class="event-item-modern-text">
                          <p>Wonderful combination of prime tenderloin, winter greens, Jerusalem artichoke puree, and oxtail reduction sauce.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tabs-1-2">
                    <div class="box-event-modern">
                      <div class="event-item-modern">
                        <p class="event-time">$20.89</p>
                        <h4 class="event-item-modern-title"><a href="#">Tiramisu</a></h4>
                        <div class="event-item-modern-text">
                          <p>A Pesto’s favorite - classic Italian dessert made with lady fingers, Mascarpone cheese & espresso. Perfect for both kids and adults.</p>
                        </div>
                      </div>
                      <div class="event-item-modern">
                        <p class="event-time">$6.89</p>
                        <h4 class="event-item-modern-title"><a href="#">Cannoli</a></h4>
                        <div class="event-item-modern-text">
                          <p>Trio tower of cannoli filled with smooth ricotta, sugar & cinnamon, with chocolate & raspberry sauces. Single cannoli is also available.</p>
                        </div>
                      </div>
                      <div class="event-item-modern">
                        <p class="event-time">$5.89</p>
                        <h4 class="event-item-modern-title"><a href="#">Pistachio Passion</a></h4>
                        <div class="event-item-modern-text">
                          <p>Layered pistachio cream, cream cheese custard & whipped cream atop a rich walnut crust.</p>
                        </div>
                      </div>
                      <div class="event-item-modern">
                        <p class="event-time">$4.89</p>
                        <h4 class="event-item-modern-title"><a href="#">Chocolate-and-Pistachio Biscotti</a></h4>
                        <div class="event-item-modern-text">
                          <p>At Pesto, we vary these wonderful nutty biscotti, while also dipping them in melted dark chocolate for an extra layer of flavor.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tabs-1-3">
                    <div class="box-event-modern">
                      <div class="event-item-modern">
                        <p class="event-time">$10.89</p>
                        <h4 class="event-item-modern-title"><a href="#">Aperol Spritz</a></h4>
                        <div class="event-item-modern-text">
                          <p>The most popular drink in Venice: refreshing, easygoing &…happy! Perfect to be sipped as an “Aperitivo” just before dinner - delightful!</p>
                        </div>
                      </div>
                      <div class="event-item-modern">
                        <p class="event-time">$9.89</p>
                        <h4 class="event-item-modern-title"><a href="#">Negroni</a></h4>
                        <div class="event-item-modern-text">
                          <p>Reward yourself with a moment of relaxation & pure pleasure while enjoying the full flavour & simplicity of a Negroni, an iconic Italian cocktail.</p>
                        </div>
                      </div>
                      <div class="event-item-modern">
                        <p class="event-time">$11.89</p>
                        <h4 class="event-item-modern-title"><a href="#">Negroni Sbagliato</a></h4>
                        <div class="event-item-modern-text">
                          <p>A cocktail for those who prefer more delicate flavours but nonetheless want a drink full of taste & personality.</p>
                        </div>
                      </div>
                      <div class="event-item-modern">
                        <p class="event-time">$8.89</p>
                        <h4 class="event-item-modern-title"><a href="#">White Peach Bellini</a></h4>
                        <div class="event-item-modern-text">
                          <p>White Peach Bellini is a classic drink from Venice Italy of white peach purée and Prosecco. It is one of our most popular drinks at Pesto.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="row isotope-wrap">
          <!-- Isotope Content-->
          <div class="col-lg-12">
            <div class="isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group" data-lg-thumbnail="false">
              <div class="row no-gutters row-condensed">
                <div class="col-12 col-sm-6 col-md-4 isotope-item wow-outer" data-filter="*">
                  <div class="wow slideInDown">
                    <div class="gallery-item-classic"><img src="{{asset('frontend/images/gallery-masonry-1-640x429.jpg')}}" alt="" width="640" height="429"/>
                      <div class="gallery-item-classic-caption"><a href="images/gallery-masonry-1-original.jpg" data-lightgallery="item">zoom</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 isotope-item wow-outer" data-filter="Category 3">
                  <div class="wow slideInDown">
                    <div class="gallery-item-classic"><img src="{{asset('frontend/images/gallery-masonry-2-640x429.jpg')}}" alt="" width="640" height="429"/>
                      <div class="gallery-item-classic-caption"><a href="images/gallery-masonry-2-original.jpg" data-lightgallery="item">zoom</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4 isotope-item wow-outer" data-filter="Category 3">
                  <div class="wow slideInDown">
                    <div class="gallery-item-classic"><img src="{{asset('frontend/images/gallery-masonry-3-640x429.jpg')}}" alt="" width="640" height="429"/>
                      <div class="gallery-item-classic-caption"><a href="images/gallery-masonry-3-original.jpg" data-lightgallery="item">zoom</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 isotope-item wow-outer" data-filter="Category 3">
                  <div class="wow fadeInUp">
                    <div class="gallery-item-classic"><img src="{{asset('frontend/images/gallery-masonry-4-960x429.jpg')}}" alt="" width="960" height="429"/>
                      <div class="gallery-item-classic-caption"><a href="images/gallery-masonry-4-original.jpg" data-lightgallery="item">zoom</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 isotope-item wow-outer" data-filter="Category 2">
                  <div class="wow fadeInUp">
                    <div class="gallery-item-classic"><img src="{{asset('frontend/images/gallery-masonry-5-960x429.jpg')}}" alt="" width="960" height="429"/>
                      <div class="gallery-item-classic-caption"><a href="images/gallery-masonry-5-original.jpg" data-lightgallery="item">zoom</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-lg bg-default">
        <div class="container wow-outer">
          <h2 class="text-center wow slideInDown">Recent News</h2>
          <!-- Owl Carousel-->
          <div class="owl-carousel wow fadeInUp" data-items="1" data-md-items="2" data-lg-items="3" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false">
            <div class="post-corporate"><a class="badge" href="#">Jul 02, 2019</a>
              <h4 class="post-corporate-title"><a href="#">Genuine Italian Pizza: Authenticity and Choice</a></h4>
              <div class="post-corporate-text">
                <p>As an Italian restaurant, we are very proud of our delicious authentic pizzas. Our three most popular choices are the Rustica, the Toscana and...</p>
              </div><a class="post-corporate-link" href="#">Read more<span class="icon linearicons-arrow-right"></span></a>
            </div>
            <div class="post-corporate"><a class="badge" href="#">Jul 12, 2019</a>
              <h4 class="post-corporate-title"><a href="#">Italian vs. American Spaghetti: Top 5 Differences</a></h4>
              <div class="post-corporate-text">
                <p>Commonly, when we hear there is spaghetti for dinner we will be expecting a red tomato sauce with meat and seasonings poured over long...</p>
              </div><a class="post-corporate-link" href="#">Read more<span class="icon linearicons-arrow-right"></span></a>
            </div>
            <div class="post-corporate"><a class="badge" href="#">aug 02, 2019</a>
              <h4 class="post-corporate-title"><a href="#">The Delicious History of Lasagna and Its Origins</a></h4>
              <div class="post-corporate-text">
                <p>Lasagna, could there be a more perfect dish? It’s comfort food on steroids. Layers of cheese generously piled on top of decadent amounts...</p>
              </div><a class="post-corporate-link" href="#">Read more<span class="icon linearicons-arrow-right"></span></a>
            </div>
            <div class="post-corporate"><a class="badge" href="#">Aug 15, 2019</a>
              <h4 class="post-corporate-title"><a href="#">Making Gelato Like a True Italian: Tips From Our Chef</a></h4>
              <div class="post-corporate-text">
                <p>Most would agree that gelato is the most delicious frozen dessert; the perfect ending to any meal. With origins in Sicily, gelato has been made famous...</p>
              </div><a class="post-corporate-link" href="#">Read more<span class="icon linearicons-arrow-right"></span></a>
            </div>
            <div class="post-corporate"><a class="badge" href="#">Sep 15, 2019</a>
              <h4 class="post-corporate-title"><a href="#">Italian Ingredients You Can Easily Grow at Home</a></h4>
              <div class="post-corporate-text">
                <p>Imagine preparing an Italian dinner but having to stop cooking because you forget an ingredient and must run to the store. How nice would it be to go...</p>
              </div><a class="post-corporate-link" href="#">Read more<span class="icon linearicons-arrow-right"></span></a>
            </div>
            <div class="post-corporate"><a class="badge" href="#">Sep 28, 2019</a>
              <h4 class="post-corporate-title"><a href="#">Our Brief Guide to Pairing Wine and Pasta the Right Way</a></h4>
              <div class="post-corporate-text">
                <p>To Italians, pasta is the food of the gods, and there is nothing better to go with a good pasta than a perfect wine. To the uninitiated, finding the right...</p>
              </div><a class="post-corporate-link" href="#">Read more<span class="icon linearicons-arrow-right"></span></a>
            </div>
            <div class="post-corporate"><a class="badge" href="#">Oct 05, 2019</a>
              <h4 class="post-corporate-title"><a href="#">Top 10 Famous Spring Dishes in Italian Restaurants</a></h4>
              <div class="post-corporate-text">
                <p>Spring is the time for growth and rebirth. One can see this throughout the countrysides of Italy with blooming flowers and budding trees. Springtime is...</p>
              </div><a class="post-corporate-link" href="#">Read more<span class="icon linearicons-arrow-right"></span></a>
            </div>
            <div class="post-corporate"><a class="badge" href="#">Oct 17, 2019</a>
              <h4 class="post-corporate-title"><a href="#">What Makes Some Seasonings Truly Italian?</a></h4>
              <div class="post-corporate-text">
                <p>When thinking of Italian cuisine, dishes like pasta enveloped in hearty sauces come to mind. Certain flavors seem to be found across the different...</p>
              </div><a class="post-corporate-link" href="#">Read more<span class="icon linearicons-arrow-right"></span></a>
            </div>
            <div class="post-corporate"><a class="badge" href="#">Nov 10, 2019</a>
              <h4 class="post-corporate-title"><a href="#">Types of Italian Sausage and Why They Are Different</a></h4>
              <div class="post-corporate-text">
                <p>There are many types of Italian sausage. The main difference in Italian sausage when compared to other sausages is the seasoning. The particular...</p>
              </div><a class="post-corporate-link" href="#">Read more<span class="icon linearicons-arrow-right"></span></a>
            </div>
          </div>
        </div>
      </section>
    @endsection