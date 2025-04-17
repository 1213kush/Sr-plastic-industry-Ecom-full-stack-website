<?php include 'include/header.php'; ?>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<style>
    :root {
        --primary-color: #2c3e50;
        --secondary-color:rgb(4, 8, 10);
        --accent-color: #e74c3c;
        --purple-color: #6f42c1;
        --orange-color: #fd7e14;
        --teal-color: #20c997;
        --indigo-color: #6610f2;
    }

    .btn-outline-purple {
        color: var(--purple-color);
        border-color: var(--purple-color);
    }
    .btn-outline-purple:hover {
        color: #fff;
        background-color: var(--purple-color);
    }

    .btn-outline-orange {
        color: var(--orange-color);
        border-color: var(--orange-color);
    }
    .btn-outline-orange:hover {
        color: #fff;
        background-color: var(--orange-color);
    }

    .btn-outline-teal {
        color: var(--teal-color);
        border-color: var(--teal-color);
    }
    .btn-outline-teal:hover {
        color: #fff;
        background-color: var(--teal-color);
    }

    .btn-outline-indigo {
        color: var(--indigo-color);
        border-color: var(--indigo-color);
    }
    .btn-outline-indigo:hover {
        color: #fff;
        background-color: var(--indigo-color);
    }
    
    /* Career Banner */
    .career-banner {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
            url('assets/images/banner/banner1.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .career-banner::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, rgba(44,62,80,0.7) 0%, rgba(52,152,219,0.7) 100%);
        z-index: 1;
    }

    .career-banner h1 {
        font-size: 3.5rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 20px;
        position: relative;
        z-index: 2;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }

    .career-banner p {
        font-size: 1.5rem;
        position: relative;
        z-index: 2;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
    }

    /* Careers Section */
    .careers-section {
        padding: 80px 0;
        background-color: #f9f9f9;
    }

    .section-title {
        position: relative;
        margin-bottom: 60px;
    }

    .section-title h2 {
        font-weight: 700;
        color: var(--primary-color);
        position: relative;
        display: inline-block;
        padding-bottom: 15px;
    }

    .section-title h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: var(--secondary-color);
    }

    .section-title p {
        color: #666;
        font-size: 1.1rem;
    }

    /* Career Cards */
    .career-card {
        border: none;
        transition: all 0.5s ease;
        transform-style: preserve-3d;
        margin-bottom: 30px;
        border-radius: 10px !important;
        overflow: hidden;
        position: relative;
        background: white;
    }

    .career-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 5px;
        height: 100%;
        background: var(--secondary-color);
        transition: all 0.3s ease;
    }

    .career-card:hover::before {
        width: 100%;
        opacity: 0.1;
    }

    .career-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
    }

    .icon-box {
        width: 70px;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50% !important;
        font-size: 30px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .job-title {
        color: var(--primary-color);
        font-weight: 600;
        margin-bottom: 5px;
    }

    .job-type {
        font-size: 0.9rem;
        color: #666;
    }

    .responsibilities h5 {
        color: var(--primary-color);
        font-weight: 600;
        margin-bottom: 15px;
        position: relative;
        padding-bottom: 10px;
    }

    .responsibilities h5::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 40px;
        height: 2px;
        background: var(--secondary-color);
    }

    .responsibilities li {
        margin-bottom: 10px;
        position: relative;
        padding-left: 25px;
    }

    .responsibilities li::before {
        content: '\f00c';
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        position: absolute;
        left: 0;
        top: 2px;
        color: var(--secondary-color);
    }

    .location-badge {
        font-size: 0.9rem;
        padding: 8px 15px;
        border-radius: 50px !important;
    }

    .apply-btn {
        border-radius: 50px !important;
        padding: 8px 25px;
        font-weight: 600;
        transition: all 0.3s ease;
        border-width: 2px;
    }

    .apply-btn:hover {
        transform: translateY(-2px);
    }

    /* Why Join Us Section */
    .benefits-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    }

    .benefit-box {
        text-align: center;
        padding: 30px 20px;
        border-radius: 10px;
        background: white;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        height: 100%;
    }

    .benefit-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }

    .benefit-icon {
        font-size: 50px;
        color: var(--secondary-color);
        margin-bottom: 20px;
    }

    .benefit-title {
        font-weight: 600;
        color: var(--primary-color);
        margin-bottom: 15px;
    }

    /* Testimonials */
    .testimonial-section {
        padding: 80px 0;
        background-color: white;
    }

    .testimonial-card {
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        position: relative;
        margin: 15px;
    }

    .testimonial-card::before {
        content: '\f10d';
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        position: absolute;
        top: 20px;
        left: 20px;
        font-size: 50px;
        color: rgba(52,152,219,0.1);
        z-index: 0;
    }

    .testimonial-text {
        position: relative;
        z-index: 1;
        font-style: italic;
        color: #555;
        margin-bottom: 20px;
    }

    .testimonial-author {
        font-weight: 600;
        color: var(--primary-color);
    }

    .testimonial-position {
        color: #666;
        font-size: 0.9rem;
    }

    /* CTA Section */
    .cta-section {
        padding: 80px 0;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        color: white;
        text-align: center;
    }

    .cta-section h2 {
        font-weight: 700;
        margin-bottom: 20px;
    }

    .cta-section p {
        font-size: 1.1rem;
        margin-bottom: 30px;
        opacity: 0.9;
    }

    .cta-btn {
        background: white;
        color: var(--primary-color);
        border-radius: 50px;
        padding: 12px 35px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease;
        border: 2px solid white;
    }

    .cta-btn:hover {
        background: transparent;
        color: white;
    }
