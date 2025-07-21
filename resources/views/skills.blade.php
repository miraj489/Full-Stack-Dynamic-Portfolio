
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Skills - Miraj Hassan</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    /* Page title visibility */
    .page-header h1 {
      color: #fff !important;
      text-shadow: 0 2px 4px rgba(0,0,0,0.5);
      margin-bottom: 20px;
      font-size: 2.5rem;
      font-weight: 700;
      text-align: center;
    }

    .page-header .intro {
      color: rgba(255, 255, 255, 0.9) !important;
      text-shadow: 0 1px 2px rgba(0,0,0,0.3);
      text-align: center;
      margin-bottom: 40px;
      font-size: 1.1rem;
    }

    .skills-list {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 30px;
      margin: 50px 0;
    }

    .skill-card {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      border-radius: 20px;
      padding: 40px 30px;
      text-align: center;
      transition: all 0.3s ease;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    }

    .skill-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
    }

    .skill-card h2 {
      color: #333;
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 25px;
    }

    .skills {
      text-align: left;
      margin-bottom: 25px;
    }

    .skills p {
      color: #fff;
      margin: 12px 0;
      font-size: 0.95rem;
      font-weight: 500;
      display: flex;
      align-items: center;
    }

    .skill-icon {
      width: 80px;
      height: 80px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 25px;
      color: white;
      font-size: 2rem;
      box-shadow: 0 4px 20px rgba(102, 126, 234, 0.3);
    }

    .proficiency {
      margin-top: 25px;
      text-align: left;
    }

    .proficiency-label {
      font-size: 0.9rem;
      color: #666;
      font-weight: 600;
      margin-bottom: 8px;
      display: block;
    }

    .proficiency-bar {
      width: 100%;
      height: 10px;
      background: rgba(102, 126, 234, 0.15);
      border-radius: 5px;
      overflow: hidden;
      position: relative;
    }

    .proficiency-fill {
      height: 100%;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border-radius: 5px;
      width: 0%;
      transition: width 2s ease-in-out;
      position: relative;
      overflow: hidden;
    }

    .proficiency-fill::after {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
      animation: shimmer 2s infinite;
    }

    @keyframes shimmer {
      0% { left: -100%; }
      100% { left: 100%; }
    }

    .skills-summary {
      margin-top: 60px;
      text-align: center;
    }

    .skills-summary h3 {
      font-size: 2rem;
      color: #fff;
      margin-bottom: 40px;
      font-weight: 600;
      text-shadow: 0 2px 4px rgba(0,0,0,0.5);
    }

    .summary-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 25px;
    }

    .summary-item {
      background: rgba(255, 255, 255, 0.95);
      padding: 30px 20px;
      border-radius: 15px;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(20px);
      transition: all 0.3s ease;
    }

    .summary-item:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
    }

    .summary-number {
      font-size: 3rem;
      font-weight: 800;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 10px;
    }

    .summary-text {
      color: #666;
      font-weight: 500;
      font-size: 1rem;
    }

    .skills p i {
      margin-right: 12px;
      width: 20px;
      color: #fff;
    }

    @media (max-width: 768px) {
      .skills-list {
        grid-template-columns: 1fr;
        gap: 25px;
      }

      .summary-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
      }

      .skill-icon {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
      }

      .summary-number {
        font-size: 2.5rem;
      }
    }

    @media (max-width: 480px) {
      .summary-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
  <nav class="navbar">
    <ul>
      <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a></li>
      <li><a href="{{ url('/about') }}"><i class="fas fa-user"></i> About</a></li>
      <li><a href="{{ url('/skills') }}" class="active"><i class="fas fa-code"></i> Skills</a></li>
      <li><a href="{{ url('/education') }}"><i class="fas fa-graduation-cap"></i> Education</a></li>
      <li><a href="{{ url('/work') }}"><i class="fas fa-briefcase"></i> Experience</a></li>
      <li><a href="{{ url('/contact') }}"><i class="fas fa-envelope"></i> Contact</a></li>
    </ul>
  </nav>

  <div class="main-content">
    <div class="container">
      <div class="page-header">
        <h1><i class="fas fa-code"></i> My Technical Skills</h1>
        <p class="intro">Here's an overview of the technologies and tools I work with to create amazing digital experiences.</p>
      </div>
      
      <div class="skills-list">
        <div class="skill-card">
          <div class="skill-icon">
            <i class="fas fa-code"></i>
          </div>
          <h2>Frontend Development</h2>
          <div class="skills">
            <p><i class="fab fa-html5"></i> HTML5</p>
            <p><i class="fab fa-css3-alt"></i> CSS3</p>
            <p><i class="fab fa-js-square"></i> JavaScript</p>
            <p><i class="fab fa-react"></i> React.js</p>
            <p><i class="fab fa-vuejs"></i> Vue.js</p>
            <p><i class="fab fa-bootstrap"></i> Bootstrap</p>
            <p><i class="fab fa-sass"></i> Sass/SCSS</p>
            <p>🎨 Tailwind CSS</p>
          </div>
          <div class="proficiency">
            <span class="proficiency-label">Proficiency:</span>
            <div class="proficiency-bar">
              <div class="proficiency-fill" data-width="90"></div>
            </div>
          </div>
        </div>
        
        <div class="skill-card">
          <div class="skill-icon">
            <i class="fas fa-server"></i>
          </div>
          <h2>Backend Development</h2>
          <div class="skills">
            <p><i class="fab fa-php"></i> PHP</p>
            <p><i class="fab fa-laravel"></i> Laravel</p>
            <p><i class="fab fa-node-js"></i> Node.js</p>
            <p><i class="fab fa-python"></i> Python</p>
            <p><i class="fas fa-link"></i> RESTful APIs</p>
            <p><i class="fas fa-lock"></i> Authentication</p>
            <p><i class="fas fa-bolt"></i> Performance Optimization</p>
          </div>
          <div class="proficiency">
            <span class="proficiency-label">Proficiency:</span>
            <div class="proficiency-bar">
              <div class="proficiency-fill" data-width="85"></div>
            </div>
          </div>
        </div>
        
        <div class="skill-card">
          <div class="skill-icon">
            <i class="fas fa-database"></i>
          </div>
          <h2>Database & Tools</h2>
          <div class="skills">
            <p><i class="fas fa-database"></i> MySQL</p>
            <p><i class="fas fa-leaf"></i> MongoDB</p>
            <p><i class="fab fa-git-alt"></i> Git & GitHub</p>
            <p><i class="fab fa-docker"></i> Docker</p>
            <p><i class="fas fa-code"></i> VS Code</p>
            <p><i class="fas fa-terminal"></i> Command Line</p>
            <p><i class="fas fa-chart-bar"></i> Database Design</p>
          </div>
          <div class="proficiency">
            <span class="proficiency-label">Proficiency:</span>
            <div class="proficiency-bar">
              <div class="proficiency-fill" data-width="80"></div>
            </div>
          </div>
        </div>

        <div class="skill-card">
          <div class="skill-icon">
            <i class="fas fa-mobile-alt"></i>
          </div>
          <h2>Additional Skills</h2>
          <div class="skills">
            <p><i class="fas fa-mobile-alt"></i> Responsive Design</p>
            <p><i class="fas fa-paint-brush"></i> UI/UX Design</p>
            <p><i class="fas fa-search"></i> SEO Optimization</p>
            <p><i class="fas fa-chart-line"></i> Web Analytics</p>
            <p><i class="fas fa-shield-alt"></i> Web Security</p>
            <p><i class="fas fa-rocket"></i> Performance Testing</p>
            <p><i class="fas fa-bullseye"></i> Problem Solving</p>
          </div>
          <div class="proficiency">
            <span class="proficiency-label">Proficiency:</span>
            <div class="proficiency-bar">
              <div class="proficiency-fill" data-width="75"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="skills-summary">
        <h3><i class="fas fa-chart-pie"></i> Skill Highlights</h3>
        <div class="summary-grid">
          <div class="summary-item">
            <div class="summary-number" id="lang-count">0</div>
            <div class="summary-text">Programming Languages</div>
          </div>
          <div class="summary-item">
            <div class="summary-number" id="framework-count">0</div>
            <div class="summary-text">Frameworks & Libraries</div>
          </div>
          <div class="summary-item">
            <div class="summary-number" id="tool-count">0</div>
            <div class="summary-text">Tools & Technologies</div>
          </div>
          <div class="summary-item">
            <div class="summary-number" id="exp-years">0</div>
            <div class="summary-text">Years of Experience</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Auto-incrementing counters for summary
    function animateCounter(element, target, duration = 2000) {
      let start = 0;
      const increment = target / (duration / 16);
      
      function updateCounter() {
        start += increment;
        if (start < target) {
          element.textContent = Math.floor(start) + (target >= 10 ? '+' : '');
          requestAnimationFrame(updateCounter);
        } else {
          element.textContent = target + (target >= 10 ? '+' : '');
        }
      }
      updateCounter();
    }

    // Animate proficiency bars
    function animateProficiencyBars() {
      const proficiencyFills = document.querySelectorAll('.proficiency-fill');
      
      proficiencyFills.forEach((fill, index) => {
        const width = fill.getAttribute('data-width');
        setTimeout(() => {
          fill.style.width = width + '%';
        }, index * 200);
      });
    }

    // Start animations when page loads
    window.addEventListener('load', function() {
      // Animate proficiency bars first
      setTimeout(() => {
        animateProficiencyBars();
      }, 500);

      // Then animate counters
      setTimeout(() => {
        animateCounter(document.getElementById('lang-count'), 8);
        animateCounter(document.getElementById('framework-count'), 12);
        animateCounter(document.getElementById('tool-count'), 15);
        animateCounter(document.getElementById('exp-years'), 3);
      }, 1000);
    });
  </script>
</body>
</html>