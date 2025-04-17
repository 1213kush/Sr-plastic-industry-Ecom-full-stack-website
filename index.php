<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php'; ?>

<body>
<?php include 'include/header.php'; ?>
<!-- Banner Section -->
<section class="hero">
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-inner">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="overlay"></div>
        <img src="assets/images/banner/WhatsApp Image 2025-04-06 at 13.55.12_37daded9.jpg" class="d-block w-100" alt="High-Quality Plastic Products">
        <div class="carousel-caption caption-top">
          <h2 class="animate__animated animate__fadeInDown">Leading Supplier of High-Quality Plastic Products</h2>
          <p class="animate__animated animate__fadeInUp">Durable and eco-friendly solutions for all industries.</p>
          <a href="products.php" class="btn btn-primary">Explore Products</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="overlay"></div>
        <img src="assets/images/team/IMG-20250412-WA0062.jpg" class="d-block w-100" alt="Sustainable Plastic Solutions">
        <div class="carousel-caption caption-top">
          <h2 class="animate__animated animate__fadeInDown">PVC Pipes that make safe of your homes and industry</h2>
          <p class="animate__animated animate__fadeInUp">Sustainability with advanced production technology.</p>
          <a href="blog.php" class="btn btn-primary">Learn More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="overlay"></div>
        <img src="assets/images/team/IMG-20250412-WA0017.jpg" class="d-block w-100" alt="Trusted Plastic Manufacturer">
        <div class="carousel-caption caption-top">
          <h2 class="animate__animated animate__fadeInDown">Your Trusted Partner for Reliable Plastic Products</h2>
          <p class="animate__animated animate__fadeInUp">Quality and precision for your plastic needs.</p>
          <a href="contact-us.php" class="btn btn-primary">Get in Touch</a>
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="carousel-item">
        <div class="overlay"></div>
        <img src="assets/images/team/IMG-20250412-WA0056.jpg" class="d-block w-100" alt="Affordable Solutions">
        <div class="carousel-caption caption-top">
          <h2 class="animate__animated animate__fadeInDown">Affordable & Custom Plastic Solutions</h2>
          <p class="animate__animated animate__fadeInUp">Tailored designs for every requirement</p>
          <a href="contact-us.php" class="btn btn-primary">Customize Now</a>
        </div>
      </div>

      <!-- Slide 5 -->
      <div class="carousel-item">
        <div class="overlay"></div>
        <img src="assets/images/team/IMG-20250412-WA0057.jpg" class="d-block w-100" alt="Premium Plastic">
        <div class="carousel-caption caption-top">
          <h2 class="animate__animated animate__fadeInDown">Premium Grade Plastic for Every Industry</h2>
          <p class="animate__animated animate__fadeInUp">Trusted by top manufacturers globally.</p>
          <a href="products.php" class="btn btn-primary">See Solutions</a>
        </div>
      </div>

      <!-- Slide 6 -->
      <div class="carousel-item">
        <div class="overlay"></div>
        <img src="assets/images/product1/india-injection-molded-plastic-market.png" class="d-block w-100" alt="Innovative Engineering">
        <div class="carousel-caption caption-top">
          <h2 class="animate__animated animate__fadeInDown">Engineering Innovation Through Plastic</h2>
          <p class="animate__animated animate__fadeInUp">Innovative tech for modern demands.</p>
          <a href="career.php" class="btn btn-primary">Innovate With Us</a>
        </div>
      </div>

    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    
    <!-- Carousel Indicators - In correct position for Bootstrap 5 -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="4" aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="5" aria-label="Slide 6"></button>
    </div>
  </div>

  <!-- Animation CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Products Section -->
<section class="featured-products py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="font-weight-bold" style="color: #e63946; font-size: 2.5rem; text-transform: uppercase;">Our Products</h2>
            <div class="separator mx-auto"></div>
            <p class="lead text-muted">High-quality plastic solutions tailored to meet all your needs</p>
        </div>
        
        <div class="row g-4">
            <!-- Product 1 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-badge">Premium</div>
                    <div class="product-tumb">
                        <img src="assets/images/banner/WhatsApp Image 2025-04-06 at 13.55.12_37daded9.jpg" alt="SR Polyplast">
                    </div>
                    <div class="product-details">
                        <h4><a href="#">SR Polyplast</a></h4>
                        <p>Top-quality plastic materials for both industrial and household applications.</p>
                        <div class="product-bottom-details">
<a href="#" class="btn btn-enquire" onclick="openBookingModal(1)">Book Now</a>
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
                        <p>Advanced PVC materials, available in various sizes of reducers for versatile applications.</p>
                        <div class="product-bottom-details">
