
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Work Experience - Miraj's Portfolio</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    .stats-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
      margin: 40px 0;
    }

    .stat-card {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      border-radius: 15px;
      padding: 30px 20px;
      text-align: center;
      transition: transform 0.3s ease;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .stat-card:hover {
      transform: translateY(-5px);
    }

    .stat-number {
      font-size: 2.5rem;
      font-weight: 700;
      color: #333;
      margin-bottom: 10px;
    }

    .stat-label {
      color: #666;
      font-weight: 500;
      font-size: 1rem;
    }

    .experience-timeline {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 30px;
      max-width: 1000px;
      margin: 50px auto;
    }

    .timeline-item {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      border-radius: 15px;
      padding: 30px;
      position: relative;
      transition: transform 0.3s ease;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .timeline-item:hover {
      transform: translateY(-5px);
    }

    .job-header {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .job-icon {
      width: 50px;
      height: 50px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 1.2rem;
      margin-right: 20px;
    }

    .job-info h3 {
      color: #333;
      margin: 0 0 5px 0;
      font-size: 1.3rem;
    }

    .job-duration {
      color: #666;
      font-size: 0.9rem;
    }

    .company-name {
      color: #667eea;
      font-weight: 600;
      margin-bottom: 15px;
      font-size: 1.1rem;
    }

    .job-description {
      color: #555;
      line-height: 1.6;
      margin-bottom: 20px;
    }

    .tech-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
    }

    .tech-tag {
      background: rgba(102, 126, 234, 0.8);
      color: white;
      padding: 5px 12px;
      border-radius: 20px;
      font-size: 0.85rem;
      backdrop-filter: blur(5px);
    }

    .cta-section {
      text-align: center;
      margin-top: 60px;
      padding: 40px 20px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 20px;
      backdrop-filter: blur(10px);
    }

    .cta-section h2 {
      color: #fff;
      margin-bottom: 15px;
    }

    .cta-section p {
      color: rgba(255, 255, 255, 0.9);
      margin-bottom: 30px;
      max-width: 500px;
      margin-left: auto;
      margin-right: auto;
    }

    @media (max-width: 768px) {
      .job-header {
        flex-direction: column;
        text-align: center;
      }
      
      .job-icon {
        margin-right: 0;
        margin-bottom: 15px;
      }

      .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
      }

      .experience-timeline {
        grid-template-columns: 1fr;
        gap: 20px;
      }

      .stat-card {
        padding: 20px 15px;
      }
    }

    @media (max-width: 480px) {
      .stats-grid {
        grid-template-columns: 1fr;
        gap: 15px;
      }

      .experience-timeline {
        grid-template-columns: 1fr;
        gap: 15px;
      }
    }

    /* Add page title visibility */
    .page-title {
      color: #fff !important;
      text-shadow: 0 2px 4px rgba(0,0,0,0.5);
      margin-bottom: 20px;
      font-size: 2.5rem;
      font-weight: 700;
      text-align: center;
    }
  </style>
</head>
<body>
  <nav class="navbar">
    <ul>
      <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a></li>
      <li><a href="{{ url('/about') }}"><i class="fas fa-user"></i> About</a></li>
      <li><a href="{{ url('/skills') }}"><i class="fas fa-code"></i> Skills</a></li>
      <li><a href="{{ url('/education') }}"><i class="fas fa-graduation-cap"></i> Education</a></li>
      <li><a href="{{ url('/work') }}"><i class="fas fa-briefcase"></i> Experience</a></li>
      <li><a href="{{ url('/contact') }}"><i class="fas fa-envelope"></i> Contact</a></li>
    </ul>
  </nav>

  <div class="main-content">
    <div class="container">
      <h1 class="page-title"><i class="fas fa-briefcase"></i> Work Experience</h1>
      
      <!-- Experience Stats -->
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-number" id="years-exp">0</div>
          <div class="stat-label">Years Experience</div>
        </div>
        <div class="stat-card">
          <div class="stat-number" id="projects-count">0</div>
          <div class="stat-label">Projects Completed</div>
        </div>
        <div class="stat-card">
          <div class="stat-number" id="tech-count">0</div>
          <div class="stat-label">Technologies Used</div>
        </div>
        <div class="stat-card">
          <div class="stat-number" id="satisfaction">0%</div>
          <div class="stat-label">Client Satisfaction</div>
        </div>
      </div>

      <!-- Experience Timeline -->
      <div class="experience-timeline">
        <div class="timeline-item">
          <div class="job-header">
            <div class="job-icon">
              <i class="fas fa-code"></i>
            </div>
            <div class="job-info">
              <h3>Senior Web Developer</h3>
              <div class="job-duration">2022 - Present</div>
            </div>
          </div>
          <div class="company-name">ER Tech Solutions</div>
          <div class="job-description">
            Leading development of enterprise web applications and mentoring junior developers. Responsible for architecture decisions and code quality.
          </div>
          <div class="tech-tags">
            <span class="tech-tag">Laravel</span>
            <span class="tech-tag">React</span>
            <span class="tech-tag">Vue.js</span>
            <span class="tech-tag">MySQL</span>
            <span class="tech-tag">AWS</span>
          </div>
        </div>

        <div class="timeline-item">
          <div class="job-header">
            <div class="job-icon">
              <i class="fas fa-coffee"></i>
            </div>
            <div class="job-info">
              <h3>Software Developer (Java)</h3>
              <div class="job-duration">2023 - Present</div>
            </div>
          </div>
          <div class="company-name">TechCorp Solutions</div>
          <div class="job-description">
            Developing enterprise Java applications and RESTful APIs. Working with Spring Boot framework and microservices architecture for scalable solutions.
          </div>
          <div class="tech-tags">
            <span class="tech-tag">Java</span>
            <span class="tech-tag">Spring Boot</span>
            <span class="tech-tag">Maven</span>
            <span class="tech-tag">PostgreSQL</span>
            <span class="tech-tag">Docker</span>
          </div>
        </div>

        <div class="timeline-item">
          <div class="job-header">
            <div class="job-icon">
              <i class="fas fa-laptop-code"></i>
            </div>
            <div class="job-info">
              <h3>Full Stack Developer</h3>
              <div class="job-duration">2021 - 2022</div>
            </div>
          </div>
          <div class="company-name">FreelanceHub Solutions</div>
          <div class="job-description">
            Created custom web solutions for businesses. Managed complete project lifecycle from requirements to deployment.
          </div>
          <div class="tech-tags">
            <span class="tech-tag">PHP</span>
            <span class="tech-tag">WordPress</span>
            <span class="tech-tag">JavaScript</span>
            <span class="tech-tag">Bootstrap</span>
            <span class="tech-tag">MySQL</span>
          </div>
        </div>

        <div class="timeline-item">
          <div class="job-header">
            <div class="job-icon">
              <i class="fas fa-tools"></i>
            </div>
            <div class="job-info">
              <h3>IT Support & Web Assistant</h3>
              <div class="job-duration">2020 - 2021</div>
            </div>
          </div>
          <div class="company-name">GYM Fitness Club</div>
          <div class="job-description">
            Provided IT support and maintained website. Implemented online booking system and improved user experience.
          </div>
          <div class="tech-tags">
            <span class="tech-tag">HTML/CSS</span>
            <span class="tech-tag">JavaScript</span>
            <span class="tech-tag">WordPress</span>
            <span class="tech-tag">cPanel</span>
          </div>
        </div>
      </div>

      <!-- Call to Action -->
      <div class="cta-section">
        <h2>Let's Work Together</h2>
        <p>Ready to bring your ideas to life? I'm always excited to take on new challenges and create amazing digital experiences.</p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
          <a href="{{ url('/contact') }}" class="btn">
            <i class="fas fa-envelope"></i> Get In Touch
          </a>
          <a href="#" class="btn btn-outline">
            <i class="fas fa-download"></i> Download CV
          </a>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Auto-incrementing counters
    function animateCounter(element, target, duration = 2000) {
      let start = 0;
      const increment = target / (duration / 16);
      
      function updateCounter() {
        start += increment;
        if (start < target) {
          element.textContent = Math.floor(start);
          requestAnimationFrame(updateCounter);
        } else {
          element.textContent = target;
        }
      }
      updateCounter();
    }

    // Start animations when page loads
    window.addEventListener('load', function() {
      setTimeout(() => {
        animateCounter(document.getElementById('years-exp'), 3);
        animateCounter(document.getElementById('projects-count'), 45);
        animateCounter(document.getElementById('tech-count'), 15);
        
        // Special handling for percentage
        const satisfactionElement = document.getElementById('satisfaction');
        let start = 0;
        const target = 98;
        const increment = target / (2000 / 16);
        
        function updatePercentage() {
          start += increment;
          if (start < target) {
            satisfactionElement.textContent = Math.floor(start) + '%';
            requestAnimationFrame(updatePercentage);
          } else {
            satisfactionElement.textContent = target + '%';
          }
        }
        updatePercentage();
      }, 500);
    });
  </script>
</body>
</html>