<section class="hero-section">
  <style>
    .hero-section {
      color: white;
      padding: 60px 0px;
      margin: 0 auto;
      margin-left: 200px;
      margin-right: 200px;
      text-align: center;
      position: relative;
      background: rgba(255, 255, 255, 0.09);
      z-index: 100;
      backdrop-filter: blur(12px);
    }

    .hero-section h1 {
      font-size: 65px;
      font-weight: bold;
      margin-bottom: 18px;
    }

    .hero-section p {
        margin: 50px auto 30px;
      font-size: 20px;
      opacity: 0.9;
      margin-bottom: 50px;
      padding: 10px;
    }

    .cta-button {
      display: inline-block;
      margin-top: 25px;
      padding: 12px 25px;
      background-color: #4CAF50;
      color: black;
      font-weight: bold;
      border-radius: 8px;
      text-decoration: none;
      font-size: 16px;
      transition: background 0.3s ease;
    }

    .cta-button:hover {
      background-color: #388e3c;
      color: white;
    }

    /* Features */
    .features-section {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      margin: 50px auto 30px;
      padding: 10px 20px;
      max-width: 1100px;
      z-index: 2;
      position: relative;
    }

    .feature-card {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(3px);
      padding: 20px;
      width: 220px;
      border-radius: 10px;
      text-align: center;
      color: white;
      transition: transform 0.3s ease;
      box-shadow: 0 0 10px rgba(0,0,0,0.3);
    }

    .feature-card:hover {
      transform: translateY(-20px);
      background: rgba(0, 0, 0, 0.5);
      
    }

    .feature-card i {
      font-size: 30px;
      margin-bottom: 10px;
      color: #4CAF50;
    }

    .feature-card h3 {
      font-size: 18px;
      margin-bottom: 5px;
    }

    .testimonial-section {
      margin: 50px auto 30px;
      max-width: 800px;
      padding: 20px;
      text-align: center;
      font-style: italic;
      color: #ccc;
      z-index: 2;
      position: relative;
    }

    .testimonial-section p {
      margin-bottom: 10px;
    }

.gallery-slider {
  max-width: 100%;
  height: 400px;  /* Adjust as needed */
  margin: 50px auto;
  overflow: hidden;
  border-radius: 12px;
  position: relative;
  box-shadow: 0 0 15px rgba(0,0,0,0.3);
  background: rgba(255, 255, 255, 0.09); /* Optional: shows behind if image doesn’t fill area */
  backdrop-filter: blur(12px);
}

.gallery-track {
  display: flex;
  width: 50%; /* 100% x number of images */
  height: 100%;
  animation: slideGallery 15s infinite ease-in-out;
}

.gallery-track img {
  flex: 0 0 100%;
  height: 100%;
  width: 100%;
  object-fit: contain; /* This fits the entire image without cropping */
  background-color: rgba(255, 255, 255, 0.09); /* Optional: fills space around image */
  backdrop-filter: blur(12px);
  padding: 10px; /* Optional: adds spacing to look clean */
}

  @keyframes slideGallery {
    0%, 15%   { transform: translateX(0); }
    20%, 35%  { transform: translateX(-100%); }
    40%, 55%  { transform: translateX(-200%); }
    60%, 75%  { transform: translateX(-300%); }
    80%, 95%  { transform: translateX(-400%); }
    100%      { transform: translateX(0); }
  }

  @media screen and (max-width: 768px) {
    .gallery-slider {
      height: 200px;
    }
    .gallery-track img {
      height: 200px;
    }
  }

    /* Upload section */
    .upload-section {
      max-width: 800px;
      margin: 60px auto;
      padding: 20px;
      text-align: center;
      color: white;
      z-index: 2;
      position: relative;
    }

    .upload-section h2 {
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .upload-list {
      text-align: left;
      display: inline-block;
      font-size: 16px;
      line-height: 2;
    }

    .upload-list li {
      list-style: none;
    }

    .upload-list li::before {
      content: '✔️';
      color: #4CAF50;
      margin-right: 10px;
    }

    @media screen and (max-width: 768px) {
      .feature-card {
        width: 90%;
      }

      .hero-section h1 {
        font-size: 28px;
      }

      .upload-section h2 {
        font-size: 22px;
      }
    }


  </style>

  <!-- HERO CONTENT -->
  <h1>Welcome to ECExchange</h1>
  <p>A resource-sharing platform. Secure, organized, and made for<br> the students and teachers of ECE department at RUET.</p>
  <a href="login.php" class="cta-button">Start Sharing</a>

  <!-- FEATURES -->
  <div class="features-section">
    <div class="feature-card">
      <i class="fas fa-upload"></i>
      <h3>Upload Resources</h3>
      <p>Notes, books, past questions, slides, and more – all in one place.</p>
    </div>
    <div class="feature-card">
      <i class="fas fa-unlock"></i>
      <h3>Access Anytime</h3>
      <p>Download materials by semester or course anytime, anywhere.</p>
    </div>
    <div class="feature-card">
      <i class="fas fa-folder-open"></i>
      <h3>Safe & Structured</h3>
      <p>Structured folders by course codes. No more messy drives.</p>
    </div>
    <div class="feature-card">
      <i class="fas fa-users"></i>
      <h3>Batch Community</h3>
      <p>Help juniors, discuss topics, and be part of the learning culture.</p>
    </div>
    <div class="feature-card">
      <i class="fa-brands fa-researchgate"></i>
      <h3>Teacher-Student Bridge</h3>
      <p>Offers students a glimpse into the teacher's academic and research interests.</p>
    </div>
  </div>

  <div class="gallery-slider">
  <div class="gallery-track">
    <img src="img/eceOffice.jpeg" alt="ECE Office" />
    <img src="img/ece22Cover.jpeg" alt="ECE 22 Cover" />
    <img src="img/ecePhoto.jpeg" alt="Department Photo" />
    <img src="img/event4.jpg" alt="Event 4" />
    <img src="img/event5.jpeg" alt="Event 5" />
    <img src="img/event6.jpeg" alt="Event 6" />
    <img src="img/even1.jpeg" alt="Event 1" />
    <img src="img/event2.jpeg" alt="Event 2" />
    <img src="img/event3.jpeg" alt="Event 3" />

  </div>
</div>
  <!-- TESTIMONIAL -->
  <div class="testimonial-section">
    <p>“Wish I had noted everything teacher taught in the class :( !<br>
    If I had a genie, I'd ask him to bring everyone's class notes *_* !”</p>
    <strong>— Anonymous Student, ECE 22</strong>
  </div>

  <!-- WHAT TO UPLOAD -->
  <div class="upload-section">
    <h2>What can you upload?</h2>
    <ul class="upload-list">
      <li>Lecture slides (PDF/PowerPoint)</li>
      <li>Class notes (handwritten or typed)</li>
      <li>Books & references</li>
      <li>Lab reports & projects</li>
      <li>Question banks & past papers</li>
      <li>Tools, code, or simulation files</li>
      <li>Free version research papers</li>
    </ul>
  </div>
</section>