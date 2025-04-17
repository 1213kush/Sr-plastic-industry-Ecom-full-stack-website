<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Why SR Plastic?</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google Fonts + Font Awesome -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
      color: #fff;
      line-height: 1.6;
      padding: 60px 20px;
    }

    .container {
      max-width: 1200px;
      margin: auto;
    }

    .section-title {
      text-align: center;
      font-size: 36px;
      margin-bottom: 40px;
      color: #00bcd4;
      position: relative;
    }

    .section-title::after {
      content: '';
      height: 3px;
      width: 80px;
      background: #00bcd4;
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      bottom: -10px;
    }

    .features {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
    }

    .feature-box {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.15);
      padding: 25px;
      border-radius: 15px;
      transition: all 0.3s ease;
      text-align: center;
    }

    .feature-box:hover {
      transform: translateY(-8px);
      border-color: #00bcd4;
      box-shadow: 0 10px 20px rgba(0, 188, 212, 0.2);
    }

    .feature-box i {
      font-size: 36px;
      color: #00bcd4;
      margin-bottom: 15px;
    }

    .feature-box h3 {
      font-size: 20px;
      margin-bottom: 10px;
      color: #fff;
    }

    .feature-box p {
      font-size: 15px;
      color: #ccc;
    }

    @media (max-width: 768px) {
      .section-title {
        font-size: 28px;
      }

      .feature-box {
        padding: 20px;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <h1 class="section-title">Why SR Plastic?</h1>

    <div class="features">
      <div class="feature-box">
        <i class="fas fa-industry"></i>
        <h3>15+ Years Experience</h3>
        <p>Trusted and proven expertise in plastic manufacturing with a long-standing reputation.</p>
      </div>

      <div class="feature-box">
        <i class="fas fa-certificate"></i>
        <h3>ISO-Certified Facility</h3>
        <p>We follow international standards for quality, safety, and environmental responsibility.</p>
      </div>

      <div class="feature-box">
        <i class="fas fa-shipping-fast"></i>
        <h3>Timely Delivery</h3>
        <p>Our streamlined logistics ensure your products are delivered on time, every time.</p>
      </div>

      <div class="feature-box">
        <i class="fas fa-rupee-sign"></i>
        <h3>Competitive Pricing</h3>
        <p>High-quality plastic solutions at affordable prices without compromising on standards.</p>
      </div>

      <div class="feature-box">
        <i class="fas fa-recycle"></i>
        <h3>Eco-Friendly Production</h3>
        <p>Committed to sustainability through recyclable materials and clean processes.</p>
      </div>

      <div class="feature-box">
        <i class="fas fa-users-cog"></i>
        <h3>Custom Manufacturing</h3>
        <p>We create tailored plastic solutions to meet your specific industrial or commercial needs.</p>
      </div>
    </div>
  </div>

</body>
</html>
