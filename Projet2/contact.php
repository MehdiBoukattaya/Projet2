<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('inc/links.php'); ?>
  <title>TUNBOOKING  - CONTACT</title>
</head>
<body class="bg-light">

  <?php require('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">CONTACT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
    Your satisfaction is our priority. Reach out with questions, concerns, or feedback, and our dedicated team will be delighted to assist you. <br> We look forward to making your stay remarkable.
    </p>
  </div>

 

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">

        <div class="bg-white rounded shadow p-4">
        <iframe class="w-100" height="320 px" src="<?php echo $contact_r['iframe']?>"  loading="lazy"></iframe>

        <h5>Address</h5>
          <a href="https://goo.gl/maps/FSUrxPUGfeqfFtfs9" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
            <i class="bi bi-geo-alt-fill"></i> Ottawa, Ontario
          </a>

          <h5 class="mt-4">Call us</h5>
          <a href="tel:  +1 (819) 555-2232" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +1 (819) 555-2232
          </a>
          <br>

          <h5 class="mt-4">Email</h5>
          <a href="mailto: contact@inkhaven.ca" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-envelope-fill"></i> contact@inkhaven.ca
          </a>
          <br>  

          
          <h5 class="mt-4">Horaires d'ouverture</h5>
          <a class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-clock"></i> Lun - Ven : 08h00 - 17h:00
          </a>


          <h5 class="mt-4">Follow us</h5>
        
          <a href="https://www.twitter.com" class="d-inline-block text-dark fs-5 me-2">
                  <i class="bi bi-twitter me-1"></i>
                </a>

          <a href="https://www.facebook.com" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-facebook me-1"></i>
          </a>
          <a href="https://www.instagram.com" class="d-inline-block text-dark fs-5">
            <i class="bi bi-instagram me-1"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 px-4">
        <div class="bg-white rounded shadow p-4">
          <form method="POST">
            <h5>Send a message</h5>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Name</label>
              <input name="name" required type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Email</label>
              <input name="email" required type="email" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Subject</label>
              <input name="subject" required type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Message</label>
              <textarea name="message" required class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
            </div>
            <button type="submit" name="send" class="btn text-white custom-bg mt-3">SEND</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php require('inc/footer.php'); ?>

</body>
</html>