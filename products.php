<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php'; ?>
<?php include 'include/header.php'; ?>

<body>
<!-- Hero Banner Carousel -->
<section class="hero">
  <div id="productsCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="overlay"></div>
        <img src="assets\images\banner\1ksFoJq6t4Qou0b8Mm6izig.png" class="d-block w-100" alt="Premium Plastic Products">
        <div class="carousel-caption caption-top animate__animated animate__fadeInDown">
          <h2>Premium Quality Plastic Products</h2>
          <p class="animate__animated animate__fadeInUp">Durable and eco-friendly solutions for all industries</p>
          <a href="#products" class="btn btn-primary animate__animated animate__fadeIn">Explore Now</a>
        </div>
      </div>
      
      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="overlay"></div>
        <img src="assets\images\banner\WhatsApp Image 2025-04-06 at 13.55.12_37daded9.jpg" class="d-block w-100" alt="Industrial Plastic Solutions">
        <div class="carousel-caption caption-top animate__animated animate__fadeInDown">
          <h2>Industrial Plastic Solutions</h2>
          <p class="animate__animated animate__fadeInUp">Custom solutions for your business needs</p>
          <a href="#products" class="btn btn-primary animate__animated animate__fadeIn">View Products</a>
        </div>
      </div>
      
      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="overlay"></div>
        <img src="assets\images\others\FOAMCORE.jpg" class="d-block w-100" alt="Eco-Friendly Materials">
        <div class="carousel-caption caption-top animate__animated animate__fadeInDown">
          <h2>Eco-Friendly Materials</h2>
          <p class="animate__animated animate__fadeInUp">Sustainable plastic solutions for a greener future</p>
          <a href="#products" class="btn btn-primary animate__animated animate__fadeIn">Learn More</a>
        </div>
      </div>
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#productsCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#productsCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Breadcrumb Navigation -->
  <div class="breadcrumb-container">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
          <li class="breadcrumb-item active text-white" aria-current="page">Products</li>
        </ol>
      </nav>
    </div>
  </div>
</section>

<!-- Carousel Styles -->
<style>
  .hero {
    position: relative;
  }
  
  .carousel-item img {
    object-fit: cover;
    height: 70vh;
    min-height: 500px;
  }
  
  .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.4);
    z-index: 1;
  }
  
  .carousel-caption.caption-top {
    top: 50%;
    transform: translateY(-50%);
    bottom: auto;
    z-index: 2;
  }
  
  .carousel-caption h2 {
    font-size: 3rem;
    font-weight: bold;
    text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
  }
  
  .carousel-caption p {
    font-size: 1.5rem;
    margin: 20px 0;
  }
  
  .breadcrumb-container {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    z-index: 3;
    padding: 15px 0;
    background: rgba(0,0,0,0.3);
  }
  
  .breadcrumb {
    justify-content: center;
    margin-bottom: 0;
  }
  
  @media (max-width: 768px) {
    .carousel-caption h2 {
      font-size: 2rem;
    }
    
    .carousel-caption p {
      font-size: 1rem;
    }
    
    .carousel-item img {
      height: 60vh;
    }
  }
</style>

