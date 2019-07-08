<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Search hotels, homes, apartments and other unique places to stay - Booking.com</title>

  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <link rel="manifest" href="site.webmanifest">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-j8y0ITrvFafF4EkV1mPW0BKm6dp3c+J9Fky22Man50Ofxo2wNe5pT1oZejDH9/Dt"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/datepicker.min.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body class="hotel">
  <div class="container">
    <?php include "inc/header.php"; ?>

    <main>
      <aside>
        <img src="images/booking-bg.jpg">
        <!--<div class="background"></div>-->
      </aside>
      <article>
        <button id="btn-book-now" class="btn btn-secondary">Book Now</button>
        <h1>Super Awesome Hotel</h1>
        <p class="result-location mb-10"><i class="fas fa-map-marker-alt"></i> <span>Awesome place, Awesomeland</span></p>
        <p class="hotel-description mb-25">
          Urban House Copenhagen by Meininger is a trendy, self-service hostel in vibrant Vesterbro, 2 minutes’ walk
          from Copenhagen Central Station. Attune to the pulse of the city by making use of the hostel’s features,
          including online check-in for express service and bicycle shop.
          At Urban House Copenhagen, guests can choose between private rooms with a bathroom or dormitories with shared
          facilities. All rooms include linen, towels and individual reading lights. Dorm rooms provide personal
          lockers. Padlocks can be purchased from the front desk. Read More..
        </p>

        <div class="hotel-details">
          <div id="hotel-facilities" class="hotel-details-accordeon mb-25">
            <div class="hotel-details-category mb-10"><i class="fas fa-plus"></i> Popular Facilities</div>
            <div class="hotel-details-large mb-25">
              <span class="mr-25"><i class="fas fa-wifi mr-10"></i> Free Wifi</span>
              <span class="mr-25"><i class="fas fa-plane mr-10"></i> Airport Transit</span>
              <span class="mr-25"><i class="fas fa-cocktail mr-10"></i> Bar</span>
              <span class="mr-25"><i class="fas fa-utensils mr-10"></i> Restaurant</span>
            </div>
            <div class="hotel-details-small">
              <span class="mr-25"><i class="fas fa-wifi mr-10"></i> Gym</span>
              <span class="mr-25"><i class="fas fa-plane mr-10"></i> Sauna</span>
              <span class="mr-25"><i class="fas fa-parking mr-10"></i> Street Parking</span>
              <span class="mr-25"><i class="fas fa-utensils mr-10"></i> Dry Cleaning</span>
              <span class="mr-25"><i class="fas fa-utensils mr-10"></i> Fax/Photocopying</span>
              <span class="mr-25"><i class="fas fa-utensils mr-10"></i> Luggage Storage</span>
              <span class="mr-25"><i class="fas fa-utensils mr-10"></i> Newspapers</span>
            </div>
          </div>

          <div id="hotel-rooms" class="hotel-details-accordeon mb-25">
            <div class="hotel-details-category mb-10"><i class="fas fa-plus"></i> Choose Rooms</div>
            <div class="hotel-rooms-room-type">
              <div class="hotel-rooms-icon">
                <i class="fas fa-user"></i>
              </div>
              <div>
                <p class="hotel-rooms-title">Single Room</p>
                <p class="hotel-rooms-subtitle">1 single bed</p>
              </div>
              <div>
                <select>
                  <option>0</option>
                  <option>1</option>
                  <option selected>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>
            </div>

            <div class="hotel-rooms-room-type">
              <div class="hotel-rooms-icon">
                <i class="fas fa-user"></i>
                <i class="fas fa-user"></i>
              </div>
              <div>
                <p class="hotel-rooms-title">Double Room</p>
                <p class="hotel-rooms-subtitle">2 single beds</p>
              </div>
              <div>
                <select>
                  <option>0</option>
                  <option>1</option>
                  <option selected>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>
            </div>

            <div class="hotel-rooms-price">
              <span class="hotel-price">6.200 DKK</span>
              <span class="hotel-price-taxes">Incl. Taxes & Fees</span>
              <a href="booking.php" class="btn btn-secondary">Book Now</a>
            </div>
          </div>

          <div id="hotel-surroundings" class="hotel-details-accordeon mb-25">
            <div class="hotel-details-category mb-10"><i class="fas fa-plus"></i> Surroundings</div>
            <div class="hotel-details-small">

              <div class="hotel-property">
                <div class="hotel-property-image">
                  <img src="images/property-horse.png">
                </div>
                <div class="hotel-property-container">
                  <div class="hotel-property-title">Tivoli</div>
                  <div class="hotel-property-description">0.2km</div>
                </div>
              </div>

              <div class="hotel-property">
                <div class="hotel-property-image">
                  <img src="images/property-drink.png">
                </div>
                <div class="hotel-property-container">
                  <div class="hotel-property-title">Bar</div>
                  <div class="hotel-property-description">0.5km</div>
                </div>
              </div>

              <div class="hotel-property">
                <div class="hotel-property-image">
                  <img src="images/property-cutlery.png">
                </div>
                <div class="hotel-property-container">
                  <div class="hotel-property-title">Restaurant</div>
                  <div class="hotel-property-description">1km</div>
                </div>
              </div>

              <div class="hotel-property">
                <div class="hotel-property-image">
                  <img src="images/property-swim.png">
                </div>
                <div class="hotel-property-container">
                  <div class="hotel-property-title">Swimming Pool</div>
                  <div class="hotel-property-description">1.2km</div>
                </div>
              </div>

              <div class="hotel-property">
                <div class="hotel-property-image">
                  <img src="images/property-beer.png">
                </div>
                <div class="hotel-property-container">
                  <div class="hotel-property-title">Hooters</div>
                  <div class="hotel-property-description">1.3km</div>
                </div>
              </div>

            </div>

          </div>

          <div id="hotel-reviews" class="hotel-details-accordeon mb-25">
            <div class="hotel-details-category mb-10"><i class="fas fa-plus"></i> Reviews</div>
            <div class="hotel-reviews-slider-container hotel-details-small">
              <div class="hotel-review">
                <span class="hotel-review-rating mb-10">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </span>
                <div class="hotel-review-subcontainer">
                  <img src="images/reviewer-1.png" class="mr-25">
                  <p>
                    Urban House Copenhagen by Meininger is a trendy, self-service hostel in vibrant Vesterbro, 2
                    minutes’
                    walk from Copenhagen Central Station. Attune to the pulse of the city by making use of the
                    hostel’s
                    features, including online check-in for express service and bicycle shop.
                  </p>
                </div>
              </div>
            </div>
          </div>


          <div id="hotel-surroundings" class="hotel-details-accordeon mb-25">
            <div class="hotel-details-category mb-10"><i class="fas fa-plus"></i> House Rules</div>
            <div class="hotel-details-small">

              <div class="hotel-property">
                <div class="hotel-property-image">
                  <i class="far fa-clock"></i>
                </div>
                <div class="hotel-property-container">
                  <div class="hotel-property-title">Check-In</div>
                  <div class="hotel-property-description">24 hour check-in</div>
                </div>
              </div>

              <div class="hotel-property">
                <div class="hotel-property-image">
                  <i class="far fa-clock"></i>
                </div>
                <div class="hotel-property-container">
                  <div class="hotel-property-title">Check-Out</div>
                  <div class="hotel-property-description">Before 11:00</div>
                </div>
              </div>

              <div class="hotel-property">
                <div class="hotel-property-image">
                  <i class="far fa-credit-card"></i>
                </div>
                <div class="hotel-property-container">
                  <div class="hotel-property-title">Cancellation</div>
                  <div class="hotel-property-description">1km</div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </article>
    </main>
    <?php include "inc/footer.php"; ?>
  </div>

  <script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
  <script src="js/datepicker.min.js"></script>
  <script src="js/scripts.js"></script>
</body>

</html>