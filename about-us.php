<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'include/head.php'; ?>
    <style>
        /* General Styles */
        .section-title {
            margin-bottom: 2rem;
        }
        
        .divider-img {
            width: 190px;
            margin: 0.5rem auto;
        }
        
        .fade-in-left {
            animation: fadeInLeft 1s ease-in-out;
        }
        
        .fade-in-right {
            animation: fadeInRight 1s ease-in-out;
        }
        
        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        /* Banner Styles */
        .about-breadcrumb-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(assets/images/products/image.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 340px;
            display: flex;
            align-items: end;
        }
        
        .about-breadcrumb-banner h1 {
            color: white;
            font-size: 2.5rem;
            font-weight: 600;
        }
        
        /* About Section Styles */
        .happy {
            background: linear-gradient(to right, #000000, #1a1a1a);
            color: var(--tertiary-color);
            padding: 100px 0;
        }
        
        .happy img {
            width: 100%;
            height: 100%;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }
        
        .happy img:hover {
            transform: scale(1.03);
        }
        
        .happy h2 {
            color: white;
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
        }
        
        qq {
            color: white;
            display: block;
            line-height: 1.8;
            font-size: 1.1rem;
        }
        
        /* Features Section */
        .feature-icon {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background-color: #f8f9fa;
            transition: all 0.3s ease;
            font-size: 28px;
            margin: 0 auto 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .feature-icon:hover {
            background-color: #132e49;
            color: white;
            transform: translateY(-5px);
        }
        
        /* Company History Timeline */
        .history-section {
            padding: 80px 0;
            background-color: #f9f9f9;
        }
        
        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: #132e49;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
            border-radius: 5px;
        }
        
        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }
        
        .timeline-item:nth-child(odd) {
            left: 0;
        }
        
        .timeline-item:nth-child(even) {
            left: 50%;
        }
        
        .timeline-content {
            padding: 20px 30px;
            background-color: white;
            position: relative;
            border-radius: 6px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .timeline-content:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }
        
        .timeline-item:nth-child(odd) .timeline-content {
            border-left: 4px solid #dc3545;
        }
        
        .timeline-item:nth-child(even) .timeline-content {
            border-right: 4px solid #dc3545;
        }
        
        .timeline-item:nth-child(odd) .timeline-content::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            right: -17px;
            background-color: white;
            border: 4px solid #dc3545;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }
        
        .timeline-item:nth-child(even) .timeline-content::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            left: -17px;
            background-color: white;
            border: 4px solid #dc3545;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }
        
        .timeline-year {
            color: #dc3545;
            font-weight: bold;
            font-size: 1.2rem;
        }
        
        .timeline-title {
            margin: 10px 0;
            color: #132e49;
            font-weight: 600;
        }
        
        .timeline-text {
            line-height: 1.6;
        }
        
        /* Manufacturing Process Section */
        .process-section {
            background: linear-gradient(rgba(19, 46, 73, 0.9), rgba(19, 46, 73, 0.9)), url('assets/images/background/process-bg.jpg');
            background-size: cover;
            background-position: center;
            padding: 80px 0;
            color: white;
        }
        
        .process-item {
            text-align: center;
            padding: 30px 20px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            height: 100%;
            backdrop-filter: blur(5px);
        }
        
        .process-item:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-10px);
        }
        
        .process-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #ffc107;
        }
        
        /* Team Section */
        .team-section {
            padding: 80px 0;
            background-color: #f5f5f5;
        }
        
        .team-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            margin-bottom: 30px;
            background-color: white;
        }
        
        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .team-img-container {
            overflow: hidden;
            height: 250px;
        }
        
        .team-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .team-card:hover .team-img {
            transform: scale(1.1);
        }
        
        .team-info {
            padding: 20px;
            text-align: center;
        }
        
        .team-name {
            font-weight: 600;
            color: #132e49;
            margin-bottom: 5px;
        }
        
        .team-role {
            color: #dc3545;
            font-style: italic;
            margin-bottom: 15px;
        }
        
        .team-social {
            margin-top: 15px;
        }
        
        .team-social a {
            display: inline-block;
            width: 36px;
            height: 36px;
            line-height: 36px;
            border-radius: 50%;
            background-color: #f8f9fa;
            color: #132e49;
            margin: 0 5px;
            transition: all 0.3s ease;
        }
        
        .team-social a:hover {
            background-color: #132e49;
            color: white;
        }
        
        /* Certifications Section */
        .certifications-section {
            padding: 80px 0;
        }
        
        .certification-item {
            text-align: center;
            padding: 30px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .certification-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .certification-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #132e49;
        }
        
        /* Booking Section */
        .booking-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 100px 20px;
            color: black;
            background-color: #f9f9f9;
            background-image: url('assets/images/background/pattern.png');
            background-size: cover;
            border-radius: 0;
        }
        
        .booking-section h1 {
            margin-bottom: 15px;
            font-size: 36px;
            font-weight: bold;
        }
        
        .booking-section p {
            font-size: 18px;
            max-width: 600px;
        }
        
        .booking-btn {
            margin-top: 20px;
            padding: 12px 25px;
            font-size: 20px;
            font-weight: bold;
            background: rgb(19, 46, 73);
            color: rgb(245, 247, 251);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .booking-btn:hover {
            background: rgb(19, 46, 73);
            color: #0a58ca;
        }
        
        .social-icons a {
            color: #132e49;
            transition: all 0.3s ease;
            display: inline-block;
            margin: 0 10px;
        }
        
        .social-icons a:hover {
            color: #dc3545;
            transform: translateY(-5px);
        }
        
        /* Responsive Media Queries */
        @media (max-width: 991px) {
            .timeline::after {
                left: 31px;
            }
            
            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }
            
            .timeline-item:nth-child(even) {
                left: 0;
            }
            
            .timeline-item:nth-child(odd) .timeline-content::after,
            .timeline-item:nth-child(even) .timeline-content::after {
                left: -15px;
            }
            
            .timeline-item:nth-child(odd) .timeline-content,
            .timeline-item:nth-child(even) .timeline-content {
                border-right: none;
                border-left: 4px solid #dc3545;
            }
        }
        
        @media (max-width: 768px) {
            .about-breadcrumb-banner {
                height: 250px;
            }
            
            .happy {
                padding: 60px 0;
            }
            
            .certification-item,
            .process-item {
                margin-bottom: 20px;
            }
            
            .timeline-item {
                padding-left: 60px;
            }
        }
    </style>