<a href="#" class="btn btn-enquire" onclick="openBookingModal(2)">Book Now</a>
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
                        <p>Durable, long-lasting PVC elbows in a range of sizes.</p>
                        <div class="product-bottom-details">
<a href="#" class="btn btn-enquire" onclick="openBookingModal(3)">Book Now</a>
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
                        <p>High-quality, durable plastic materials for tank fittings, available in all shapes and sizes.</p>
                        <div class="product-bottom-details">
<a href="#" class="btn btn-enquire" onclick="openBookingModal(4)">Book Now</a>
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
                        <p>Top-grade PVC pipes suitable for plumbing and construction applications.</p>
                        <div class="product-bottom-details">
                            <a href="#" class="btn btn-enquire" onclick="openBookingModal(5)">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 6 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-badge bestseller">Best Seller</div>
                    <div class="product-tumb">
                        <img src="assets/images/others/FOAMCORE.jpg" alt="HDPE Pipes">
                    </div>
                    <div class="product-details">
                        <h4><a href="#">PVC Foamcore</a></h4>
                        <p>Durable PVC foamcore available in various sizes.</p>
                        <div class="product-bottom-details">
<a href="#" class="btn btn-enquire" onclick="openBookingModal(6)">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 7 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-tumb">
                        <img src="assets/images/others/cpvc.jpg" alt="PP Pipes">
                    </div>
                    <div class="product-details">
                        <h4><a href="#">CPVC Pipes</a></h4>
                        <p>Cold-resistant CPVC pipes for various applications.</p>
                        <div class="product-bottom-details">
<a href="#" class="btn btn-enquire" onclick="openBookingModal(7)">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 8 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-tumb">
                        <img src="assets/images/npm/WhatsApp 2.jpg" alt="Plastic Sheets">
                    </div>
                    <div class="product-details">
                        <h4><a href="#">uPVC Drainage Material</a></h4>
                        <p>uPVC underground drainage system designed for durability and efficiency.</p>
                        <div class="product-bottom-details">
<a href="#" class="btn btn-enquire" onclick="openBookingModal(8)">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 9 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-tumb">
                        <img src="assets/images/others/FOAMCORE.jpg" alt="Plastic Containers">
                    </div>
                    <div class="product-details">
                        <h4><a href="#">PVC Pipes</a></h4>
                        <p>Durable and long-lasting PVC pipes for a variety of applications.</p>
                        <div class="product-bottom-details">
                            <a href="#" class="btn btn-enquire" onclick="openBookingModal(9)">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 10 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-badge">Eco</div>
                    <div class="product-tumb">
                        <img src="assets/images/npm/WhatsApp 4.jpg" alt="Recycled Products">
                    </div>
                    <div class="product-details">
                        <h4><a href="#">Cold Water Pipe</a></h4>
                        <p>Environmentally friendly cold-water plumbing system designed with health in mind.</p>
                        <div class="product-bottom-details">
<a href="#" class="btn btn-enquire" onclick="openBookingModal(10)">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 11 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-tumb">
                        <img src="assets/images/npm/WhatsApp Image 2025-04-12 at 14.16.27_9afefbea.jpg" alt="Custom Molding">
                    </div>
                    <div class="product-details">
                        <h4><a href="#">Plastic Electrical Boards</a></h4>
                        <p>Designed with advanced engineering concepts for hazard-proof applications.</p>
                        <div class="product-bottom-details">
<a href="#" class="btn btn-enquire" onclick="openBookingModal(11)">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 12 -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-tumb">
                        <img src="assets/images/npm/WhatsApp Image 2025-04-12 at 14.20.24_8f7ba426.jpg" alt="Industrial Parts">
                    </div>
                    <div class="product-details">
                        <h4><a href="#">Low Drainage System</a></h4>
                        <p>Precision-engineered plastic parts for a high-performance drainage system.</p>
                        <div class="product-bottom-details">
<a href="#" class="btn btn-enquire" onclick="openBookingModal(12)">Book Now</a>
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
        font-size: 0.8rem;
        font-weight: 600;
        border-radius: 20px;
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

