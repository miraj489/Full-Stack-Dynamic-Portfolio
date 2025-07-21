<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Me - Miraj Hassan</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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

  <div class="content-section">
    <div class="page-header">
      <h1 class="page-title">About Me</h1>
      <p class="page-subtitle">Get to know more about my journey and passion</p>
    </div>

    <div class="about-content">
      <div class="about-main">
        <div class="about-text">
          <h2>Hello! I'm Miraj Hassan 👋</h2>
          <p>
            I'm a passionate <strong>Full Stack Developer</strong> with a keen interest in creating innovative web solutions. 
            My journey in technology began during my studies at <strong>Daffodil International University</strong>, where I 
            discovered my love for coding and problem-solving.
          </p>
          
          <p>
            Based in <strong>Pabna, Bangladesh</strong>, I specialize in modern web technologies including Laravel, 
            React, and Vue.js. I believe in writing clean, efficient code and creating user experiences that are 
            both functional and delightful.
          </p>

          <p>
            When I'm not coding, you can find me exploring new technologies, contributing to open-source projects, 
            or learning about the latest trends in web development. I'm always eager to take on new challenges and 
            collaborate with like-minded professionals.
          </p>
        </div>

        <div class="about-stats">
          <div class="stat-item">
            <div class="stat-number">3+</div>
            <div class="stat-label">Years Experience</div>
          </div>
          <div class="stat-item">
            <div class="stat-number">50+</div>
            <div class="stat-label">Projects Completed</div>
          </div>
          <div class="stat-item">
            <div class="stat-number">10+</div>
            <div class="stat-label">Technologies</div>
          </div>
          <div class="stat-item">
            <div class="stat-number">24/7</div>
            <div class="stat-label">Available</div>
          </div>
        </div>
      </div>

      <div class="about-highlights">
        <h3>What I Bring to the Table</h3>
        <div class="highlights-grid">
          <div class="highlight-item">
            <div class="highlight-icon">
              <i class="fas fa-code"></i>
            </div>
            <h4>Clean Code</h4>
            <p>I write maintainable, scalable, and well-documented code following industry best practices.</p>
          </div>

          <div class="highlight-item">
            <div class="highlight-icon">
              <i class="fas fa-lightbulb"></i>
            </div>
            <h4>Problem Solving</h4>
            <p>I excel at breaking down complex problems into manageable solutions with creative approaches.</p>
          </div>

          <div class="highlight-item">
            <div class="highlight-icon">
              <i class="fas fa-users"></i>
            </div>
            <h4>Team Collaboration</h4>
            <p>Strong communication skills and experience working in agile development environments.</p>
          </div>

          <div class="highlight-item">
            <div class="highlight-icon">
              <i class="fas fa-rocket"></i>
            </div>
            <h4>Continuous Learning</h4>
            <p>Always staying updated with the latest technologies and development methodologies.</p>
          </div>
        </div>
      </div>

      <div class="about-personal">
        <h3>Personal Interests</h3>
        <div class="interests-list">
          <span class="interest-tag"><i class="fas fa-laptop-code"></i> Web Development</span>
          <span class="interest-tag"><i class="fas fa-mobile-alt"></i> Mobile Apps</span>
          <span class="interest-tag"><i class="fas fa-database"></i> Database Design</span>
          <span class="interest-tag"><i class="fas fa-cloud"></i> Cloud Computing</span>
          <span class="interest-tag"><i class="fas fa-brain"></i> AI & Machine Learning</span>
          <span class="interest-tag"><i class="fas fa-gamepad"></i> Gaming</span>
          <span class="interest-tag"><i class="fas fa-book"></i> Reading Tech Blogs</span>
          <span class="interest-tag"><i class="fas fa-music"></i> Music</span>
        </div>
      </div>
    </div>
  </div>

  <style>
    .about-content {
      max-width: 1000px;
      margin: 0 auto;
    }

    .about-main {
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 40px;
      margin-bottom: 50px;
      align-items: start;
    }

    .about-text h2 {
      color: #333;
      font-size: 2rem;
      margin-bottom: 20px;
      font-weight: 600;
    }

    .about-text p {
      color: #666;
      line-height: 1.8;
      margin-bottom: 20px;
      font-size: 1.1rem;
    }

    .about-stats {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
    }

    .stat-item {
      text-align: center;
      padding: 25px 15px;
      background: rgba(102, 126, 234, 0.1);
      border-radius: 15px;
      transition: all 0.3s ease;
    }

    .stat-item:hover {
      background: rgba(102, 126, 234, 0.2);
      transform: translateY(-5px);
    }

    .stat-number {
      font-size: 2.5rem;
      font-weight: 800;
      color: #667eea;
      margin-bottom: 5px;
    }

    .stat-label {
      font-size: 0.9rem;
      color: #666;
      font-weight: 500;
    }

    .about-highlights h3 {
      font-size: 1.8rem;
      color: #333;
      margin-bottom: 30px;
      text-align: center;
      font-weight: 600;
    }

    .highlights-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 25px;
      margin-bottom: 50px;
    }

    .highlight-item {
      text-align: center;
      padding: 30px 20px;
      background: rgba(255, 255, 255, 0.7);
      border-radius: 15px;
      transition: all 0.3s ease;
      border: 1px solid rgba(102, 126, 234, 0.1);
    }

    .highlight-item:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
      background: rgba(255, 255, 255, 0.9);
    }

    .highlight-icon {
      width: 60px;
      height: 60px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
      color: white;
      font-size: 1.5rem;
    }

    .highlight-item h4 {
      font-size: 1.2rem;
      color: #333;
      margin-bottom: 15px;
      font-weight: 600;
    }

    .highlight-item p {
      color: #666;
      line-height: 1.6;
      font-size: 0.95rem;
    }

    .about-personal h3 {
      font-size: 1.8rem;
      color: #333;
      margin-bottom: 25px;
      text-align: center;
      font-weight: 600;
    }

    .interests-list {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      justify-content: center;
    }

    .interest-tag {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      padding: 12px 20px;
      border-radius: 25px;
      font-size: 0.9rem;
      font-weight: 500;
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .interest-tag:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
    }

    .interest-tag i {
      margin-right: 8px;
    }

    @media (max-width: 768px) {
      .about-main {
        grid-template-columns: 1fr;
        gap: 30px;
      }

      .about-stats {
        grid-template-columns: repeat(2, 1fr);
      }

      .highlights-grid {
        grid-template-columns: 1fr;
      }

      .interests-list {
        gap: 10px;
      }

      .interest-tag {
        padding: 8px 15px;
        font-size: 0.85rem;
      }
    }
  </style>
</body>
</html>