<!-- Animation CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<!-- Main Products Section -->
<section class="featured-products py-5" id="products">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="font-weight-bold" style="color: #e63946; font-size: 2.5rem; text-transform: uppercase;">Our Products</h2>
            <div class="separator mx-auto"></div>
            <p class="lead text-muted">High-quality plastic solutions for all your needs</p>
        </div>
        
        <!-- Product Rows -->
        <div class="row product-row">
            <!-- Product 1 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-badge">Premium</div>
                    <div class="product-tumb">
                        <img src="assets/images/banner/WhatsApp Image 2025-04-06 at 13.55.12_37daded9.jpg" alt="SR Polyplast">
                    </div>
                    <div class="product-details">
                        <h4><a href="#">SR Polyplast</a></h4>
                        <p>High-quality plastic materials for industrial and household applications.</p>
                        <div class="product-bottom-details">
                            <a href="#" class="btn btn-enquire" data-bs-toggle="modal" data-bs-target="#bookingModal" data-product="SR Polyplast">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 2 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-tumb">
                        <img src="assets/images/product1/PVC Reducer.jpg" alt="PolyTech">
                    </div>
                    <div class="product-details">
                        <h4><a href="#">PVC Reducer</a></h4>
                        <p>Advanced PVC Materials Manufactured with all size of Reducer</p>
                        <div class="product-bottom-details">
                            <a href="#" class="btn btn-enquire" data-bs-toggle="modal" data-bs-target="#bookingModal" data-product="PVC Reducer">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 3 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-badge">New</div>
                    <div class="product-tumb">
                        <img src="assets/images/product1/PVC Elbow.jpg" alt="Plasto">
                    </div>
                    <div class="product-details">
                        <h4><a href="#">PVC Elbow</a></h4>
                        <p>Durable and long lasting with all sizes.</p>
                        <div class="product-bottom-details">
                            <a href="#" class="btn btn-enquire" data-bs-toggle="modal" data-bs-target="#bookingModal" data-product="PVC Elbow">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 4 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-tumb">
                        <img src="assets/images/product1/tank_fiting_installation.jpg" alt="Superplast">
                    </div>
                    <div class="product-details">
                        <h4><a href="#">Tank Fitting Materials</a></h4>
                        <p>Superior quality plastic materials with enhanced durability in all shapes and sizes.</p>
                        <div class="product-bottom-details">
                            <a href="#" class="btn btn-enquire" data-bs-toggle="modal" data-bs-target="#bookingModal" data-product="Tank Fitting Materials">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 5 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-tumb">
                        <img src="assets/images/product1/Plastic_1.jpg" alt="PVC Pipes">
                    </div>
                    <div class="product-details">
                        <h4><a href="#">PVC Pipes</a></h4>
                        <p>High-quality PVC pipes for plumbing and construction.</p>
                        <div class="product-bottom-details">
                            <a href="#" class="btn btn-enquire" data-bs-toggle="modal" data-bs-target="#bookingModal" data-product="PVC Pipes">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 6 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-badge bestseller">Best Seller</div>
                    <div class="product-tumb">
                        <img src="assets/images/product1/images12.jpg" alt="HDPE Pipes">
                    </div>
                    <div class="product-details">
                        <h4><a href="#">PVC Storage Container</a></h4>
                        <p>Durable Plastic Storage Container available in all sizes.</p>
                        <div class="product-bottom-details">
                            <a href="#" class="btn btn-enquire" data-bs-toggle="modal" data-bs-target="#bookingModal" data-product="PVC Storage Container">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 7 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-tumb">
                        <img src="assets/images/product1/sustainability-12-10378-g001.png" alt="PP Pipes">
                    </div>
                    <div class="product-details">
                        <h4><a href="#">Liquid Container</a></h4>
                        <p>All types of storage capacity liquid containers.</p>
                        <div class="product-bottom-details">
                            <a href="#" class="btn btn-enquire" data-bs-toggle="modal" data-bs-target="#bookingModal" data-product="Liquid Container">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 8 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-tumb">
                        <img src="assets/images/product1/1000_F_283565027_ALGECoEsC8nlPUcZv0wbqFLFCNust9ht.jpg" alt="Plastic Sheets">
                    </div>
                    <div class="product-details">
                        <h4><a href="#">Plastic Cup</a></h4>
                        <p>Versatile plastic cup with eco-friendly solution.</p>
                        <div class="product-bottom-details">
                            <a href="#" class="btn btn-enquire" data-bs-toggle="modal" data-bs-target="#bookingModal" data-product="Plastic Cup">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row product-row">
            <!-- Product 9 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-tumb">
                        <img src="assets/images/others/FOAMCORE.jpg" alt="Plastic Containers">
                    </div>
                    <div class="product-details">
                        <h4><a href="#">PVC Pipes</a></h4>
                        <p>Very strong and long-lasting.</p>
                        <div class="product-bottom-details">
                            <a href="#" class="btn btn-enquire" data-bs-toggle="modal" data-bs-target="#bookingModal" data-product="PVC Pipes">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 10 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-badge">Eco</div>
                    <div class="product-tumb">
                        <img src="assets/images/product1/png-transparent-disposable-cup-plastic-plate-manufacturing-plate-glass-furniture-plate.png" alt="Recycled Products">
                    </div>
                    <div class="product-details">
                        <h4><a href="#">Recycled Products</a></h4>
                        <p>Environmentally friendly recycled plastic products.</p>
                        <div class="product-bottom-details">
                            <a href="#" class="btn btn-enquire" data-bs-toggle="modal" data-bs-target="#bookingModal" data-product="Recycled Products">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 11 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-tumb">
                        <img src="assets/images/others/cpvc.jpg" alt="Custom Molding">
                    </div>
                    <div class="product-details">
                        <h4><a href="#">PVC Agriculture Pipes</a></h4>
                        <p>Custom plastic molding services for specialized needs.</p>
                        <div class="product-bottom-details">
                            <a href="#" class="btn btn-enquire" data-bs-toggle="modal" data-bs-target="#bookingModal" data-product="PVC Agriculture Pipes">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 12 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-tumb">
                        <img src="assets/images/logo/transparent-water-bottle-outdoors.jpg" alt="Industrial Parts">
                    </div>
                    <div class="product-details">
                        <h4><a href="#">Premium Plastic Bottles</a></h4>
                        <p>Precision plastic parts for industrial machinery.</p>
                        <div class="product-bottom-details">
                            <a href="#" class="btn btn-enquire" data-bs-toggle="modal" data-bs-target="#bookingModal" data-product="Premium Plastic Bottles">Book Now</a>
                        </div>
                    </div>
                </div>
            </div> 

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-tumb">
                        <img src="assets\images\npm\WhatsApp Image 2025-04-12 at 14.20.24_8f7ba426.jpg" alt="Industrial Parts">
                    </div>
                    <div class="product-details">
                        <h4><a href="#">Low Drainage solutions</a></h4>
                        <p>Best and high qulaity pipes </p>
                        <div class="product-bottom-details">
                            <a href="#" class="btn btn-enquire" data-bs-toggle="modal" data-bs-target="#bookingModal" data-product="Premium Plastic Bottles">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-tumb">
                        <img src="assets\images\npm\m1.jpg" alt="Industrial Parts">
                    </div>
                    <div class="product-details">
                        <h4><a href="#">PVC JOINTS</a></h4>
                        <p>We provids Leaks proof Joints. with all types of Drain solutions</p>
                        <div class="product-bottom-details">
                            <a href="#" class="btn btn-enquire" data-bs-toggle="modal" data-bs-target="#bookingModal" data-product="Premium Plastic Bottles">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-tumb">
                        <img src="assets\images\others\cpvc.jpg" alt="Industrial Parts">
                    </div>
                    <div class="product-details">
                        <h4><a href="#">Premium cPVC Pipes</a></h4>
                        <p>All size of PVC are avilable . </p>
                        <div class="product-bottom-details">
                            <a href="#" class="btn btn-enquire" data-bs-toggle="modal" data-bs-target="#bookingModal" data-product="Premium Plastic Bottles">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-tumb">
                        <img src="assets\images\others\FOAMCORE.jpg" alt="Industrial Parts">
                    </div>
                    <div class="product-details">
                        <h4><a href="#">FOAMCORE PVC PIPES</a></h4>
                        <p>Precision PVC FOR DRAIN SOLUTIONS .</p>
                        <div class="product-bottom-details">
                            <a href="#" class="btn btn-enquire" data-bs-toggle="modal" data-bs-target="#bookingModal" data-product="Premium Plastic Bottles">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
