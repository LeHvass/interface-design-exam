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
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-j8y0ITrvFafF4EkV1mPW0BKm6dp3c+J9Fky22Man50Ofxo2wNe5pT1oZejDH9/Dt"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/datepicker.min.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body class="booking">
  <div class="container">
    <?php include "inc/header.php"; ?>

    <main>
      <aside>

      </aside>
      <article>
        <div>
          <h1>Super Awesome Hotel</h1>
          <p class="booking-location mb-10"><i class="fas fa-map-marker-alt"></i> <span>Awesome place, Awesomeland</span></p>
        </div>
        <div class="booking-form">
          <div class="booking-rooms">
            <form>
              <div class="mb-25">
                <label for="room1">Room 1 - Single</label>
                <select id="room1">
                  <option>James Doe</option>
                </select>
              </div>

              <div class="mb-25">
                <label for="room2">Room 2 - Double</label>
                <select id="room2-1" class="mb-10">
                  <option>John Doe</option>
                </select>
                <select id="room2-2">
                  <option>Jane Doe</option>
                </select>
              </div>
            </form>
          </div>
          <div class="booking-confirmation">
            <ul class="booking-confirmation-rooms mb-25">
              <li>Room 1 - Single
                <ul>
                  <li>James Doe</li>
                </ul>
              </li>
              <li>Room 2 - Double
                <ul>
                  <li>John Doe</li>
                  <li>Jane Doe</li>
                </ul>
              </li>
            </ul>
            <div class="booking-price-container">
              <span class="hotel-price">6.200 DKK</span>
              <span class="hotel-price-taxes">Incl. Taxes & Fees</span>
              <a href="confirmation.php" class="btn btn-secondary center">Book Now</a>
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