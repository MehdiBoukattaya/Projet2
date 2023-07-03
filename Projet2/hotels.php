<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('inc/links.php'); ?>
  <title>TUNBOOKING - Hotels</title>
</head>
<body class="bg-light">

  <?php require('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR HOTELS</h2>
    <div class="h-line bg-dark"></div>
    
  </div>

  <div class="container">
    <div class="row">
      <!--Filters-->
        <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 ps-4">
            <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                <div class="container-fluid flex-lg-column align-items-stretch">
                    <h4 class="mt-2">FILTERS</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3">CHECK AVAILABILTY</h5>
                                <label class="form-label">Check-in</label>
                                <input type="date" class="form-control shadow-none" >
                                <label class="form-label">Check-out</label>
                                <input type="date" class="form-control shadow-none" >
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3">RATINGS</h5>
                                <div class="btn-toolbar mb-3 d-flex justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-2" role="group" aria-label="First group">
                                      <button type="button" class="btn btn-outline-secondary">1</button>
                                      <button type="button" class="btn btn-outline-secondary">2</button>
                                      <button type="button" class="btn btn-outline-secondary">3</button>
                                      <button type="button" class="btn btn-outline-secondary">4</button>
                                      <button type="button" class="btn btn-outline-secondary">5</button>
                                    </div>
                                </div>
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3">HOTEL CHAINS</h5>
                                <div class="mb-2 ">                       
                                  <input type="checkbox" id="ch1" class="form-check-input shadow-none me-1" >
                                  <label class="form-check-label" for="ch11">SereniStays</label>
                                </div>
                                <div class="mb-2 ">                       
                                  <input type="checkbox" id="ch1" class="form-check-input shadow-none me-1" >
                                  <label class="form-check-label" for="ch11">Siestoria</label>
                                </div>
                                    <div class="mb-2 ">                       
                                    <input type="checkbox" id="ch1" class="form-check-input shadow-none me-1" >
                                    <label class="form-check-label" for="ch11">HarmonySuites</label>
                                    </div>

                                
                            </div>
                            
                        </div>
                        
                </div>
            </nav>
        </div>
      <!--HotelCard-->
        <div class="col-lg-9 col-md-12 px-4">
          <!--Hotel1-->
          <div class="card mb-4 border-0 shadow" >
              <div class="row g-0 p-3 align-items-center">
                  <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                      <img src="images/hotels/1.jpg" class="img-fluid rounded">
                  </div>
                  <div class="col-md-5 px-lg-3 px-md-3 px-0">
                      <h5 class="mb-3">Hotel1</h5>
                      <div class="hotelchain mb-3">
                          <div class="row">
                              <div class="col-auto">
                                  <h6 class="d-inline mb-1">Hotel Chain</h6>
                                  <span class="badge rounded-pill bg-light text-dark text-wrap ms-2">Siestoria</span>
                              </div>
                          </div>
                      </div>
                      <div class="rating mb-3">
                          <div class="row">
                              <div class="col-auto">
                                  <h6 class="d-inline mb-1">Rating</h6>
                              </div>
                              <div class="col">
                                  <span class="badge rounded-pill bg-light">
                                      <i class="bi bi-star-fill text-warning"></i>
                                      <i class="bi bi-star-fill text-warning"></i>
                                      <i class="bi bi-star-fill text-warning"></i>
                                      <i class="bi bi-star-fill text-warning"></i>
                                  </span>
                              </div>
                          </div>
                      </div>
                      <div class="Address mb-3">
                          <div class="row">
                              <div class="col-auto">
                                  <h6 class="d-inline mb-1">Address</h6>
                              </div>
                              <div class="col">
                                  <span class="badge rounded-pill bg-light text-dark text-wrap">Downtown, Ottawa, ON</span>
                              </div>
                          </div>
                      </div>
                      <div class="Contact mb-3">
                          <div class="row">
                              <div class="col-auto">
                                  <h6 class="d-inline mb-1">Contact</h6>
                              </div>
                              <div class="col">
                                  <div class="row">
                                      <div class="col">
                                          <span class="badge rounded-pill bg-light text-dark text-wrap">Email: hotel1@Siestoria.ca </span>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col">
                                          <span class="badge rounded-pill bg-light text-dark text-wrap">Phone Number: (819) 123-4567</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center ">
                      <a href="rooms.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                  </div>
              </div>
          </div>
          <!--Hotel2-->
          <div class="card mb-4 border-0 shadow">
              <div class="row g-0 p-3 align-items-center">
                  <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                      <img src="images/hotels/2.jpg" class="img-fluid rounded">
                  </div>
                  <div class="col-md-5 px-lg-3 px-md-3 px-0">
                      <h5 class="mb-3">Hotel2</h5>
                      <div class="hotelchain mb-3">
                          <div class="row">
                              <div class="col-auto">
                                  <h6 class="d-inline mb-1">Hotel Chain</h6>
                                  <span class="badge rounded-pill bg-light text-dark text-wrap ms-2">HarmonySuites</span>
                              </div>
                          </div>
                      </div>
                      <div class="rating mb-3">
                          <div class="row">
                              <div class="col-auto">
                                  <h6 class="d-inline mb-1">Rating</h6>
                              </div>
                              <div class="col">
                                  <span class="badge rounded-pill bg-light">
                                      <i class="bi bi-star-fill text-warning"></i>
                                      <i class="bi bi-star-fill text-warning"></i>
                                      <i class="bi bi-star-fill text-warning"></i>
                                      <i class="bi bi-star-fill text-warning"></i>
                                      <i class="bi bi-star-fill text-warning"></i>
                                  </span>
                              </div>
                          </div>
                      </div>
                      <div class="Address mb-3">
                          <div class="row">
                              <div class="col-auto">
                                  <h6 class="d-inline mb-1">Address</h6>
                              </div>
                              <div class="col">
                                  <span class="badge rounded-pill bg-light text-dark text-wrap">Downtown, Ottawa, ON</span>
                              </div>
                          </div>
                      </div>
                      <div class="Contact mb-3">
                          <div class="row">
                              <div class="col-auto">
                                  <h6 class="d-inline mb-1">Contact</h6>
                              </div>
                              <div class="col">
                                  <div class="row">
                                      <div class="col">
                                          <span class="badge rounded-pill bg-light text-dark text-wrap">Email: hotel1@HarmonySuites.ca </span>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col">
                                          <span class="badge rounded-pill bg-light text-dark text-wrap">Phone Number: (819) 123-4967</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                      <a href="rooms.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                  </div>
              </div>
          </div>
        </div>

  </div>

  <?php require('inc/footer.php'); ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
  $(document).ready(function() {
    $('.btn-group .btn').on('click', function() {
      $('.btn-group .btn').removeClass('active');
      $(this).addClass('active');
    });
  });
  </script>
</body>
</html>