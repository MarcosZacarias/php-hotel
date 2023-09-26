<?php

$hotels = [

  [
    'name' => 'Hotel Belvedere',
    'description' => 'Hotel Belvedere Descrizione',
    'parking' => true,
    'vote' => 4,
    'distance_to_center' => 10.4
  ],
  [
    'name' => 'Hotel Futuro',
    'description' => 'Hotel Futuro Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 2
  ],
  [
    'name' => 'Hotel Rivamare',
    'description' => 'Hotel Rivamare Descrizione',
    'parking' => false,
    'vote' => 1,
    'distance_to_center' => 1
  ],
  [
    'name' => 'Hotel Bellavista',
    'description' => 'Hotel Bellavista Descrizione',
    'parking' => false,
    'vote' => 5,
    'distance_to_center' => 5.5
  ],
  [
    'name' => 'Hotel Milano',
    'description' => 'Hotel Milano Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 50
  ],

];

$form_sent = !empty($_POST);
$check_parking = $POST["checkparking"];
$vote_hotel = $POST["vote_hotel"];
var_dump($check_parking);
var_dump($vote_hotel);



foreach ($hotels as $hotel) {
}
;

$hotels_filters = [];

if ($form_sent) {
  foreach ($hotels as $hotel) {
    if (in_array("true", $hotel)) {
      array_push($hotels_filters, $hotel);
    }

  }
}
;



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Titolo</title>

  <!-- LINK VUE.JS -->
  <!-- <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script> -->

  <!-- LINK BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

  <!-- LINK MY CSS -->
  <link rel="stylesheet" href="./css/style.css" />

  <!-- SCRIPT MY JAVASCRIPT -->
  <script src="./js/main.js" defer></script>
</head>

<body>
  <div class="container">

    <!-- Filtri -->
    <form action="" method="POST">
      <div class="form-check ">
        <!-- Filtro parcheggio -->
        <input class="form-check-input" type="checkbox" value="parking" id="checkparking" name="key[]">
        <label class="form-check-label" for="checkparking">
          Hotel with Parking
        </label>
        <select class="form-select my-2 w-25" aria-label="Default select example" name="vote_hotel">
          <option selected>Hotel Vote</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>


        </select>
        <div>
          <button class="btn btn-primary">Invia</button>
        </div>
      </div>
    </form>



    <!-- Tabella Hotels -->
    <table class="table table-hover">

      <thead>
        <tr>
          <?php foreach ($hotel as $key => $value): ?>
          <th scope="col">
            <? echo ucfirst($key); ?>
          </th>
          <?php endforeach; ?>
        </tr>
      </thead>
      <tbody>
        <?php if (!$form_sent): ?>
        <?php foreach ($hotels as $hotel): ?>
        <tr>
          <?php foreach ($hotel as $key => $value): ?>
          <td>
            <?= $value; ?>
          </td>
          <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>

        <?php else: ?>
        <?php foreach ($hotels_filters as $hotel): ?>
        <tr>
          <?php foreach ($hotel as $key => $value): ?>
          <td>
            <?= $value; ?>
          </td>
          <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>


      </tbody>

    </table>
  </div>




  <!-- DIV VUE.JS -->
  <!-- <div id="app">{{ message }}</div> -->
  <!-- SCRIPT BOOTSTRAP JAVASCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
</body>

</html>