</head>
<?php include 'include/header.php'; ?>

<body>
    <!-- Banner Section -->
    <section class="about-breadcrumb-banner">
        <div class="container">
            <h1 class="breadcrumb-title text-white">About SR Plastic</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="py-5 happy about-us-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="assets/images/about/CoverImage6947a4c480004708958e984271f7aee31153.jpg" alt="SR Plastic Manufacturing Facility" class="img-fluid rounded shadow-lg">
                </div>
                <div class="col-md-6">
                    <div class="py-2">
                        <h2 class="text-gradient">Our Mission & Vision</h2>
                    </div>
                    <hr class="custom-divider" />
                    <p class="text-light">
                        At SR Plastic, our mission is to revolutionize the plastic manufacturing industry by delivering innovative, sustainable, and high-quality solutions that empower businesses worldwide. We envision a future where eco-friendly practices and cutting-edge technology drive progress, ensuring a greener planet for generations to come.
                    </p>
                    <div class="py-3">
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <i class="fas fa-bullseye me-2 text-success"></i> Commitment to Sustainability
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-lightbulb me-2 text-success"></i> Innovation at the Core
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-users me-2 text-success"></i> Customer-Centric Approach
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-award me-2 text-success"></i> Excellence in Craftsmanship
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-globe me-2 text-success"></i> Global Reach with Local Impact
                            </li>
                        </ul>
                    </div>
                    <div class="py-2">
                        <a href="mission.php" class="btn btn-primary mt-3 px-4 py-2">Learn More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .about-us-section {
            background: linear-gradient(to right, #1a1a1a, #333333);
            color: white;
            padding: 80px 20px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .about-us-section h2.text-gradient {
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 2.5rem;
            font-weight: bold;
        }

        .custom-divider {
            border: 0;
            height: 2px;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            margin: 20px 0;
        }

        .about-us-section p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #dcdcdc;
        }

        .about-us-section ul li {
            font-size: 1rem;
            display: flex;
            align-items: center;
        }

        .about-us-section ul li i {
            font-size: 1.5rem;
        }

        .about-us-section .btn-primary {
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            border: none;
            font-size: 1.1rem;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .about-us-section .btn-primary:hover {
            background: linear-gradient(to right, #feb47b, #ff7e5f);
            transform: scale(1.05);
        }

        .about-us-section img {
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .about-us-section img:hover {
            transform: scale(1.05);

            </style>

            <!-- Product Page Section -->
            <section class="product-page-section py-5">
                <div class="container text-center">
                    <h2 class="product-title">Our Products</h2>
                    <img src="assets\images\npm\WhatsApp 4.jpg" alt="Section Divider" class="divider-img">
                    <p class="lead">Explore our wide range of innovative and high-quality plastic products</p>
                    <div class="product-grid mt-4">
                        <div class="product-item">
                            <img src="assets\images\npm\WhatsApp 2.jpg" alt="Product 1" class="product-img">
                            <h5>Product 1</h5>
                            <p>Durable and eco-friendly plastic container</p>
                        </div>
                        <div class="product-item">
                            <img src="assets/images/products/product2.jpg" alt="Product 2" class="product-img">
                            <h5>Product 2</h5>
                            <p>Custom molded plastic solution</p>
                        </div>
                        <div class="product-item">
                            <img src="assets\images\npm\WhatsApp Image 2025-04-12 at 14.20.24_8f7ba426.jpg" alt="Product 3" class="product-img">
                            <h5>Product 3</h5>
                            <p>Innovative packaging for various industries</p>
                        </div>
                    </div>
                    <a href="products.php" class="btn btn-primary mt-4">View All Products</a>
                </div>
            </section>

            <style>
                .product-page-section {
                    background: linear-gradient(to right, #ffffff, #f9f9f9);
                    padding: 80px 20px;
                    position: relative;
                    overflow: hidden;
                }

                .product-title {
                    font-size: 2.5rem;
                    font-weight: bold;
                    color: #132e49;
                    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
                }

                .product-grid {
                    display: flex;
                    justify-content: center;
                    gap: 20px;
                    flex-wrap: wrap;
                }

                .product-item {
                    text-align: center;
                    width: 300px;
                    padding: 20px;
                    border-radius: 10px;
                    background-color: white;
                    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                }

                .product-item:hover {
                    transform: scale(1.05);
                    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
                }

                .product-img {
                    width: 100%;
                    height: 200px;
                    object-fit: cover;
                    border-radius: 10px;
                    margin-bottom: 15px;
                    transition: transform 0.5s ease;
                }

                .product-item:hover .product-img {
                    transform: scale(1.1);
                }

                .product-item h5 {
                    font-size: 1.5rem;
                    margin-bottom: 10px;
                    color: #132e49;
                }

                .product-item p {
                    font-size: 1rem;
                    color: #555;
                }

                .btn-primary {
                    background: linear-gradient(to right, #ff7e5f, #feb47b);
                    border: none;
                    font-size: 1.1rem;
                    font-weight: bold;
                    transition: all 0.3s ease;
                }

                .btn-primary:hover {
                    background: linear-gradient(to right, #feb47b, #ff7e5f);
                    transform: scale(1.05);
                }
            </style>

            <!-- Company History Section -->
    <section class="history-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Our Company History</h2>
                <img src="assets/images/divider/divider.png" alt="Section Divider" class="divider-img">
                <p class="lead">A journey of innovation and excellence in plastic manufacturing since 2001</p>
            </div>
            
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3 class="timeline-title">Establishment</h3>
                        <p class="timeline-text">SR Plastic was founded with a small manufacturing unit in Mumbai, focusing on basic plastic products for local businesses.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3 class="timeline-title">First Major Expansion</h3>
                        <p class="timeline-text">Expanded operations with advanced machinery and increased production capacity to serve regional markets.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3 class="timeline-title">ISO Certification</h3>
                        <p class="timeline-text">Received ISO 9001:2008 certification, marking our commitment to quality management systems.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3 class="timeline-title">Eco-Friendly Initiative</h3>
                        <p class="timeline-text">Launched our first line of biodegradable plastic products and implemented sustainable manufacturing processes.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3 class="timeline-title">Global Market Entry</h3>
                        <p class="timeline-text">Began exporting products to international markets in Asia, Europe, and the Middle East.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3 class="timeline-title">State-of-the-Art Facility</h3>
                        <p class="timeline-text">Opened a new eco-friendly manufacturing facility with cutting-edge technology and automated systems.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3 class="timeline-title">R&D Center Launch</h3>
                        <p class="timeline-text">Established a dedicated Research & Development center focused on innovative plastic solutions and advanced materials.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3 class="timeline-title">Present Day</h3>
                        <p class="timeline-text">Today, SR Plastic stands as a leader in the industry with a nationwide presence and international recognition for quality and innovation.</p>
                    </div>
                </div>

                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Gallery Section -->
                    <section class="gallery-section py-5">
                        <div class="container text-center">
                            <h2 class="gallery-title">Our Events</h2>
                            <img src="assets/images/divider/divider.png" alt="Section Divider" class="divider-img">
                            <p class="lead">Explore the highlights of our events and milestones</p>
                            <div class="gallery-grid mt-4">
                                <div class="gallery-item">
                                    <img src="assets\images\team\dm.jpg" alt="Event 1" class="gallery-img">
                                    <div class="gallery-overlay">
                                        <h5>Event 1</h5>
                                        <p>Celebrating our 20th Anniversary</p>
                                    </div>
                                </div>
                                <div class="gallery-item">
                                    <img src="assets\images\team\IMG-20250412-WA0015.jpg" alt="Event 2" class="gallery-img">
                                    <div class="gallery-overlay">
                                        <h5>Event 2</h5>
                                        <p>Product Launch Ceremony</p>
                                    </div>
                                </div>
                                <div class="gallery-item">
                                    <img src="assets\images\team\IMG-20250412-WA0019.jpg" alt="Event 3" class="gallery-img">
                                    <div class="gallery-overlay">
                                        <h5>Event 3</h5>
                                        <p>CSR Initiative for Sustainability</p>
                                    </div>
                                </div>
                            </div>
                            <a href="gallery.php" class="btn btn-primary mt-4">View Full Gallery</a>
                        </div>
                    </section>

                    <style>
                        .gallery-section {
                            background: linear-gradient(to right, #f9f9f9, #ffffff);
                            padding: 80px 20px;
                            position: relative;
                            overflow: hidden;
                        }

                        .gallery-title {
                            font-size: 2.5rem;
                            font-weight: bold;
                            color: #132e49;
                            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
                        }

                        .gallery-grid {
                            display: flex;
                            justify-content: center;
                            gap: 20px;
                            flex-wrap: wrap;
                        }

                        .gallery-item {
                            position: relative;
                            width: 300px;
                            height: 200px;
                            overflow: hidden;
                            border-radius: 10px;
                            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
                            transition: transform 0.3s ease, box-shadow 0.3s ease;
                        }

                        .gallery-item:hover {
                            transform: scale(1.05) rotateY(10deg);
                            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
                        }

                        .gallery-img {
                            width: 100%;
                            height: 100%;
                            object-fit: cover;
                            transition: transform 0.5s ease;
                        }

                        .gallery-item:hover .gallery-img {
                            transform: scale(1.1);
                        }

                        .gallery-overlay {
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background: rgba(0, 0, 0, 0.6);
                            color: white;
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                            align-items: center;
                            opacity: 0;
                            transition: opacity 0.3s ease;
                        }

                        .gallery-item:hover .gallery-overlay {
                            opacity: 1;
                        }

                        .gallery-overlay h5 {
                            font-size: 1.5rem;
                            margin-bottom: 10px;
                        }

                        .gallery-overlay p {
                            font-size: 1rem;
                        }
                    </style>
                    <section class="faq-section py-5">
                        <div class="container">
                            <div class="text-center mb-5">
                                <h2>Frequently Asked Questions</h2>
                                <img src="assets/images/divider/divider.png" alt="Section Divider" class="divider-img">
                                <p class="lead">Find answers to common questions about our products and services</p>
                            </div>
                            <div class="accordion" id="faqAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqHeadingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                                            What types of plastic products do you manufacture?
                                        </button>
                                    </h2>
                                    <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            We manufacture a wide range of plastic products, including custom molding, durable packaging, and innovative plastic containers.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqHeadingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                            Are your products environmentally friendly?
                                        </button>
                                    </h2>
                                    <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Yes, we are committed to sustainability and offer biodegradable plastic products along with eco-friendly manufacturing practices.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqHeadingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                                            Do you provide custom plastic solutions?
                                        </button>
                                    </h2>
                                    <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Absolutely! We specialize in custom plastic solutions tailored to meet the unique needs of our clients.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <?php include 'include/footer.php'; ?>