</style>
</head>

<body>
    <!-- Career Page Banner -->
    <section class="career-banner animate__animated animate__fadeIn">
        <div class="container">
            <h1 class="animate__animated animate__fadeInUp">Build Your Career With Us</h1>
            <p class="animate__animated animate__fadeInUp animate__delay-1s">Join our team of innovators and industry leaders</p>
        </div>
    </section>

    <!-- Careers Section -->
    <section class="careers-section">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="animate__animated animate__fadeInUp">Current Openings</h2>
                <p class="animate__animated animate__fadeInUp animate__delay-1s">Explore exciting career opportunities at SR Plastic</p>
            </div>

            <div class="row">
                <!-- Production Supervisor Position -->
                <div class="col-lg-6 animate__animated animate__fadeInLeft">
                    <div class="career-card p-4 shadow-lg">
                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-box bg-primary bg-gradient me-4">
                                <i class="fas fa-industry text-white"></i>
                            </div>
                            <div>
                                <h3 class="job-title">Production Supervisor</h3>
                                <span class="job-type">Full-time</span>
                            </div>
                        </div>
                        <div class="responsibilities mb-4">
                            <h5>Key Responsibilities</h5>
                            <ul class="list-unstyled">
                                <li class="mb-3">Oversee daily plastic manufacturing operations</li>
                                <li class="mb-3">Manage and train production staff</li>
                                <li class="mb-3">Implement quality control procedures</li>
                                <li class="mb-3">Optimize production efficiency</li>
                                <li>Ensure workplace safety standards</li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="badge bg-primary location-badge">Patna, Bihar</span>
                                <span class="badge bg-secondary location-badge ms-2">2+ Years Exp</span>
                            </div>
                            <button class="btn btn-outline-primary apply-btn" data-bs-toggle="modal" data-bs-target="#applyModal" data-position="Production Supervisor">
                                Apply Now <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Machine Operator Position -->
                <div class="col-lg-6 animate__animated animate__fadeInRight">
                    <div class="career-card p-4 shadow-lg">
                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-box bg-success bg-gradient me-4">
                                <i class="fas fa-cogs text-white"></i>
                            </div>
                            <div>
                                <h3 class="job-title">Machine Operator</h3>
                                <span class="job-type">Full-time</span>
                            </div>
                        </div>
                        <div class="responsibilities mb-4">
                            <h5>Key Responsibilities</h5>
                            <ul class="list-unstyled">
                                <li class="mb-3">Operate plastic injection molding machines</li>
                                <li class="mb-3">Perform equipment maintenance</li>
                                <li class="mb-3">Monitor product quality</li>
                                <li class="mb-3">Follow production schedules</li>
                                <li>Maintain clean work area</li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="badge bg-success location-badge">Patna, Bihar</span>
                                <span class="badge bg-secondary location-badge ms-2">1+ Years Exp</span>
                            </div>
                            <button class="btn btn-outline-success apply-btn" data-bs-toggle="modal" data-bs-target="#applyModal" data-position="Machine Operator">
                                Apply Now <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Quality Control Position -->
                <div class="col-lg-6 animate__animated animate__fadeInLeft">
                    <div class="career-card p-4 shadow-lg">
                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-box bg-warning bg-gradient me-4">
                                <i class="fas fa-clipboard-check text-white"></i>
                            </div>
                            <div>
                                <h3 class="job-title">Quality Control Inspector</h3>
                                <span class="job-type">Full-time</span>
                            </div>
                        </div>
                        <div class="responsibilities mb-4">
                            <h5>Key Responsibilities</h5>
                            <ul class="list-unstyled">
                                <li class="mb-3">Inspect finished plastic products</li>
                                <li class="mb-3">Document quality issues</li>
                                <li class="mb-3">Implement corrective actions</li>
                                <li class="mb-3">Maintain quality records</li>
                                <li>Coordinate with production team</li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="badge bg-warning text-dark location-badge">Patna, Bihar</span>
                                <span class="badge bg-secondary location-badge ms-2">2+ Years Exp</span>
                            </div>
                            <button class="btn btn-outline-warning apply-btn" data-bs-toggle="modal" data-bs-target="#applyModal" data-position="Quality Control Inspector">
                                Apply Now <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sales Executive Position -->
                <div class="col-lg-6 animate__animated animate__fadeInRight">
                    <div class="career-card p-4 shadow-lg">
                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-box bg-info bg-gradient me-4">
                                <i class="fas fa-chart-line text-white"></i>
                            </div>
                            <div>
                                <h3 class="job-title">Sales Executive</h3>
                                <span class="job-type">Full-time</span>
                            </div>
                        </div>
                        <div class="responsibilities mb-4">
                            <h5>Key Responsibilities</h5>
                            <ul class="list-unstyled">
                                <li class="mb-3">Develop new business opportunities</li>
                                <li class="mb-3">Maintain client relationships</li>
                                <li class="mb-3">Achieve sales targets</li>
                                <li class="mb-3">Market research and analysis</li>
                                <li>Prepare sales reports</li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="badge bg-info text-dark location-badge">Patna, Bihar</span>
                                <span class="badge bg-secondary location-badge ms-2">3+ Years Exp</span>
                            </div>
                            <button class="btn btn-outline-info apply-btn" data-bs-toggle="modal" data-bs-target="#applyModal" data-position="Sales Executive">
                                Apply Now <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Receptionist Position -->
                <div class="col-lg-6 animate__animated animate__fadeInLeft">
                    <div class="career-card p-4 shadow-lg">
                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-box bg-purple bg-gradient me-4">
                                <i class="fas fa-headset text-white"></i>
                            </div>
                            <div>
                                <h3 class="job-title">Receptionist</h3>
                                <span class="job-type">Full-time</span>
                            </div>
                        </div>
                        <div class="responsibilities mb-4">
                            <h5>Key Responsibilities</h5>
                            <ul class="list-unstyled">
                                <li class="mb-3">Greet and assist visitors</li>
                                <li class="mb-3">Answer and direct phone calls</li>
                                <li class="mb-3">Manage appointments and schedules</li>
                                <li class="mb-3">Handle incoming/outgoing mail</li>
                                <li>Maintain office supplies</li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="badge bg-purple location-badge">Patna, Bihar</span>
                                <span class="badge bg-secondary location-badge ms-2">1+ Years Exp</span>
                            </div>
                            <button class="btn btn-outline-purple apply-btn" data-bs-toggle="modal" data-bs-target="#applyModal" data-position="Receptionist">
                                Apply Now <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Senior Marketing Position -->
                <div class="col-lg-6 animate__animated animate__fadeInRight">
                    <div class="career-card p-4 shadow-lg">
                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-box bg-orange bg-gradient me-4">
                                <i class="fas fa-bullhorn text-white"></i>
                            </div>
                            <div>
                                <h3 class="job-title">Senior Marketing Executive</h3>
                                <span class="job-type">Full-time</span>
                            </div>
                        </div>
                        <div class="responsibilities mb-4">
                            <h5>Key Responsibilities</h5>
                            <ul class="list-unstyled">
                                <li class="mb-3">Develop marketing strategies</li>
                                <li class="mb-3">Lead marketing campaigns</li>
                                <li class="mb-3">Analyze market trends</li>
                                <li class="mb-3">Manage marketing budget</li>
                                <li>Supervise marketing team</li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="badge bg-orange text-dark location-badge">Patna, Bihar</span>
                                <span class="badge bg-secondary location-badge ms-2">5+ Years Exp</span>
                            </div>
                            <button class="btn btn-outline-orange apply-btn" data-bs-toggle="modal" data-bs-target="#applyModal" data-position="Senior Marketing Executive">
                                Apply Now <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Senior Accountant Position -->
                <div class="col-lg-6 animate__animated animate__fadeInLeft">
                    <div class="career-card p-4 shadow-lg">
                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-box bg-teal bg-gradient me-4">
                                <i class="fas fa-calculator text-white"></i>
                            </div>
                            <div>
                                <h3 class="job-title">Senior Accountant</h3>
                                <span class="job-type">Full-time</span>
                            </div>
                        </div>
                        <div class="responsibilities mb-4">
                            <h5>Key Responsibilities</h5>
                            <ul class="list-unstyled">
                                <li class="mb-3">Prepare financial statements</li>
                                <li class="mb-3">Manage accounts payable/receivable</li>
                                <li class="mb-3">Conduct financial audits</li>
                                <li class="mb-3">Tax planning and compliance</li>
                                <li>Budget preparation and analysis</li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="badge bg-teal location-badge">Patna, Bihar</span>
                                <span class="badge bg-secondary location-badge ms-2">5+ Years Exp</span>
                            </div>
                            <button class="btn btn-outline-teal apply-btn" data-bs-toggle="modal" data-bs-target="#applyModal" data-position="Senior Accountant">
                                Apply Now <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Additional Machine Operator Position -->
                <div class="col-lg-6 animate__animated animate__fadeInRight">
                    <div class="career-card p-4 shadow-lg">
                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-box bg-indigo bg-gradient me-4">
                                <i class="fas fa-robot text-white"></i>
                            </div>
                            <div>
                                <h3 class="job-title">CNC Machine Operator</h3>
                                <span class="job-type">Full-time</span>
                            </div>
                        </div>
                        <div class="responsibilities mb-4">
                            <h5>Key Responsibilities</h5>
                            <ul class="list-unstyled">
                                <li class="mb-3">Operate CNC machinery</li>
                                <li class="mb-3">Program machine settings</li>
                                <li class="mb-3">Monitor production quality</li>
                                <li class="mb-3">Perform routine maintenance</li>
                                <li>Troubleshoot machine issues</li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="badge bg-indigo location-badge">Patna, Bihar</span>
                                <span class="badge bg-secondary location-badge ms-2">3+ Years Exp</span>
                            </div>
                            <button class="btn btn-outline-indigo apply-btn" data-bs-toggle="modal" data-bs-target="#applyModal" data-position="CNC Machine Operator">
                                Apply Now <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Join Us Section -->
    <section class="benefits-section">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="animate__animated animate__fadeInUp">Why Join SR Plastic?</h2>
                <p class="animate__animated animate__fadeInUp animate__delay-1s">We offer more than just a job</p>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4 animate__animated animate__fadeInUp">
                    <div class="benefit-box">
                        <div class="benefit-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h4 class="benefit-title">Career Growth</h4>
                        <p>Opportunities for professional development and advancement within the company.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-4 animate__animated animate__fadeInUp animate__delay-1s">
                    <div class="benefit-box">
                        <div class="benefit-icon">
                            <i class="fas fa-medal"></i>
                        </div>
                        <h4 class="benefit-title">Competitive Salary</h4>
                        <p>Attractive compensation packages with performance-based incentives.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-4 animate__animated animate__fadeInUp animate__delay-2s">
                    <div class="benefit-box">
                        <div class="benefit-icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h4 class="benefit-title">Health Benefits</h4>
                        <p>Comprehensive health insurance and wellness programs for all employees.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-4 animate__animated animate__fadeInUp animate__delay-3s">
                    <div class="benefit-box">
                        <div class="benefit-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4 class="benefit-title">Great Culture</h4>
                        <p>Collaborative work environment with team-building activities and events.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

  

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2 class="animate__animated animate__fadeInUp">Ready to Join Our Team?</h2>
            <p class="animate__animated animate__fadeInUp animate__delay-1s">We're always looking for talented individuals to join our growing company.</p>
            <button class="btn cta-btn animate__animated animate__fadeInUp animate__delay-2s" data-bs-toggle="modal" data-bs-target="#applyModal">
                Apply Now <i class="fas fa-arrow-right ms-2"></i>
            </button>
        </div>
    </section>


    <!-- Apply Modal -->
    <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="applyModalLabel">Apply for the Job</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