<!-- Booking Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookingModalLabel">Book Your Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="bookingForm" action="submit_service.php" method="POST" novalidate>
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your full name" required>
                        <div class="invalid-feedback">Please enter your full name.</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email address" required>
                        <div class="invalid-feedback">Please enter a valid email address.</div>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" name="phone" placeholder="Enter your phone number" required>
                        <div class="invalid-feedback">Please enter your phone number.</div>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" name="address" rows="2" placeholder="Enter your address" required></textarea>
                        <div class="invalid-feedback">Please provide your address.</div>
                    </div>
                    <div class="mb-3">
                        <label for="service" class="form-label">Select Service</label>
                        <select class="form-select" name="service" required>
                            <option value="">Choose a Service</option>
                            <option value="custom-molding">Custom Plastic Molding</option>
                            <option value="packaging">Plastic Packaging Solutions</option>
                            <option value="containers">Plastic Containers Manufacturing</option>
                        </select>
                        <div class="invalid-feedback">Please select a service.</div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea class="form-control" name="message" rows="3" placeholder="Enter any additional details or requirements" required></textarea>
                        <div class="invalid-feedback">Please provide a message or additional details.</div>
                    </div>
                    <div class="mb-3">
                        <label for="file" class="form-label">Upload a Photo (Optional)</label>
                        <input type="file" class="form-control" name="file">
                    </div>
                    <div class="mb-3">
                        <label for="preferred-date" class="form-label">Preferred Date</label>
                        <input type="date" class="form-control" name="preferred_date" required>
                        <div class="invalid-feedback">Please select a preferred date.</div>
                    </div>
                    <div class="mb-3">
                        <label for="time-slot" class="form-label">Preferred Time Slot</label>
                        <select class="form-select" name="time_slot" required>
                            <option value="">Choose a Time Slot</option>
                            <option value="morning">Morning (9 AM - 12 PM)</option>
                            <option value="afternoon">Afternoon (12 PM - 3 PM)</option>
                            <option value="evening">Evening (3 PM - 6 PM)</option>
                        </select>
                        <div class="invalid-feedback">Please select a preferred time slot.</div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit Booking</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Why SR Plastic Section -->
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .why-container {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
    color: #fff;
    line-height: 1.6;
    padding: 60px 20px;
  }

  .why-section-title {
    text-align: center;
    font-size: 36px;
    margin-bottom: 40px;
    color: #00bcd4;
    position: relative;
  }

  .why-section-title::after {
    content: '';
    height: 3px;
    width: 80px;
    background: #00bcd4;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: -10px;
  }

  .why-features {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
  }

  .why-feature-box {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.15);
    padding: 25px;
    border-radius: 15px;
    transition: all 0.3s ease;
    text-align: center;
  }

  .why-feature-box:hover {
    transform: translateY(-8px);
    border-color: #00bcd4;
    box-shadow: 0 10px 20px rgba(0, 188, 212, 0.2);
  }

  .why-feature-box i {
    font-size: 36px;
    color: #00bcd4;
    margin-bottom: 15px;
  }

  .why-feature-box h3 {
    font-size: 20px;
    margin-bottom: 10px;
    color: #fff;
  }

  .why-feature-box p {
    font-size: 15px;
    color: #ccc;
  }

  @media (max-width: 768px) {
    .why-section-title {
      font-size: 28px;
    }

    .why-feature-box {
      padding: 20px;
    }
  }
</style>

<section class="why-container">
  <div class="container">
    <h1 class="why-section-title">Why SR Plastic?</h1>

    <div class="why-features">
      <div class="why-feature-box">
        <i class="fas fa-industry"></i>
        <h3>15+ Years Experience</h3>
        <p>Trusted and proven expertise in plastic manufacturing with a long-standing reputation.</p>
      </div>

      <div class="why-feature-box">
        <i class="fas fa-certificate"></i>
        <h3>ISO-Certified Facility</h3>
        <p>We follow international standards for quality, safety, and environmental responsibility.</p>
      </div>

      <div class="why-feature-box">
        <i class="fas fa-shipping-fast"></i>
        <h3>Timely Delivery</h3>
        <p>Our streamlined logistics ensure your products are delivered on time, every time.</p>
      </div>

      <div class="why-feature-box">
        <i class="fas fa-rupee-sign"></i>
        <h3>Competitive Pricing</h3>
        <p>High-quality plastic solutions at affordable prices without compromising on standards.</p>
      </div>

      <div class="why-feature-box">
        <i class="fas fa-recycle"></i>
        <h3>Eco-Friendly Production</h3>
        <p>Committed to sustainability through recyclable materials and clean processes.</p>
      </div>

      <div class="why-feature-box">
        <i class="fas fa-users-cog"></i>
        <h3>Custom Manufacturing</h3>
        <p>We create tailored plastic solutions to meet your specific industrial or commercial needs.</p>
      </div>
    </div>
  </div>
</section>

