@extends('frontend.layouts.app')
@section('title', 'Home')
@section('content')
<section class="section section-lg section-main-bunner section-main-bunner-filter text-center">
        <div class="main-bunner-img" style="background-image: url(&quot;frontend/images/train.png &quot;); background-size: cover;"></div>
        <div class="main-bunner-inner">
          <div class="container">
            <div class="box-default">
              <h1 class="box-default-title">Welcome To</h1>

              <p class="big box-default-text"><h2>Online Advance Train Seats Reservation!</h2></p>
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
                  <p class="booking-title">Date</p>
                  <div class="form-wrap form-wrap-icon"><span class="icon mdi mdi-calendar-text"></span>
                    <input class="form-input" id="booking-date" type="text" name="date" data-constraints="" data-time-picker="date">
                  </div>
                </div>
                <div>
                  <p class="booking-title">no. of people</p>
                  <div class="form-wrap form-wrap-icon">
                    <input class="form-input" id="booking-date" type="number" name="date" data-constraints="">
                  </div>
                </div>
                <div>
                  <p class="booking-title">Destination From</p>
                  <div class="form-wrap">
                    <select>
                      <option label="placeholder"></option>
                      @foreach($stations as $station)
                                <option value="{{$station->id}}">{{$station->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div>
                  <p class="booking-title">Destination To</p>
                  <div class="form-wrap">
                    <select>
                      <option label="placeholder"></option>
                      @foreach($stations as $station)
                                <option value="{{$station->id}}">{{$station->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div>
                  <button class="button button-sm button-gray-600" type="submit">availability</button>
                </div>
              </form>
            </div>
          </div>
        </section>

      <div id="about"> </div>
        <section class="section section-lg section-inset-1 bg-gray-1 pt-lg-0" >
          <div class="container">
            <div class="row row-50 justify-content-xl-between align-items-lg-center">
              <div class="col-lg-6 wow fadeInLeft">
                <div class="box-image"><img class="box-image-static" src="{{asset('frontend/images/t2.jpeg')}}" alt="" width="483" height="327"/>
                </div>
              </div>
              <div class="col-lg-6 col-xl-5 wow fadeInRight">
                <h2>About Us</h2>
                <p>The Online Advanced Train Seat Reservation System was designed by Group 2 of the MSc in IT program as part of their technology software group assignment. This system aims to improve the current booking system of the Sri Lankan railway.</p>

              </div>
            </div>
          </div>
        </section>
      </div>

      <div id="terms"> </div>
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row justify-content-left text-left">
            <div class="col-md-9 col-lg-7 wow-outer">
              <div class="wow slideInDown">
                <h2>Terms and Conditions</h2>

              </div>
            </div>
          </div>
          <div class="row row-20 row-lg-30">
            <div class="col-md-9 col-lg-7 wow-outer">
              <div class="wow fadeInUp">
                <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <h5>GENERAL TERMS AND CONDITIONS APPLICABLE FOR USE OF THE ONLINE SEAT RESERVATION SERVICE.
                     </h5> <br>
                     <ol>
                          <li>1. Select the correct train for your journey.</li>
                          <li>2. Fix a convenient date for both up & down journeys.</li>
                          <li>3. User can buy 5 tickets with a single nic, if needs buy more than 5 ticket should provide extra valid nic for each 5 extra tickets.</li>
                          <li>4. Maximum of 5 seats could be reserved at once.</li>
                          <li>5. A reservation only becomes guaranteed once full payment has been received by Sri Lanka Railways.</li>
                     </ol>

                </div>
            </div>


          </div>
          <hr>
        </div>
      </section>



      <section class="section">
        <div class="row isotope-wrap">
          <!-- Isotope Content-->
          <div class="col-lg-12">
            <div class="isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group" data-lg-thumbnail="false">
              <div class="row no-gutters row-condensed">
                <div class="col-12 col-sm-12 col-md-12 isotope-item wow-outer" data-filter="*">
                  <div class="wow slideInDown">
                    <div class="gallery-item-classic"><img src="{{asset('frontend/images/bannerj.webp')}}" alt="" width="auto" height="auto"/>
                      <div class="gallery-item-classic-caption"><a href="frontend/images/bannerj.webp" data-lightgallery="item">zoom</a></div>
                    </div>
                  </div>
                </div>

                </div>



              </div>
            </div>
          </div>
        </div>
      </section>

      <div id="contact"> </div>
      <section class="section section-lg bg-default" id="contact" data-stellar-background-ratio="0.5">
        <div class="container">
             <div class="row">

                  <div class="col-md-12 col-sm-12">
                       <div class="section-title">
                            <h2>Contact Us - Team of Group 2</h2>
                       </div>
                  </div>


                  <div align="center" class="col-md-12 col-sm-12"> <br>

                       <div class="tab-content" align="left">
                            <div class="tab-pane active" id="tab001" role="tabpanel">
                                 <div class="tab-pane-item">
                                      <h4>Prabath Bandara Panwaththa</h4>
                                      <p>E-mail : <a href=mailto:>CL-MSCIT-25-08@student.icbtcampus.edu.lk</a> </p>
                                      <p>Mobile : <a href=tel:>94771556750</a> </p>
                                 </div>

                            </div>


                            <div class="tab-pane active" id="tab002" role="tabpanel">
                                 <div class="tab-pane-item">
                                      <h4>Antonroy Anpazhagan</h4>
                                      <p>E-mail : <a href=mailto:>CL-MSCIT-26-27@student.icbtcampus.edu.lk</a> </p>
                                      <p>Mobile : <a href=tel:>94776254981</a> </p>
                                 </div>
                            </div>

                            <div class="tab-pane active" id="tab003" role="tabpanel">
                                 <div class="tab-pane-item">
                                      <h4>Jayamayuran Gnanakanthan</h4>
                                      <p>E-mail : <a href=mailto:>CL-MSCIT-26-10@student.icbtcampus.edu.lk</a> </p>
                                      <p>Mobile : <a href=tel:>94767011060</a> </p>
                                 </div>
                            </div>

                            <div class="tab-pane active" id="tab004" role="tabpanel">
                                 <div class="tab-pane-item">
                                      <h4>Damindu Kalupathirana</h4>
                                      <p>E-mail : <a href=mailto:>CL-MSCIT-26-18@student.icbtcampus.edu.lk</a> </p>
                                      <p>Mobile : <a href=tel:>94714328027</a> </p>
                                 </div>
                            </div>
                            <div class="tab-pane active" id="tab005" role="tabpanel">
                                 <div class="tab-pane-item">
                                      <h4>Kasun Fernando</h4>
                                      <p>E-mail : <a href=mailto:>CL-MSCIT-26-07@student.icbtcampus.edu.lk</a> </p>
                                      <p>Mobile : <a href=tel:>94773065665</a> </p>
                                 </div>
                                 <div class="tab-pane-item">
                                    <h4>Gihan Wickremasinghe</h4>
                                    <p>E-mail : <a href=mailto:>CL-MSCIT-26-0-@student.icbtcampus.edu.lk</a> </p>
                                    <p>Mobile : <a href=tel:>94777332166</a> </p>
                               </div>
                            </div>
                       </div>

                  </div>



             </div>
        </div>
   </section>

   <div id="news"> </div>
      <section class="section-lg bg-default">
        <div class="container wow-outer">
          <h2 class="text-center wow slideInDown">Recent News</h2>
          <!-- Owl Carousel-->
          <div class="owl-carousel wow fadeInUp" data-items="1" data-md-items="2" data-lg-items="3" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false">
            <div class="post-corporate"><a class="badge" href="">30 Jan 2025</a>
              <h4 class="post-corporate-title"><a href="">The great ‘train e-ticket’ robbery</a></h4>
              <div class="post-corporate-text">
                <p>The issue of illegal ticket sales for the popular Colombo to Ella train route has become one of the most...</p>
              </div><a class="post-corporate-link" href="https://www.themorning.lk/articles/Ncde0bJlsVCXjY4kj9Su">Read more<span class="icon linearicons-arrow-right"></span></a>
            </div>
            <div class="post-corporate"><a class="badge" href="">30 Jan 2025</a>
              <h4 class="post-corporate-title"><a href="">Train tickets scam in SL exposed by a youtuber. </a></h4>
              <div class="post-corporate-text">
                <p>Train tickets scam in SL exposed by a youtuber. Selling tickets at higher prices for Tourists...</p>
              </div><a class="post-corporate-link" href="https://www.reddit.com/r/srilanka/comments/1h6g7f8/train_tickets_scam_in_sl_exposed_by_a_youtuber/?rdt=33902">Read more<span class="icon linearicons-arrow-right"></span></a>
            </div>
            <div class="post-corporate"><a class="badge" href="">18 Jan 2025</a>
              <h4 class="post-corporate-title"><a href="">Railway Officer Suspended for Train Ticket Scam</a></h4>
              <div class="post-corporate-text">
                <p>The Railway Department has identified a key suspect in connection with a train ticket scam, following suspicions raised...</p>
              </div><a class="post-corporate-link" href="https://mawratanews.lk/news/railway-officer-suspended-for-train-ticket-scam-tickets-sold-at-exorbitant-prices-to-foreigners/">Read more<span class="icon linearicons-arrow-right"></span></a>
            </div>

          </div>
        </div>
      </section>
    @endsection
