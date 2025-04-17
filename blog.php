<?php include 'include/header.php'; ?>
  <style>
    /* Blog-specific Styles */
    .content {
      max-width: 1000px;
      margin: 3rem auto;
      padding: 2rem;
      background: white;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    h2 {
      color: var(--secondary);
      font-size: 2rem;
      margin-bottom: 1.5rem;
      position: relative;
      padding-bottom: 0.5rem;
    }

    h2::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 60px;
      height: 4px;
      background: var(--primary);
      border-radius: 2px;
    }

    h3 {
      color: var(--dark);
      margin: 1.5rem 0 1rem;
      font-size: 1.4rem;
    }

    p {
      margin-bottom: 1.5rem;
      color: var(--text);
      line-height: 1.8;
    }

    video, img {
      display: block;
      margin: 2rem auto;
      max-width: 100%;
      height: auto;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .blog-entry {
      margin-bottom: 3rem;
      padding-bottom: 2rem;
      border-bottom: 1px solid #eee;
      transition: all 0.3s ease;
    }

    .blog-entry:hover {
      transform: translateY(-5px);
    }

    .blog-entry:last-child {
      margin-bottom: 0;
      border-bottom: none;
    }

    ul {
      margin-bottom: 1.5rem;
      padding-left: 1.5rem;
    }

    li {
      margin-bottom: 0.5rem;
      line-height: 1.6;
    }

    strong {
      color: var(--dark);
    }

    em {
      color: var(--text-light);
      font-size: 0.9rem;
      display: block;
      text-align: center;
      margin-top: 0.5rem;
    }
    /* Footer Styles */
    footer {
      background-color: var(--secondary);
      color: white;
      padding: 3rem 0 1.5rem;
      margin-top: 3rem;
    }

    .footer-container {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
      padding: 0 2rem;
    }

    .footer-section {
      margin-bottom: 1.5rem;
    }

    .footer-section h3 {
      color: white;
      margin-bottom: 1.5rem;
      font-size: 1.3rem;
      position: relative;
      padding-bottom: 0.5rem;
    }

    .footer-section h3::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 40px;
      height: 3px;
      background: var(--primary);
    }

    .footer-section p {
      color: rgba(255,255,255,0.8);
      margin-bottom: 1rem;
    }

    .footer-section a {
      color: rgba(255,255,255,0.8);
      text-decoration: none;
      display: block;
      margin-bottom: 0.5rem;
      transition: all 0.3s ease;
    }

    .footer-section a:hover {
      color: var(--primary);
      padding-left: 5px;
    }

    .social-links {
      display: flex;
      gap: 1rem;
      margin-bottom: 1.5rem;
    }

    .social-links a {
      color: white;
      background: rgba(255,255,255,0.1);
      width: 36px;
      height: 36px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
    }

    .social-links a:hover {
      background: var(--primary);
      transform: translateY(-3px);
    }

    .copyright {
      text-align: center;
      padding-top: 1.5rem;
      margin-top: 2rem;
      border-top: 1px solid rgba(255,255,255,0.1);
      color: rgba(255,255,255,0.6);
      font-size: 0.9rem;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
      .header-container {
        flex-direction: column;
        gap: 1rem;
      }
      
      nav ul {
        flex-wrap: wrap;
        justify-content: center;
      }
      
      .content {
        padding: 1.5rem;
        margin: 1.5rem;
      }
      
      h2 {
        font-size: 1.6rem;
      }
    }
  </style>