<!-- Enhanced CEO Section - Creative Design -->
<section class="ceo-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="ceo-image-wrapper position-relative">
                    <img src="assets/images/logo/x1.jpg" alt="Founder & CEO" class="img-fluid rounded shadow-lg" onerror="this.src='https://via.placeholder.com/300x350?text=CEO'">
                    <div class="ceo-tag position-absolute">SR Plastic</div>
                    <div class="ceo-overlay position-absolute d-flex align-items-center justify-content-center">
                        <div class="ceo-overlay-content text-center">
                            <h5 class="text-white">Er. Subash Ranjan</h5>
                            <p class="text-white-50">Founder & CEO</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ceo-content">
                    <h3 class="section-heading mb-4">Message From Our Founder</h3>
                    <div class="quote-box mb-4">
                        <p>"At SR plastic , we engineer more than just plastic products - we create sustainable solutions that transform industries. Our dedication to innovation, quality, and environmental responsibility has driven our success for over a decade."</p>
                    </div>
                    <div class="ceo-info">
                        <h4>Er. Subash Ranjan</h4>
                        <p class="text-muted">Founder & Chief Executive Officer</p>
                        <p class="ceo-brief">With over 8+ years in plastic manufacturing, Subash has transformed SR Polyplast into an industry leader with a vision for sustainable solutions.</p>
                        <div class="credentials mt-3">
                            <span class="credential"><i class="fas fa-graduation-cap"></i> B.Tech(ME), MDU</span>
                            <span class="credential"><i class="fas fa-certificate"></i> Certified Polymer Specialist</span>
                        </div>
                        <div class="ceo-social mt-4">
                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="fab fa-linkedin"></i> Connect</a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-envelope"></i> Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .ceo-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 50px 0;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .ceo-image-wrapper {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
    }

    .ceo-image-wrapper img {
        transition: transform 0.3s ease;
    }

    .ceo-image-wrapper:hover img {
        transform: scale(1.1);
    }

    .ceo-tag {
        bottom: 15px;
        left: 15px;
        background: #e63946;
        color: white;
        padding: 5px 15px;
        font-size: 0.9rem;
        font-weight: 600;
        border-radius: 20px;
    }

    .ceo-overlay {
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .ceo-image-wrapper:hover .ceo-overlay {
        opacity: 1;
    }

    .ceo-overlay-content {
        color: white;
    }

    .quote-box {
        background: white;
        padding: 20px 25px;
        border-left: 5px solid #e63946;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        font-style: italic;
    }

    .quote-box p {
        margin-bottom: 0;
        color: #333;
        font-size: 1.1rem;
        line-height: 1.8;
    }

    .ceo-info h4 {
        color: #1d3557;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .ceo-brief {
        font-size: 1rem;
        margin-top: 10px;
        color: #6c757d;
    }

    .credential {
        display: inline-block;
        background: #f1faee;
        color: #1d3557;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 0.85rem;
        margin-right: 10px;
        margin-top: 10px;
        border: 1px solid #a8dadc;
    }

    .credential i {
        color: #457b9d;
        margin-right: 5px;
    }

    .ceo-social a {
        display: inline-block;
        padding: 8px 20px;
        border-radius: 5px;
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }

    .ceo-social a.btn-primary {
        background: #1d3557;
        color: white;
        border: none;
    }

    .ceo-social a.btn-primary:hover {
        background: #457b9d;
    }

    .ceo-social a.btn-danger {
        background: #e63946;
        color: white;
        border: none;
    }

    .ceo-social a.btn-danger:hover {
        background: #c1121f;
    }
</style>

<!-- Simplified Team Section with Single Member -->
<section class="team-section py-4 bg-light">
    <div class="container">
        <div class="text-center mb-4">
            <h3 class="section-heading">Meet Our Expert</h3>
            <p class="text-muted">The professional behind our operations</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
            <div class="team-card">
                <div class="team-img-wrapper">
                <img src="assets\images\npm\m2.jpg" alt="Human Resources Manager & General Manager" class="img-fluid rounded-circle">
                <div class="team-overlay">
                    <div class="team-social">
                    <a href="https://www.linkedin.com/in/dr-priti-verma" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="mailto:priti.verma@example.com"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
                </div>
                <div class="team-info">
                <h4 class="text-primary">Dr. Priti Verma</h4>
                <p class="text-danger fw-bold">Human Resources Manager & General Manager</p>
                <p class="text-muted">Dr. Priti Verma, a PhD holder, oversees all operations at SR Polyplast, ensuring excellence in every aspect of the organization.</p>
                <blockquote class="blockquote text-center">
                    <p class="mb-0" style="font-style: italic; color: #6c757d;">"Empowering people is the key to organizational success."</p>
                </blockquote>
                <div class="mt-3">
                    <a href="https://www.linkedin.com/in/dr-priti-verma" class="btn btn-sm btn-outline-primary me-2" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a>
                    <a href="mailto:priti.verma@example.com" class="btn btn-sm btn-outline-danger"><i class="fas fa-envelope"></i> Email</a>
                </div>
                </div>
            </div>
            </div>
        </div>

    <style>
        .team-card {
        background: linear-gradient(135deg, #ffffff, #f8f9fa);
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .team-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        }

        .team-img-wrapper {
        position: relative;
        overflow: hidden;
        border-bottom: 5px solid #e63946;
        }

        .team-img-wrapper img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease;
        }

        .team-img-wrapper:hover img {
        transform: scale(1.1);
        }

        .team-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        opacity: 0;
        transition: opacity 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        }

        .team-img-wrapper:hover .team-overlay {
        opacity: 1;
        }

        .team-social a {
        color: white;
        background: rgba(255, 255, 255, 0.2);
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        border-radius: 50%;
        margin: 0 5px;
        transition: all 0.3s ease;
        }

        .team-social a:hover {
        background: #e63946;
        transform: scale(1.2);
        }

        .team-info {
        padding: 20px;
        text-align: center;
        }

        .team-info h4 {
        font-size: 1.5rem;
        font-weight: bold;
        }

        .blockquote {
        border-left: 4px solid #e63946;
        padding-left: 15px;
        margin-top: 15px;
        }
    </style>
    </div>
