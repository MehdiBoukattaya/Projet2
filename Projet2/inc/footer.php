<div class="container-fluid bg-white mt-5">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class="h-font fw-bold fs-3 mb-2">
        TUNBOOKING 
      </h3>
      <p>
      TUNBOOKING 
      </p>
    </div>
    <div class="col-lg-4 p-4 ">
      <h5 class="mb-3">Links</h5>
      <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br>
      <a href="hotels.php" class="d-inline-block mb-2 text-dark text-decoration-none">Hotels</a> <br>
      <a href="contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a> <br>
      <a href="about.php" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
    </div>
    <div class="col-lg-4 p-4 ">
      <h5 class="mb-3">Follow Us</h5>
      <a href="www.twitter.com" class="d-inline-block mb-3">
        <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-twitter me-1"></i> Twitter
        </span>
      </a>
      <br>
      <a href="www.facebook.com" class="d-inline-block mb-3">
        <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-facebook me-1"></i> Facebook
        </span>
      </a>
      <br>
      <a href="www.instagram.com" class="d-inline-block">
        <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-instagram me-1"></i> Instagram
        </span>
      </a>
    </div>
  </div>
</div>

<h6 class="text-center bg-dark text-white p-3 m-0">Designed and Developed by Mehdi Boukattaya</h6>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
  function alert(type,msg,position='body')
  {
    let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
    let element = document.createElement('div');
    element.innerHTML = `
      <div class="alert ${bs_class} alert-dismissible fade show" role="alert">
        <strong class="me-3">Success</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    `;

    if(position=='body'){
      document.body.append(element);
      element.classList.add('custom-alert');
    }
    else{
      document.getElementById(position).appendChild(element);
    }
    setTimeout(remAlert, 3000);
  }

  function remAlert(){
    document.getElementsByClassName('alert')[0].remove();
  }


</script>