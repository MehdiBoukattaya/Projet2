<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('inc/links.php'); ?>
  <title>
    TUNBOOKING - BOOKING CONFIRMATION
  </title>
</head>

<body class="bg-light">

  <?php require('inc/header.php'); ?>


  <div class="container">
    <div class="row">

      <div class="col-12 my-5 mb-4 px-4">
        <h2 class="fw-bold">CONFIRMATION DE LA RESERVATION</h2>
        <div style="font-size: 14px;">
          <a href="index.php" class="text-secondary text-decoration-none">HOME</a>
          <span class="text-secondary"> > </span>
          <a href="artists.php" class="text-secondary text-decoration-none">HOTELS</a>
          <span class="text-secondary"> > </span>
          <a href="artists.php" class="text-secondary text-decoration-none">ROOMS</a>
          <span class="text-secondary"> > </span>
          <a href="#" class="text-secondary text-decoration-none">CONFIRMER</a>
        </div>
      </div>

      <div class="col-lg-7 col-md-12 px-4">
            <div class="card p-3 shadow-sm rounded">
              <img src="images/rooms/single.jpg" class="img-fluid rounded mb-3">
              <h5>ROOM 1</h5>
              <h6>200$</h6>
            </div>
         
      </div>

      <div class="col-lg-5 col-md-12 px-4">
        <div class="card mb-4 border-0 shadow-sm rounded-3">
          <div class="card-body">
            <form action="confirming_loading.php"  id="booking_form">
              <h6 class="mb-3">DETAILS DE LA RESERVATION</h6>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label">Nom et prénom</label>
                  <input name="name" type="text" 
                    class="form-control shadow-none" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Numéro de téléphone</label>
                  <input name="phonenum" type="number" 
                    class="form-control shadow-none" required>
                </div>
                <div class="col-md-12 mb-3">
                  <label class="form-label">Adresse</label>
                  <textarea name="address" class="form-control shadow-none" rows="1"
                    required>Adresse</textarea>
                </div>
              


                <div class="col-md-6 mb-4">
                  <label class="form-label">Check-in</label>
                  <input name="DateReservation" type="date" class="form-control shadow-none"
                    required>
                </div>
                
                <div class="col-md-6 mb-4">
                  <label class="form-label">Check-out</label>
                  <input name="DateReservation" type="date" class="form-control shadow-none"
                    required>
                </div>

                <div class="col-12">
                  <div class="spinner-border text-info mb-3 d-none" id="info_loader" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                  <h6 class="mb-3 text-danger" id="pay_info"></h6>
                  <div class="row">
                    <div class="col-md-6 mb-1">
                      <button href="confirming_loading.php" name="confirm_now" class="btn w-100 text-white custom-bg shadow-none ">Book now</button>
                    </div>
                    
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>


  <?php require('inc/footer.php'); ?>

</body>

</html>