<form id="applyForm" class="needs-validation" novalidate>
    <input type="hidden" id="positionApplied" name="position">
    
    <div class="mb-4">
        <label for="name" class="form-label fw-semibold">Full Name *</label>
        <input type="text" class="form-control" id="name" name="name" required 
               pattern="[A-Za-z ]{3,50}" 
               placeholder="Ankush kumar">
        <div class="invalid-feedback">Please enter a valid name (3-50 characters)</div>
    </div>
    
    <div class="mb-4">
        <label for="email" class="form-label fw-semibold">Email Address *</label>
        <input type="email" class="form-control" id="email" name="email" required
               placeholder="anksuhkr@email.com">
        <div class="invalid-feedback">Please enter a valid email</div>
    </div>
    
    <div class="mb-4">
        <label for="phone" class="form-label fw-semibold">Phone Number *</label>
        <input type="tel" class="form-control" id="phone" name="phone" required
               pattern="[0-9]{10,15}" 
               placeholder="10-15 digits">
        <div class="invalid-feedback">Please enter a valid phone number</div>
    </div>
    
    <div class="mb-4">
        <label for="resume" class="form-label fw-semibold">Upload Resume *</label>
        <input type="file" class="form-control" id="resume" name="resume" required
               accept=".pdf,.doc,.docx">
        <small class="text-muted">PDF, DOC or DOCX (Max 5MB)</small>
        <div class="invalid-feedback">Please upload your resume</div>
    </div>
    
    <div class="mb-4">
        <label for="linkedin" class="form-label fw-semibold">LinkedIn Profile</label>
        <input type="url" class="form-control" id="linkedin" name="linkedin"
               placeholder="https://linkedin.com/in/yourprofile">
    </div>
    
    <div class="mb-4">
        <label for="cover-letter" class="form-label fw-semibold">
            Cover Letter <span class="text-muted">(Optional)</span>
        </label>
        <textarea class="form-control" id="cover-letter" name="cover-letter" rows="4"
                  maxlength="1000"
                  placeholder="Tell us why you're a great fit for this position (max 1000 characters)"></textarea>
        <small class="text-muted float-end"><span id="charCount">0</span>/1000</small>
    </div>

    <div class="mb-4">
        <label for="why_hire" class="form-label fw-semibold">Why we hire you ? (write in 3-4 lines)</label>
        <textarea class="form-control" id="why_hire" name="why_hire" rows="3" required
                  placeholder="Write in three to five lines"></textarea>
        <div class="invalid-feedback">Write in three to five lines</div>
    </div>
    
    <div class="form-check mb-4">
        <input class="form-check-input" type="checkbox" id="consent" name="consent" required>
        <label class="form-check-label" for="consent">
            I consent to my data being processed according to your privacy policy *
        </label>
        <div class="invalid-feedback">You must agree to proceed</div>
    </div>
    
    <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">
        <span id="submitText">Submit Application</span>
        <span id="submitSpinner" class="spinner-border spinner-border-sm d-none" role="status"></span>
    </button>
