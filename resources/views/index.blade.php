<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Miraj's Portfolio - Full Stack Developer</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    .hero-section {
      min-height: 90vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0 20px;
    }

    .hero-content {
      text-align: center;
      max-width: 800px;
      margin: 0 auto;
    }

    .hero-title {
      font-size: 3.5rem;
      font-weight: 800;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 20px;
      line-height: 1.2;
    }

    .hero-subtitle {
      font-size: 1.5rem;
      color: #555;
      margin-bottom: 30px;
      font-weight: 300;
    }

    .hero-description {
      font-size: 1.1rem;
      color: #666;
      margin-bottom: 40px;
      line-height: 1.6;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }

    .cta-buttons {
      display: flex;
      gap: 20px;
      justify-content: center;
      flex-wrap: wrap;
      margin-bottom: 50px;
    }

    .btn-primary {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      padding: 15px 30px;
      border-radius: 50px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
    }

    .btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
    }

    .btn-outline {
      background: transparent;
      color: #667eea;
      padding: 15px 30px;
      border: 2px solid #667eea;
      border-radius: 50px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-outline:hover {
      background: #667eea;
      color: white;
      transform: translateY(-3px);
    }

    .social-links {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-top: 30px;
    }

    .social-links a {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 50px;
      height: 50px;
      background: rgba(255, 255, 255, 0.9);
      border-radius: 50%;
      color: #333;
      font-size: 1.2rem;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .social-links a:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
    }

    .features-section {
      background: rgba(255, 255, 255, 0.95);
      margin: 20px;
      padding: 80px 40px;
      border-radius: 20px;
      backdrop-filter: blur(20px);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    }

    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .feature-card {
      background: rgba(255, 255, 255, 0.9);
      padding: 40px 30px;
      border-radius: 15px;
      text-align: center;
      transition: all 0.3s ease;
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    }

    .feature-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 40px rgba(0, 0, 0, 0.1);
    }

    .feature-icon {
      font-size: 3rem;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 20px;
    }

    .feature-title {
      font-size: 1.5rem;
      font-weight: 600;
      color: #333;
      margin-bottom: 15px;
    }

    .feature-description {
      color: #666;
      line-height: 1.6;
    }

    .stats-section {
      background: rgba(255, 255, 255, 0.95);
      margin: 20px;
      padding: 60px 40px;
      border-radius: 20px;
      backdrop-filter: blur(20px);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 40px;
      max-width: 800px;
      margin: 40px auto 0;
    }

    .stat-item {
      padding: 20px;
    }

    .stat-number {
      font-size: 3rem;
      font-weight: 800;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 10px;
    }

    .stat-label {
      font-size: 1.1rem;
      color: #666;
      font-weight: 500;
    }

    @media (max-width: 768px) {
      .hero-title {
        font-size: 2.5rem;
      }

      .hero-subtitle {
        font-size: 1.2rem;
      }

      .cta-buttons {
        flex-direction: column;
        align-items: center;
      }

      .features-section,
      .stats-section {
        margin: 10px;
        padding: 40px 20px;
      }
    }
  </style>