</head>
<body>
  <div class="content">
    <div class="blog-entry">
      <h2>Advanced Manufacturing Processes</h2>
      <p>Modern manufacturing has evolved significantly from traditional methods to incorporate cutting-edge technologies and processes. At our facilities, we utilize a combination of computer-aided design (CAD), computer-aided manufacturing (CAM), and lean manufacturing principles to ensure maximum efficiency and quality control throughout the production cycle.</p>
      
      <p>Our manufacturing process begins with rigorous material selection, where we source high-quality raw materials that meet international standards. These materials then undergo precision machining using state-of-the-art CNC equipment capable of micron-level accuracy. The integration of IoT sensors throughout our production lines allows for real-time monitoring of equipment performance and product quality, enabling immediate adjustments when needed.</p>
      
      <p>Quality assurance is embedded at every stage, from initial material inspection to final product testing. We employ statistical process control methods and automated inspection systems to maintain consistent quality. Our manufacturing team undergoes continuous training to stay current with the latest industry developments and safety protocols.</p>
      
      <p>The environmental impact of manufacturing is a key consideration in our operations. We've implemented sustainable practices such as waste reduction programs, energy-efficient machinery, and closed-loop water systems. These initiatives not only reduce our ecological footprint but also result in cost savings that we can pass on to our customers.</p>
      
      <video width="640" height="360" controls>
        <source src="assets/images/team/VID-20250412-WA0001.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>

    <div class="blog-entry">
      <h2>Our Human Resources Philosophy</h2>
      <p>At the core of our company's success is our people-centric approach to human resources management. Our HR department goes beyond traditional personnel management to create an organizational culture that fosters innovation, collaboration, and continuous learning.</p>
      
      <p>Our talent acquisition strategy focuses on identifying individuals who not only possess the required technical skills but also align with our company values. We utilize behavioral interviewing techniques and skills assessments to ensure we're building teams that will thrive in our dynamic environment. Once onboard, employees participate in a comprehensive orientation program that introduces them to our company culture, safety protocols, and career development opportunities.</p>
      
      <p>Employee development is an ongoing priority. We offer regular training sessions covering technical skills, leadership development, and industry trends. Our mentorship program pairs experienced team members with newer employees to facilitate knowledge transfer and professional growth. We also encourage cross-departmental collaboration through special project teams and job rotation opportunities.</p>
      
      <p>Recognizing that employee well-being directly impacts productivity and satisfaction, we've implemented numerous wellness initiatives. These include flexible work arrangements, mental health resources, and ergonomic workplace assessments. Our competitive compensation and benefits package is regularly benchmarked against industry standards to ensure we remain an employer of choice in our sector.</p>
      
      <video width="640" height="360" controls>
        <source src="assets/images/team/VID-20250412-WA0002.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>

    <div class="blog-entry">
      <h2>Innovation in Manufacturing</h2>
      <p>Innovation in manufacturing is a critical driver of economic growth and competitiveness. It encompasses a wide range of advancements, from the integration of artificial intelligence and machine learning to the adoption of advanced robotics and automation technologies. These innovations enable manufacturers to optimize their production processes, reduce waste, and enhance product quality.</p>
      
      <p>One of the most significant trends in manufacturing innovation is the shift towards smart factories. These facilities leverage the Internet of Things (IoT) to connect machines, systems, and people, allowing for real-time data analysis and decision-making. By utilizing sensors and connected devices, manufacturers can monitor equipment performance, predict maintenance needs, and streamline operations.</p>
      
      <p>Additionally, additive manufacturing, commonly known as 3D printing, has revolutionized the way products are designed and produced. This technology allows for rapid prototyping and customization, reducing lead times and costs associated with traditional manufacturing methods. Companies can now produce complex geometries that were previously impossible to achieve, leading to lighter and more efficient products.</p>
      
      <p>Furthermore, innovation in manufacturing is closely tied to sustainability. Many manufacturers are adopting eco-friendly practices, such as using renewable energy sources and implementing circular economy principles. By focusing on sustainable innovation, companies not only reduce their environmental impact but also appeal to a growing consumer base that values sustainability.</p>
      
      <video width="640" height="360" controls>
        <source src="assets/images/team/VID-20250412-WA0003.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>

    <div class="blog-entry">
      <h2>Sustainability in Manufacturing</h2>
      <p>Sustainability in manufacturing is no longer just a trend; it has become a necessity for businesses aiming to thrive in today's environmentally conscious market. Manufacturers are increasingly recognizing the importance of sustainable practices, which not only benefit the planet but also enhance their brand reputation and operational efficiency.</p>
      
      <p>One of the key strategies for achieving sustainability is the implementation of energy-efficient processes. By optimizing energy consumption and utilizing renewable energy sources, manufacturers can significantly reduce their carbon footprint. Additionally, many companies are investing in waste reduction initiatives, such as recycling programs and lean manufacturing techniques, to minimize waste generation and promote resource conservation.</p>
      
      <p>Moreover, sustainable supply chain management is gaining traction as manufacturers seek to ensure that their suppliers adhere to environmentally friendly practices. This includes sourcing materials from sustainable sources and collaborating with suppliers to reduce the overall environmental impact of the supply chain.</p>
      
      <p>Furthermore, the adoption of circular economy principles is transforming the way manufacturers approach product design and end-of-life management. By designing products for longevity, repairability, and recyclability, companies can extend the lifecycle of their products and reduce the amount of waste sent to landfills.</p>
      
      <img src="assets\images\team\outreach.jpg" alt="Sustainability" width="640" height="360">
    </div>

    <div class="blog-entry">
      <h2>Automation in Manufacturing</h2>
      <p>Automation has revolutionized the manufacturing landscape, enabling companies to enhance productivity, improve quality, and reduce operational costs. By integrating advanced technologies such as robotics, artificial intelligence, and machine learning, manufacturers can streamline their processes and achieve unprecedented levels of efficiency.</p>
      
      <p>One of the primary benefits of automation is the ability to perform repetitive tasks with precision and speed. Robots can handle assembly, welding, painting, and packaging tasks, freeing up human workers to focus on more complex and value-added activities. This not only increases throughput but also minimizes the risk of human error, leading to higher quality products.</p>
      
      <p>Moreover, automation allows for real-time monitoring and data collection, enabling manufacturers to make informed decisions based on accurate insights. Predictive maintenance powered by data analytics helps identify potential equipment failures before they occur, reducing downtime and maintenance costs.</p>
      
      <p>As the manufacturing industry continues to evolve, the integration of automation technologies will play a crucial role in shaping the future of production. Companies that embrace automation will not only gain a competitive edge but also contribute to a more sustainable and efficient manufacturing ecosystem.</p>
      
      <video width="640" height="360" controls>
        <source src="assets\images\product1\Pipe Elbow Mold  Injection molding machine - Copy.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>

    <div class="blog-entry">
      <h2>Comprehensive Guide to PVC Reducer Manufacturing</h2>
      <p>PVC reducer manufacturing is a sophisticated process that combines material science with precision engineering to create essential pipe fittings for plumbing, industrial, and construction applications. This 500+ word guide covers every aspect of PVC reducer production from raw materials to finished product.</p>

      <h3>PVC Material Science</h3>
      <p>Polyvinyl Chloride (PVC) is the third-most widely produced synthetic plastic polymer. For reducer manufacturing, we use unplasticized PVC (uPVC) which has superior mechanical properties and chemical resistance. The material formulation includes:
      <ul>
        <li><strong>PVC Resin (85-90%):</strong> The base polymer providing structural integrity</li>
        <li><strong>Stabilizers (2-4%):</strong> Typically lead or calcium-based to prevent degradation</li>
        <li><strong>Lubricants (0.5-1.5%):</strong> For smooth processing and mold release</li>
        <li><strong>Impact Modifiers (5-10%):</strong> To enhance durability and fracture resistance</li>
        <li><strong>Pigments (0.5-2%):</strong> For color coding and UV protection</li>
      </ul>
      </p>

      <h3>Detailed Manufacturing Process</h3>
      <p><strong>1. Material Preparation and Compounding:</strong>
      The raw materials undergo high-intensity dry blending at 80-100°C to ensure homogeneous distribution of additives. This pre-mix is then fed into a twin-screw extruder for melt compounding at 170-190°C.</p>

      <p><strong>2. Injection Molding:</strong>
      The compounded material is injected into precision steel molds at 800-1200 bar pressure. The mold temperature is maintained at 40-60°C for optimal crystallization. Cycle times range from 30-90 seconds depending on reducer size.</p>

      <p><strong>3. Cooling and Ejection:</strong>
      After injection, the mold is water-cooled to 30°C. Cooling rates are carefully controlled to prevent warping or internal stresses. Ejection pins remove the finished reducer from the mold.</p>

      <p><strong>4. Post-Processing:</strong>
      Each reducer undergoes:
      <ul>
        <li>Deburring to remove flash and sharp edges</li>
        <li>Socket chamfering for easy pipe insertion</li>
        <li>Surface texturing for improved grip</li>
        <li>Printing of size and pressure ratings</li>
      </ul>
      </p>

      <p><strong>5. Quality Assurance:</strong>
      Every batch is tested for:
      <ul>
        <li>Dimensional accuracy (±0.1mm tolerance)</li>
        <li>Hydrostatic pressure resistance (2x rated pressure)</li>
        <li>Impact strength (IZOD test at 23°C)</li>
        <li>Chemical resistance (immersion in acids/bases)</li>
      </ul>
      </p>

      <h3>Technical Specifications</h3>
      <p>Our PVC reducers meet or exceed these standards:
      <ul>
        <li>ASTM D2466 - Socket-type fittings schedule 40</li>
        <li>ASTM D2467 - Socket-type fittings schedule 80</li>
        <li>NSF/ANSI 61 - Drinking water system components</li>
        <li>ISO 9001:2015 - Quality management systems</li>
      </ul>
      </p>

      <h3>Applications</h3>
      <p>PVC reducers are essential in:
      <ul>
        <li>Residential and commercial plumbing systems</li>
        <li>Industrial chemical processing plants</li>
        <li>Water treatment facilities</li>
        <li>Irrigation systems</li>
        <li>HVAC installations</li>
      </ul>
      </p>

      <video width="640" height="360" controls>
        <source src="assets\images\product1\Plastic Chair Mould 3D Animation.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <p><em>Video: PVC reducer manufacturing process (placeholder - actual video to be added)</em></p>

      <img src="images/pvc_reducer_cross_section.jpg" alt="PVC Reducer Design" width="640" height="360">
      <p><em>Figure 1: Detailed cross-section of a PVC reducer showing wall thickness and taper design</em></p>
    </div>
  </div>

<footer>
  <div class="footer-container">
    <div class="footer-section">
      <h3>About Us</h3>
      <p>Leading manufacturer of high-quality PVC fittings and industrial components since 1995.</p>
    </div>
    <div class="footer-section">
      <h3>Quick Links</h3>
      <a href="index.html">Home</a>
      <a href="products.html">Products</a>
      <a href="blog.php">Blog</a>
      <a href="career.php">Careers</a>
    </div>
    <div class="footer-section">
      <h3>Connect With Us</h3>
      <div class="social-media-icons mt-3">
                    <a href="https://www.facebook.com/profile.php?id=61573705352585"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://x.com/rasmanufac1256"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/sr_plastics71?igsh=MWE3N2o2M3ZmaDlucg%3D%3D"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/sr-plastic-plastic-87a90a317/"><i class="fab fa-linkedin-in"></i></a>
                </div>
      <p>Email: srplasticss.com</p>
      
    </div>
  </div>
  <div class="copyright">
    <p>&copy; 2023 Manufacturing Insights. All Rights Reserved.</p>
  </div>
</footer>
</body>
</html>