</section>

<!-- Updated CSS Styles -->
<style>
    /* CEO Section Styles */
    .ceo-section {
        background: #f8f9fa;
        padding: 30px 0;
        margin: 20px 0;
    }

    .section-heading {
        color: #1d3557;
        font-weight: 600;
        position: relative;
        display: inline-block;
    }

    .section-heading:after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 60px;
        height: 3px;
        background: #e63946;
    }

    .ceo-image-wrapper {
        position: relative;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        border-radius: 8px;
        overflow: hidden;
    }

    .ceo-tag {
        position: absolute;
        bottom: 15px;
        left: 0;
        background: #e63946;
        color: white;
        padding: 5px 10px;
        font-size: 0.9rem;
        font-weight: 600;
    }

    .quote-box {
        background: white;
        padding: 15px 20px;
        border-left: 3px solid #e63946;
        border-radius: 5px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        font-style: italic;
    }

    .quote-box p {
        margin-bottom: 0;
        color: #333;
        font-size: 1rem;
        line-height: 1.6;
    }

    .ceo-info h4 {
        color: #1d3557;
        font-weight: 600;
        margin-bottom: 0;
    }

    .ceo-brief {
        font-size: 0.95rem;
        margin-top: 10px;
    }

    .credential {
        display: inline-block;
        background: #f1faee;
        color: #1d3557;
        padding: 4px 10px;
        border-radius: 20px;
        font-size: 0.8rem;
        margin-right: 10px;
        margin-top: 10px;
        border: 1px solid #a8dadc;
    }

    .credential i {
        color: #457b9d;
        margin-right: 5px;
    }

    /* Team Section Styles */
    .team-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 30px 0;
    }

    .team-card {
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        transition: transform 0.3s ease;
    }

    .team-card:hover {
        transform: translateY(-5px);
    }

    .team-img-wrapper {
        position: relative;
        overflow: hidden;
    }

    .team-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(29, 53, 87, 0.7);
        opacity: 0;
        transition: opacity 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .team-img-wrapper:hover .team-overlay {
        opacity: 1;
    }

    .team-social a {
        display: inline-block;
        color: white;
        background: rgba(255,255,255,0.2);
        width: 35px;
        height: 35px;
        line-height: 35px;
        text-align: center;
        border-radius: 50%;
        margin: 0 5px;
        transition: all 0.3s;
    }

    .team-social a:hover {
        background: #e63946;
        transform: scale(1.1);
    }

    .team-info {
        padding: 15px;
        text-align: center;
    }

    .team-info h4 {
        color: #1d3557;
        font-weight: 600;
        margin-bottom: 5px;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .ceo-section, .team-section {
            text-align: center;
        }
        
        .section-heading:after {
            left: 50%;
            transform: translateX(-50%);
        }
        
        .quote-box {
            text-align: left;
        }
        
        .ceo-image-wrapper {
            max-width: 250px;
            margin: 0 auto;
        }
    }
</style>

<?php include 'include/footer.php'; ?>
<?php include 'include/booking_modal_new.php'; ?>
</body>
<script>
    (function () {
        'use strict'

        var forms = document.querySelectorAll('.needs-validation');

        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();

                    // Scroll to the first invalid element
                    var firstInvalid = form.querySelector(':invalid');
                    if (firstInvalid) {
                        firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                }

                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>
</html>


