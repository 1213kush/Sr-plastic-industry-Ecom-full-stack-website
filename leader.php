<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Leadership | SR Plastics</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet"/>

  <style>
    :root {
      --primary: #880808;
      --primary-dark: #5d0505;
      --secondary: #967f5f;
      --secondary-light: #b59e80;
      --light: #f8f9fa;
      --dark: #222;
      --gradient: linear-gradient(135deg, #880808, #3b0b0b);
      --gradient-hover: linear-gradient(135deg, #5d0505, #230707);
      --accent: #ffd700;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f4f4f4;
      color: var(--dark);
      scroll-behavior: smooth;
      overflow-x: hidden;
    }

    h1, h2, h3, h4 {
      font-weight: 700;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    /* Header with parallax effect */
    .header {
      position: relative;
      height: 50vh; /* Reduced from 60vh */
      background: url('/api/placeholder/1200/800') center/cover fixed;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      text-align: center;
    }

    .header::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.6);
      z-index: 1;
    }

    .header-content {
      position: relative;
      z-index: 2;
      opacity: 0;
      transform: translateY(30px);
      animation: fadeInUp 1s forwards 0.5s;
    }

    .header-title {
      font-family: 'Playfair Display', serif;
      font-size: 3rem; /* Reduced from 3.5rem */
      margin-bottom: 15px; /* Reduced from 20px */
      text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
    }

    .header-subtitle {
      font-size: 1.1rem; /* Reduced from 1.3rem */
      max-width: 700px;
      margin: 0 auto 20px; /* Reduced from 30px */
      font-weight: 300;
    }

    .btn {
      display: inline-block;
      padding: 10px 25px; /* Reduced from 12px 30px */
      border-radius: 50px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
      text-transform: uppercase;
      letter-spacing: 1px;
      font-size: 0.85rem; /* Reduced from 0.9rem */
    }

    .btn-primary {
      background: var(--gradient);
      color: white;
      box-shadow: 0 4px 15px rgba(136, 8, 8, 0.3);
    }

    .btn-primary:hover {
      background: var(--gradient-hover);
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(136, 8, 8, 0.4);
    }

    /* Section styling */
    .section {
      padding: 70px 0; /* Reduced from 100px */
      position: relative;
    }

    .section-title {
      text-align: center;
      margin-bottom: 40px; /* Reduced from 60px */
      position: relative;
    }

    .section-title h2 {
      font-size: 2.2rem; /* Reduced from 2.5rem */
      display: inline-block;
      margin-bottom: 15px;
      position: relative;
      z-index: 1;
    }

    .section-title h2::after {
      content: '';
      position: absolute;
      bottom: -8px; /* Reduced from -10px */
      left: 50%;
      transform: translateX(-50%);
      width: 70px; /* Reduced from 80px */
      height: 3px; /* Reduced from 4px */
      background: var(--primary);
    }

    .section-title p {
      max-width: 600px;
      margin: 0 auto;
      color: #666;
      font-size: 1rem; /* Reduced from 1.1rem */
    }

    /* CEO Section - REDUCED SIZE */
    .ceo-section {
      overflow: hidden;
    }

    .ceo-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 30px; /* Reduced from 50px */
    }

    .ceo-card {
      background: white;
      border-radius: 15px; /* Reduced from 20px */
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); /* Reduced shadow */
      overflow: hidden;
      display: flex;
      opacity: 0;
      transform: translateY(30px);
      animation: fadeInUp 1s forwards;
      max-width: 900px; /* Added max-width to control overall size */
    }

    .ceo-header {
      background: var(--gradient);
      padding: 25px; /* Reduced from 30px */
      color: white;
      text-align: center;
      width: 35%; /* Slightly narrower */
    }

    .ceo-img-container {
      margin-top: 20px; /* Adjusted spacing */
      margin-bottom: 20px;
      text-align: center;
    }

    .ceo-img {
      width: 180px; /* Reduced from 250px */
      height: 180px; /* Reduced from 250px */
      border-radius: 50%;
      border: 5px solid white; /* Reduced from 6px */
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      overflow: hidden;
      transition: all 0.4s ease;
      display: inline-block;
    }

    .ceo-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .ceo-content {
      padding: 30px; /* Reduced from 40px */
      width: 65%; /* Adjusted to match header width change */
    }

    .ceo-title {
      font-size: 1.8rem; /* Reduced from 2.2rem */
      color: var(--primary);
      margin-bottom: 5px; /* Reduced from 10px */
      text-align: left;
    }

    .ceo-position {
      color: var(--secondary);
      font-size: 1.1rem; /* Reduced from 1.2rem */
      margin-bottom: 20px; /* Reduced from 30px */
      text-align: left;
      font-weight: 400;
    }

    .ceo-bio {
      line-height: 1.6; /* Reduced from 1.8 */
      margin-bottom: 20px; /* Reduced from 30px */
      font-size: 0.95rem; /* Reduced from 1.05rem */
    }

    .ceo-highlights {
      display: grid;
      grid-template-columns: 1fr 1fr; /* Changed to 2 columns instead of auto-fit */
      gap: 15px; /* Reduced from 25px */
      margin-bottom: 20px; /* Reduced from 30px */
    }

    .highlight-item {
      background: #f9f9f9;
      padding: 15px; /* Reduced from 25px 20px */
      border-radius: 10px; /* Reduced from 15px */
      border-left: 3px solid var(--primary); /* Reduced from 4px */
      transition: all 0.3s ease;
    }

    .highlight-item:hover {
      transform: translateY(-3px); /* Reduced from -5px */
      box-shadow: 0 8px 15px rgba(0,0,0,0.05);
      background: white;
    }

    .highlight-title {
      color: var(--primary);
      margin-bottom: 5px; /* Reduced from 10px */
      display: flex;
      align-items: center;
      gap: 8px; /* Reduced from 10px */
      font-size: 0.95rem; /* Added smaller font size */
    }

    .highlight-title i {
      color: var(--accent);
      font-size: 0.9rem; /* Added smaller icon */
    }

    .highlight-item p {
      font-size: 0.85rem; /* Added smaller text */
    }

    /* Quote section */
    .quote-section {
      background: var(--gradient);
      position: relative;
      padding: 60px 0; /* Reduced from 80px */
    }

    .quote-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('/api/placeholder/800/600') center/cover;
      opacity: 0.1;
      mix-blend-mode: overlay;
    }

    .quote-container {
      max-width: 900px; /* Reduced from 1000px */
      margin: 0 auto;
      position: relative;
      z-index: 1;
    }

    .quote-card {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      padding: 40px 30px; /* Reduced from 60px 40px */
      border-radius: 15px; /* Reduced from 20px */
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
      text-align: center;
      position: relative;
      color: white;
      border: 1px solid rgba(255, 255, 255, 0.1);
      opacity: 0;
      transform: translateY(30px);
      animation: fadeInUp 1s forwards;
    }

    .quote-icon {
      font-size: 40px; /* Reduced from 50px */
      color: var(--accent);
      margin-bottom: 20px; /* Reduced from 30px */
      opacity: 0.8;
    }

    .quote-text {
      font-size: 1.5rem; /* Reduced from 1.8rem */
      font-style: italic;
      line-height: 1.6; /* Reduced from 1.8 */
      margin-bottom: 20px; /* Reduced from 30px */
      position: relative;
      font-family: 'Playfair Display', serif;
    }

    .quote-author {
      font-size: 1rem; /* Reduced from 1.1rem */
      color: var(--accent);
      font-weight: 600;
    }

    /* Team section - REDUCED SIZE */
    .team-section {
      background: #f9f9f9;
      position: relative;
      overflow: hidden;
      padding-bottom: 80px;
    }

    .team-section::before {
      content: '';
      position: absolute;
      top: -150px; /* Reduced from -200px */
      right: -150px; /* Reduced from -200px */
      width: 300px; /* Reduced from 400px */
      height: 300px; /* Reduced from 400px */
      border-radius: 50%;
      background: rgba(136, 8, 8, 0.05);
      z-index: 0;
    }

    .team-section::after {
      content: '';
      position: absolute;
      bottom: -150px; /* Reduced from -200px */
      left: -150px; /* Reduced from -200px */
      width: 300px; /* Reduced from 400px */
      height: 300px; /* Reduced from 400px */
      border-radius: 50%;
      background: rgba(150, 127, 95, 0.05);
      z-index: 0;
    }

    .team-grid {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 30px;
      margin: 0 auto;
      max-width: 1100px;
    }

    .flip-card {
      perspective: 1000px;
      height: 400px; /* Reduced from 450px */
      width: 300px; /* Reduced from 320px */
      position: relative;
      z-index: 1;
      opacity: 0;
      transform: translateY(30px);
      animation: fadeInUp 1s forwards 0.3s;
    }

    .card-inner {
      position: relative;
      width: 100%;
      height: 100%;
      transform-style: preserve-3d;
      transition: transform 0.8s cubic-bezier(0.75, 0, 0.85, 1);
    }

    .flip-card:hover .card-inner {
      transform: rotateY(180deg);
    }

    .face {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
      border-radius: 15px; /* Reduced from 20px */
      overflow: hidden;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1); /* Reduced shadow */
    }

    .front {
      background: white;
      display: flex;
      flex-direction: column;
    }

    .front-img-container {
      height: 60%; /* Reduced from 65% */
      overflow: hidden;
      position: relative;
    }

    .front-img-container::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 30%;
      background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);
    }

    .front-img-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .flip-card:hover .front-img-container img {
      transform: scale(1.1);
    }

    .front-content {
      padding: 20px; /* Reduced from 25px */
      text-align: center;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .front-content h3 {
      margin-bottom: 6px; /* Reduced from 8px */
      color: var(--dark);
      font-size: 1.3rem; /* Reduced from 1.5rem */
    }

    .front-content p {
      color: var(--primary);
      font-weight: 600;
      font-size: 0.9rem; /* Added smaller font */
    }

    .back {
      background: var(--gradient);
      color: white;
      transform: rotateY(180deg);
      padding: 25px; /* Reduced from 30px */
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .back h3 {
      font-size: 1.5rem; /* Reduced from 1.8rem */
      margin-bottom: 12px; /* Reduced from 15px */
      text-align: center;
    }

    .back p {
      line-height: 1.6; /* Reduced from 1.7 */
      margin-bottom: 15px; /* Reduced from 20px */
      font-size: 0.9rem; /* Added smaller font */
    }

    .back blockquote {
      font-style: italic;
      color: #eee;
      border-left: 3px solid var(--accent); /* Reduced from 4px */
      padding-left: 12px; /* Reduced from 15px */
      margin: 15px 0; /* Reduced from 20px */
      font-size: 0.95rem; /* Reduced from 1.1rem */
    }

    .social-links {
      display: flex;
      justify-content: center;
      gap: 12px; /* Reduced from 15px */
      margin-bottom: 15px; /* Reduced from 20px */
    }

    .social-links a {
      color: white;
      background: rgba(255, 255, 255, 0.15);
      width: 35px; /* Reduced from 40px */
      height: 35px; /* Reduced from 40px */
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      transition: all 0.3s ease;
      font-size: 0.9rem; /* Added smaller icons */
    }

    .social-links a:hover {
      background: white;
      color: var(--primary);
      transform: translateY(-3px);
    }

    .btn-contact {
      background: white;
      color: var(--primary);
      text-align: center;
      padding: 8px 20px; /* Reduced from 12px 25px */
      border-radius: 50px;
      text-decoration: none;
      font-weight: bold;
      transition: all 0.3s ease;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      display: block;
      margin: 0 auto;
      width: fit-content;
      font-size: 0.85rem; /* Added smaller font */
    }

    .btn-contact:hover {
      background: var(--accent);
      color: var(--dark);
      transform: translateY(-3px);
      box-shadow: 0 6px 15px rgba(0,0,0,0.2);
    }

    /* CTA Section */
    .cta-section {
      padding: 60px 0; /* Reduced from 80px */
      background: #f4f4f4;
      text-align: center;
    }

    .cta-container {
      max-width: 800px;
      margin: 0 auto;
    }

    .cta-title {
      font-size: 2rem; /* Reduced from 2.2rem */
      margin-bottom: 15px; /* Reduced from 20px */
      color: var(--dark);
    }

    .cta-text {
      margin-bottom: 25px; /* Reduced from 30px */
      color: #666;
      font-size: 1rem; /* Reduced from 1.1rem */
      line-height: 1.6; /* Reduced from 1.7 */
    }

    .cta-buttons {
      display: flex;
      gap: 15px; /* Reduced from 20px */
      justify-content: center;
      flex-wrap: wrap;
    }

    .btn-secondary {
      background: transparent;
      color: var(--primary);
      border: 2px solid var(--primary);
    }

    .btn-secondary:hover {
      background: var(--primary);
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(136, 8, 8, 0.2);
    }

    /* Animations */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Responsive Styles */
    @media (max-width: 767px) {
      .header-title {
        font-size: 2rem; /* Reduced from 2.5rem */
      }

      .section {
        padding: 50px 0; /* Reduced from 70px */
      }

      .ceo-card {
        flex-direction: column;
      }

      .ceo-header, .ceo-content {
        width: 100%;
      }

      .ceo-header {
        padding: 20px;
      }

      .ceo-img {
        width: 120px; /* Reduced from 150px */
        height: 120px; /* Reduced from 150px */
      }

      .ceo-highlights {
        grid-template-columns: 1fr;
      }

      .quote-card {
        padding: 30px 15px; /* Reduced from 40px 20px */
      }

      .quote-text {
        font-size: 1.2rem; /* Reduced from 1.4rem */
      }
      
      .team-grid {
        gap: 20px;
      }
      
      .flip-card {
        height: 380px;
        width: 280px;
      }
    }
  </style>
</head>

<body>
  <!-- Header Section - Reduced Size -->
  <header class="header" style="height: 40vh;">
    <div class="header-content" style="opacity: 0.9; transform: translateY(20px);">
      <h1 class="header-title" style="font-size: 2.5rem; margin-bottom: 10px;">Leadership Excellence</h1>
      <p class="header-subtitle" style="font-size: 1rem; max-width: 600px; margin-bottom: 15px;">Meet the visionary team behind SR Plastics' success and innovation</p>
      <a href="#team" class="btn btn-primary" style="padding: 8px 20px; font-size: 0.8rem;">Meet Our Team</a>
    </div>
  </header>

  <!-- CEO Section - REDUCED SIZE -->
  <section class="section ceo-section">
    <div class="container">
      <div class="section-title">
        <h2>Visionary Leadership</h2>
        <p>The driving force behind our success and sustainable innovation</p>
      </div>
      
      <div class="ceo-container">
        <div class="ceo-card">
          <div class="ceo-header">
            <div class="ceo-img-container">
              <div class="ceo-img">
                <img src="assets\images\logo\x1.jpg" alt="Er. Subash Ranjan"/>
              </div>
            </div>
          </div>
          
          <div class="ceo-content">
            <h2 class="ceo-title">Er. Subash Ranjan</h2>
            <h4 class="ceo-position">Founder & CEO – SR Plastic</h4>
            
            <p class="ceo-bio">With unmatched passion and strategic foresight, Er. Subash Ranjan has transformed SR Plastic into an industry leader. Known for his visionary thinking and eco-conscious mindset, he drives our innovation and growth.</p>
            
            <div class="ceo-highlights">
              <div class="highlight-item">
                <h4 class="highlight-title"><i class="fas fa-leaf"></i> Eco Focus</h4>
                <p>Leads with sustainable manufacturing practices.</p>
              </div>
              
              <div class="highlight-item">
                <h4 class="highlight-title"><i class="fas fa-lightbulb"></i> Innovation</h4>
                <p>Brings bold ideas to life with smart technology.</p>
              </div>
              
              <div class="highlight-item">
                <h4 class="highlight-title"><i class="fas fa-users"></i> Jobs & Growth</h4>
                <p>Creates opportunities for skilled employment.</p>
              </div>
              
              <div class="highlight-item">
                <h4 class="highlight-title"><i class="fas fa-chart-line"></i> Vision</h4>
                <p>Drives excellence through strategic planning.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Quote Section -->
  <section class="section quote-section">
    <div class="container">
      <div class="quote-container">
        <div class="quote-card">
          <i class="fas fa-quote-left quote-icon"></i>
          <p class="quote-text">
            "Success is not just about making high-quality products, it's about making a positive impact on people, the planet, and future generations."
          </p>
          <div class="quote-author">— Er. Subash Ranjan, CEO of SR Plastic</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section - REDUCED SIZE -->
  <section id="team" class="section team-section">
    <div class="container">
      <div class="section-title">
        <h2>Leadership Team</h2>
        <p>Meet the experts behind our innovative solutions and company vision</p>
      </div>
      
      <div class="team-grid">
        <!-- HR & General Manager Card -->
        <div class="flip-card">
          <div class="card-inner">
            <div class="face front">
              <div class="front-img-container">
                <img src="assets\images\npm\m2.jpg" alt="Dr. Priti Verma"/>
              </div>
              <div class="front-content">
                <h3>Dr. Priti Verma</h3>
                <p>Human Resource & General Manager</p>
              </div>
            </div>
            <div class="face back">
              <h3>Dr. Priti Verma</h3>
              <p>PhD holder and an inspiring leader who has significantly contributed to the growth of SR Plastics. Her expertise in HR and strategic planning has fostered a culture of excellence.</p>
              <blockquote>
                "Leadership is not about being in charge. It's about taking care of those in your charge."
              </blockquote>
              <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
              </div>
              <a href="#" class="btn-contact">Connect</a>
            </div>
          </div>
        </div>
        
       
  <!-- CTA Section -->
  <section class="section cta-section">
    <div class="container">
      <div class="cta-container">
        <h2 class="cta-title">Join Our Innovation Journey</h2>
        <p class="cta-text">Want to learn more about our leadership philosophy or explore career opportunities with our team? We're always looking for passionate individuals to help us shape the future of sustainable plastics.</p>
        <div class="cta-buttons">
          <a href="#" class="btn btn-primary">Contact Us</a>
          <a href="#" class="btn btn-secondary">Careers</a>
        </div>
      </div>
    </div>
  </section>
</body>
</html>