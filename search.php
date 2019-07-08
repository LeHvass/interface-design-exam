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

<body class="search">
  <div class="container">
    <?php include "inc/header.php"; ?>
    <section class="search-criteria">
      <span class="mr-25">
        <label for="input-search">Search</label>
        <input id="input-search" type="text" class="input" name="search" value="Copenhagen">
      </span>

      <span class="mr-25">
        <label for="input-dateFrom">From</label>
        <input id="input-dateFrom" type="text" class="input" data-toggle="datepicker" name="dateFrom" value="<?= isset($_GET['dateFrom']) ? $_GET['dateFrom'] : "" ?>">
      </span>

      <span class="mr-25">
        <label for="input-dateTo">To</label>
        <input id="input-dateTo" type="text" class="input" data-toggle="datepicker" name="dateTo" value="<?= isset($_GET['dateTo']) ? $_GET['dateTo'] : "" ?>">
      </span>

      <span class="mr-25">
        <label for="input-rooms">Rooms</label>
        <select id="input-rooms" name="rooms">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option selected>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
        </select>
      </span>

      <span class="mr-25">
        <label for="input-people">People</label>
        <select id="input-people" name="people">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option selected>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
        </select>
      </span>

      <a class="btn btn-secondary" href="#">Search</a>
    </section>
    <section class="search-container">
      <aside class="search-filters">
        <div class="search-filters-container">

          <div class="search-filters-header">Top Filters</div>

          <div class="switch-group">
            <label class="input-switch">
              <input type="checkbox">
              <span class="input-slider input-round"></span>
              <span class="input-switch-label">Free Wifi</span>
            </label>

            <label class="input-switch">
              <input type="checkbox" checked>
              <span class="input-slider input-round"></span>
              <span class="input-switch-label">Breakfast Included</span>
            </label>

            <label class="input-switch">
              <input type="checkbox" checked>
              <span class="input-slider input-round"></span>
              <span class="input-switch-label">Parking</span>
            </label>

            <label class="input-switch">
              <input type="checkbox">
              <span class="input-slider input-round"></span>
              <span class="input-switch-label">Airport Transit</span>
            </label>

            <label class="input-switch">
              <input type="checkbox">
              <span class="input-slider input-round"></span>
              <span class="input-switch-label">Free Cancellation</span>
            </label>

            <label class="input-switch">
              <input type="checkbox">
              <span class="input-slider input-round"></span>
              <span class="input-switch-label">Workout Facilities</span>
            </label>
          </div>

          <div class="search-filters-header">Hotel Stars</div>
          <div class="switch-group">
            <label class="input-switch">
              <input type="checkbox">
              <span class="input-slider input-round"></span>
              <span class="input-switch-label">5 Stars</span>
            </label>

            <label class="input-switch">
              <input type="checkbox">
              <span class="input-slider input-round"></span>
              <span class="input-switch-label">4 Stars</span>
            </label>

            <label class="input-switch">
              <input type="checkbox">
              <span class="input-slider input-round"></span>
              <span class="input-switch-label">3 Stars</span>
            </label>

            <label class="input-switch">
              <input type="checkbox">
              <span class="input-slider input-round"></span>
              <span class="input-switch-label">2 Stars</span>
            </label>

            <label class="input-switch">
              <input type="checkbox">
              <span class="input-slider input-round"></span>
              <span class="input-switch-label">1 Stars</span>
            </label>
          </div>

        </div>

      </aside>
      <main>
        <a href="hotel.php">
          <div class="result">
            <img class="thumbnail-hotel" src="http://placehold.it/300x255" style="height: 100%;">
            <div class="ribbon">
              <span class="text">You’ve booked here before</span>
            </div>
            <div class="result-details">
              <h2 class="mb-10">Super Awesome Hotel</h2>
              <p class="result-location mb-10"><i class="fas fa-map-marker-alt"></i> <span>Awesome place, Awesomeland</span></p>
              <div style="text-overflow: ellipsis; overflow: hidden;">
                <p class="result-description mb-10">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                  et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip
                  ex ea commodo consequat.
                </p>
              </div>
              <span class="result-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </span>
            </div>
            <div class="result-price">
              <span class="result-price-from">From:</span>
              <span class="result-price-price">6.200 DKK</span>
              <span class="result-price-taxes">Incl. Taxes & Fees</span>
              <button class="btn btn-secondary btn-full-width">See more</button>
            </div>
          </div>
        </a>

        <a href="hotel.php">
          <div class="result">
            <img class="thumbnail-hotel" src="http://placehold.it/300x255">
            <div class="ribbon">
              <span class="text">You’ve booked here before</span>
            </div>
            <div class="result-details">
              <h2 class="mb-10">Super Awesome Hotel</h2>
              <p class="result-location mb-10"><i class="fas fa-map-marker-alt"></i> <span>Awesome place, Awesomeland</span></p>
              <p class="result-description mb-10">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
              </p>
              <span class="result-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </span>
            </div>
            <div class="result-price">
              <span class="result-price-from">From:</span>
              <span class="result-price-price">6.200 DKK</span>
              <span class="result-price-taxes">Incl. Taxes & Fees</span>
              <button class="btn btn-secondary btn-full-width">See more</button>
            </div>
          </div>
        </a>

        <a href="hotel.php">
          <div class="result">
            <img class="thumbnail-hotel" src="http://placehold.it/300x255">
            <div class="result-details">
              <h2 class="mb-10">Super Awesome Hotel</h2>
              <p class="result-location mb-10"><i class="fas fa-map-marker-alt"></i> <span>Awesome place, Awesomeland</span></p>
              <p class="result-description mb-10">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
              </p>
              <span class="result-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </span>
            </div>
            <div class="result-price">
              <span class="result-price-from">From:</span>
              <span class="result-price-price">6.200 DKK</span>
              <span class="result-price-taxes">Incl. Taxes & Fees</span>
              <button class="btn btn-secondary btn-full-width">See more</button>
            </div>
          </div>
        </a>

        <a href="hotel.php">
          <div class="result">
            <img class="thumbnail-hotel" src="http://placehold.it/300x255">
            <div class="result-details">
              <h2 class="mb-10">Super Awesome Hotel</h2>
              <p class="result-location mb-10"><i class="fas fa-map-marker-alt"></i> <span>Awesome place, Awesomeland</span></p>
              <p class="result-description mb-10">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
              </p>
              <span class="result-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </span>
            </div>
            <div class="result-price">
              <span class="result-price-from">From:</span>
              <span class="result-price-price">6.200 DKK</span>
              <span class="result-price-taxes">Incl. Taxes & Fees</span>
              <button class="btn btn-secondary btn-full-width">See more</button>
            </div>
          </div>
        </a>
      </main>
    </section>
    <?php include "inc/footer.php"; ?>
  </div>

  <script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
  <script src="js/datepicker.min.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCn_FwTGt1ScO_tydnBdhN665ABjyqlFHU&libraries=places"></script>
  <script src="js/scripts.js"></script>
  <script>
    var input = document.getElementById('input-search');
    var options = {
      //types: ['establishment']
    };

    autocomplete = new google.maps.places.Autocomplete(input, options);
  </script>
</body>

</html>