</head>
<body>
  <nav class="navbar">
    <ul>
      <li><a href="{{ url('/') }}">Home</a></li>
      <li><a href="{{ url('/about') }}">About</a></li>
      <li><a href="{{ url('/skills') }}">Skills</a></li>
      <li><a href="{{ url('/education') }}">Education</a></li>
      <li><a href="{{ url('/work') }}">Work Experience</a></li>
      <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
  </nav>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="hero-content">
      <h1 class="hero-title">Hello, I'm Miraj</h1>
      <h2 class="hero-subtitle">Full Stack Developer & Problem Solver</h2>
      <p class="hero-description">
        I create modern, responsive web applications with clean code and exceptional user experiences. 
        Passionate about turning ideas into digital reality through innovative solutions.
      </p>
      
      <div class="cta-buttons">
        <a href="{{ url('/work') }}" class="btn-primary">
          <i class="fas fa-briefcase"></i> View My Work
        </a>
        <a href="{{ url('/contact') }}" class="btn-outline">
          <i class="fas fa-envelope"></i> Get In Touch
        </a>
      </div>

      <div class="social-links">
        <a href="https://github.com/" target="_blank" title="GitHub">
          <i class="fab fa-github"></i>
        </a>
        <a href="https://linkedin.com/" target="_blank" title="LinkedIn">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="https://facebook.com/" target="_blank" title="Facebook">
          <i class="fab fa-facebook"></i>
        </a>
        <a href="https://t.me/" target="_blank" title="Telegram">
          <i class="fab fa-telegram"></i>
        </a>
        <a href="mailto:miraj@example.com" title="Email">
          <i class="fas fa-envelope"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features-section">
    <div class="page-header">
      <h2 class="page-title">What I Do</h2>
      <p class="page-subtitle">Comprehensive web development services</p>
    </div>

    <div class="features-grid">
      <div class="feature-card">
        <div class="feature-icon">
          <i class="fas fa-code"></i>
        </div>
        <h3 class="feature-title">Web Development</h3>
        <p class="feature-description">
          Building responsive, scalable web applications using modern frameworks like Laravel, React, and Vue.js.
        </p>
      </div>

      <div class="feature-card">
        <div class="feature-icon">
          <i class="fas fa-mobile-alt"></i>
        </div>
        <h3 class="feature-title">Mobile Responsive</h3>
        <p class="feature-description">
          Creating seamless experiences across all devices with mobile-first responsive design approaches.
        </p>
      </div>

      <div class="feature-card">
        <div class="feature-icon">
          <i class="fas fa-database"></i>
        </div>
        <h3 class="feature-title">Database Design</h3>
        <p class="feature-description">
          Designing efficient database architectures and optimizing queries for maximum performance.
        </p>
      </div>

      <div class="feature-card">
        <div class="feature-icon">
          <i class="fas fa-cogs"></i>
        </div>
        <h3 class="feature-title">API Development</h3>
        <p class="feature-description">
          Developing robust RESTful APIs and integrating third-party services for enhanced functionality.
        </p>
      </div>

      <div class="feature-card">
        <div class="feature-icon">
          <i class="fas fa-shield-alt"></i>
        </div>
        <h3 class="feature-title">Security & Performance</h3>
        <p class="feature-description">
          Implementing security best practices and optimizing applications for speed and reliability.
        </p>
      </div>

      <div class="feature-card">
        <div class="feature-icon">
          <i class="fas fa-users"></i>
        </div>
        <h3 class="feature-title">Collaboration</h3>
        <p class="feature-description">
          Working effectively in teams using version control, agile methodologies, and clear communication.
        </p>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="stats-section">
    <div class="page-header">
      <h2 class="page-title">By The Numbers</h2>
      <p class="page-subtitle">A snapshot of my experience and achievements</p>
    </div>

    <div class="stats-grid">
      <div class="stat-item">
        <div class="stat-number">50+</div>
        <div class="stat-label">Projects Completed</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">3+</div>
        <div class="stat-label">Years Experience</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">15+</div>
        <div class="stat-label">Technologies Mastered</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">100%</div>
        <div class="stat-label">Client Satisfaction</div>
      </div>
    </div>
  </section>

  <script>
    // Add smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });

    // Add animation on scroll
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
        }
      });
    }, observerOptions);

    // Observe all feature cards and stats
    document.querySelectorAll('.feature-card, .stat-item').forEach(el => {
      el.style.opacity = '0';
      el.style.transform = 'translateY(30px)';
      el.style.transition = 'all 0.6s ease';
      observer.observe(el);
    });

    // Counter animation for stats
    function animateValue(element, start, end, duration) {
      let startTimestamp = null;
      const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        const current = Math.floor(progress * (end - start) + start);
        element.innerHTML = current + (element.dataset.suffix || '');
        if (progress < 1) {
          window.requestAnimationFrame(step);
        }
      };
      window.requestAnimationFrame(step);
    }

    // Animate stats when they come into view
    const statsObserver = new IntersectionObserver(function(entries) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const statNumber = entry.target.querySelector('.stat-number');
          const finalValue = parseInt(statNumber.textContent);
          if (statNumber.textContent.includes('%')) {
            statNumber.dataset.suffix = '%';
            animateValue(statNumber, 0, finalValue, 2000);
          } else if (statNumber.textContent.includes('+')) {
            statNumber.dataset.suffix = '+';
            animateValue(statNumber, 0, finalValue, 2000);
          } else {
            animateValue(statNumber, 0, finalValue, 2000);
          }
          statsObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    document.querySelectorAll('.stat-item').forEach(stat => {
      statsObserver.observe(stat);
    });
  </script>
</body>
</html>