</form>
                    <div id="responseMessage" class="mt-3"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>

    // Set position when apply button is clicked
    document.querySelectorAll('.apply-btn').forEach(button => {
        button.addEventListener('click', function() {
            document.getElementById('positionApplied').value = this.getAttribute('data-position');
        });
    });

    // Form validation and submission
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('applyForm');
        const charCount = document.getElementById('charCount');
        const coverLetter = document.getElementById('cover-letter');
        
        // Character counter for cover letter
        coverLetter.addEventListener('input', function() {
            charCount.textContent = this.value.length;
        });
        
        // Form validation
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            event.stopPropagation();

            // Custom name validation using regex
            const nameInput = document.getElementById('name');
            const name = nameInput.value;
            const nameRegex = /^[A-Za-z\s]+$/;
            const responseMessage = document.getElementById('responseMessage');

            if (!(name && name.trim().length > 0 && nameRegex.test(name))) {
                responseMessage.innerHTML = `
                    <div class="alert alert-danger d-flex align-items-center">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        <div>Invalid name. Please use only letters and spaces (3-50 characters).</div>
                    </div>`;
                nameInput.focus();
                return; // Prevent submission
            }

            if (form.checkValidity()) {
                submitForm();
            }
            
            form.classList.add('was-validated');
        }, false);
        
        function submitForm() {
            const formData = new FormData(form);
            const submitBtn = form.querySelector('button[type="submit"]');
            const submitText = document.getElementById('submitText');
            const submitSpinner = document.getElementById('submitSpinner');
            const responseMessage = document.getElementById('responseMessage');
            
            // Show loading state
            submitText.textContent = 'Processing...';
            submitSpinner.classList.remove('d-none');
            submitBtn.disabled = true;
            
            fetch("apply_job.php", {
                method: "POST",
                body: formData
            })
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.json();
            })
            .then(data => {
                if (data.status === "success") {
                    responseMessage.innerHTML = `
                        <div class="alert alert-success d-flex align-items-center">
                            <i class="fas fa-check-circle me-2"></i>
                            <div>${data.message}</div>
                        </div>`;
                    form.reset();
                    form.classList.remove('was-validated');
                    charCount.textContent = '0';
                } else {
                    throw new Error(data.message || 'Submission failed');
                }
            })
            .catch(error => {
                console.error("Error:", error);
                responseMessage.innerHTML = `
                    <div class="alert alert-danger d-flex align-items-center">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        <div>${error.message || 'An error occurred. Please try again later.'}</div>
                    </div>`;
            })
            .finally(() => {
                submitText.textContent = 'Submit Application';
                submitSpinner.classList.add('d-none');
                submitBtn.disabled = false;
                
                // Scroll to response message
                responseMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            });
        }
    });

    // Animation on scroll
    document.addEventListener('DOMContentLoaded', function() {
        const animateElements = document.querySelectorAll('.animate__animated');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add(entry.target.dataset.animate);
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });

        animateElements.forEach(element => {
            element.dataset.animate = element.classList[1];
            element.classList.remove('animate__animated', element.classList[1]);
            observer.observe(element);
        });
    });
    </script>

    <?php include 'include/footer.php'; ?>
</body>
</html>
