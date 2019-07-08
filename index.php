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
  <link rel="stylesheet" href="css/datepicker.min.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body class="index">
  <div class="container">
    <?php include "inc/header.php"; ?>
    <main>
      <h1 class="mb-25">Search for hotels</h1>
      <form action="search.php" autocomplete="off">
        <div class="mb-25">
          <input type="text" id="input-search" class="input flex-grow" placeholder="City, Region, District or Specific Hotel">
        </div>
        <div class="mb-25">
          <span class="popover-parent mr-25 flex-grow">
            <textarea id="input-filters" placeholder="Filters" class="input input-full-width" rows="1" style="resize: none;"></textarea>

            <div class="popover">
              <label class="input-checkbox">Breakfast Included
                <input type="checkbox" name="Breakfast Included">
                <span class="checkmark"></span>
              </label>
              <label class="input-checkbox">Free WiFi
                <input type="checkbox" name="Free WiFi">
                <span class="checkmark"></span>
              </label>
              <label class="input-checkbox">Parking
                <input type="checkbox" name="Parking">
                <span class="checkmark"></span>
              </label>
              <label class="input-checkbox">Airport Shuttle
                <input type="checkbox" name="Airport Shuttle">
                <span class="checkmark"></span>
              </label>
              <label class="input-checkbox">Fitness Centre
                <input type="checkbox" name="Fitness Centre">
                <span class="checkmark"></span>
              </label>
              <label class="input-checkbox">Free Cancellation
                <input type="checkbox" name="Free Cancellation">
                <span class="checkmark"></span>
              </label>
            </div>
          </span>

          <div class="field">
            <input type="text" id="input-budget" class="input mr-25" placeholder="Budget" style="width:200px;">
            <span class="currency">DKK</span>
          </div>

          <select class="select mr-25" name="rooms">
            <option disabled selected>Rooms</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
          </select>
          <select class="mr-25" name="people">
            <option disabled selected>People</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
          </select>
        </div>
        <div class="mb-25">
          <input id="input-dateFrom" type="text" class="input mr-25" placeholder="From" data-toggle="datepicker" name="dateFrom">

          <input id="input-dateTo" type="text" class="input" placeholder="To" data-toggle="datepicker" name="dateTo">
        </div>
        <div>
          <button type="submit" class="btn btn-secondary mr-25">Search</button>
          <button type="button" class="btn btn-primary">Recent Bookings</button>
        </div>
      </form>
    </main>
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