</section>

<!-- Enhanced Product Card Styles -->
<style>
    .product-card {
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        margin-bottom: 30px;
        background: #fff;
        border-radius: 12px;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
        height: 100%;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .product-tumb {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 300px;
        padding: 20px;
        background: #f8f9fa;
        position: relative;
    }

    .product-tumb img {
        max-width: 100%;
        max-height: 280px;
        width: auto;
        height: auto;
        object-fit: contain;
        transition: all 0.5s ease;
    }

    .product-card:hover .product-tumb img {
        transform: scale(1.1);
    }

    .product-details {
        padding: 20px;
    }

    .product-details h4 a {
        font-weight: 600;
        color: #333;
        text-decoration: none;
    }

    .product-details p {
        color: #666;
        margin-bottom: 15px;
    }

    .product-bottom-details {
        border-top: 1px solid #eee;
        padding-top: 15px;
    }

    .btn-enquire {
        background: #e63946;
        color: white;
        border: none;
        padding: 8px 20px;
        border-radius: 5px;
        transition: all 0.3s;
    }

    .btn-enquire:hover {
        background: #c1121f;
    }

    .product-badge {
        position: absolute;
        top: 10px;
        right: 10px;
        background: #e63946;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 0.8rem;
        font-weight: bold;
        z-index: 1;
    }

    .product-badge.bestseller {
        background: #2a9d8f;
    }

    .separator {
        width: 80px;
        height: 3px;
        background: #e63946;
        margin: 15px auto;
    }

    @media (max-width: 992px) {
        .product-tumb {
            height: 250px;
        }
        
        .product-tumb img {
            max-height: 220px;
        }
    }

    @media (max-width: 768px) {
        .product-tumb {
            height: 220px;
        }
        
        .product-tumb img {
            max-height: 200px;
        }
    }
</style>

<!-- Enhanced Booking Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="bookingModalLabel">Product Enquiry Form</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <!-- Success Message Box -->
        <div class="success-message" id="successMessage">
          <div class="checkmark"></div>
          <h5 class="text-success">Thank you!</h5>
          <p>We've received your enquiry. We'll be in touch soon!</p>
        </div>

        <!-- Enquiry Form -->
<form id="productBookingForm" action="submit_product_enquiry.php" method="POST" novalidate>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="productName" class="form-label">Product</label>
              <input type="text" class="form-control" id="productName" name="productName" readonly>
            </div>
            <div class="col-md-6">
              <label for="quantity" class="form-label">Quantity Required</label>
              <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="col-md-6">
              <label for="company" class="form-label">Company Name (Optional)</label>
              <input type="text" class="form-control" id="company" name="company">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-md-6">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Delivery Address</label>
            <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Additional Requirements</label>
            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Preferred Contact Method</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="contactMethod" id="contactEmail" value="email" checked>
              <label class="form-check-label" for="contactEmail">Email</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="contactMethod" id="contactPhone" value="phone">
              <label class="form-check-label" for="contactPhone">Phone</label>
            </div>
          </div>
          <div class="mb-3">
            <label for="timeframe" class="form-label">Required Timeframe</label>
            <select class="form-select" id="timeframe" name="timeframe" required>
              <option value="" selected disabled>Select timeframe</option>
              <option value="urgent">Urgent (Within 1 week)</option>
              <option value="soon">Soon (1-2 weeks)</option>
              <option value="flexible">Flexible (2-4 weeks)</option>
              <option value="planning">Planning Phase (1+ month)</option>
            </select>
          </div>
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
            <label class="form-check-label" for="terms">I agree to the terms and conditions</label>
          </div>
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary btn-lg">Submit Enquiry</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>

<!-- Bootstrap & JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var bookingModal = document.getElementById('bookingModal');
    var bookingForm = document.getElementById('productBookingForm');
    var successMessage = document.getElementById('successMessage');

    if (bookingModal) {
      bookingModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var productName = button.getAttribute('data-product');
        var productInput = bookingModal.querySelector('#productName');
        if (productInput) productInput.value = productName;

        // Reset success message and show form again
        successMessage.style.display = 'none';
        bookingForm.style.display = 'block';
      });
    }

    if (bookingForm) {
      bookingForm.addEventListener('submit', function (event) {
        // Allow normal form submission to server
        // Remove event.preventDefault() and related code
        // Optionally, you can add client-side validation here if needed
      });
    }
  });
</script>

<?php include 'include/footer.php'; ?>
</body>
</html>
