<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Miraj Hassan - Full Stack Developer</title>
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

  <!-- Background floating icons -->
  <div class="background-icons">
    <div class="bg-icon" style="--delay: 0s; --x: 10%; --y: 20%;">💻</div>
    <div class="bg-icon" style="--delay: 1s; --x: 85%; --y: 15%;">🚀</div>
    <div class="bg-icon" style="--delay: 2s; --x: 15%; --y: 70%;">⚡</div>
    <div class="bg-icon" style="--delay: 3s; --x: 80%; --y: 60%;">🎯</div>
    <div class="bg-icon" style="--delay: 4s; --x: 25%; --y: 40%;">⭐</div>
    <div class="bg-icon" style="--delay: 5s; --x: 75%; --y: 80%;">🔥</div>
  </div>

  <main class="main-section">
    <div class="left">
      <h2>👋 Hello, I'm</h2>
      <h1> MD Mirajul Rahman</h1>
      <p>A passionate <strong>Full Stack Developer</strong> specializing in modern web technologies. I create elegant, efficient, and user-friendly digital solutions that make a difference.</p>
      
      <div class="cta-buttons">
        <a href="{{ url('/about') }}" class="btn">
          <i class="fas fa-user"></i> Learn More About Me
        </a>
        <a href="{{ url('/contact') }}" class="btn btn-outline">
          <i class="fas fa-envelope"></i> Get In Touch
        </a>
      </div>

      <div class="social-links">
        <a href="https://github.com" target="_blank" title="GitHub">
          <i class="fab fa-github"></i>
        </a>
        <a href="https://linkedin.com" target="_blank" title="LinkedIn">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="https://facebook.com" target="_blank" title="Facebook">
          <i class="fab fa-facebook"></i>
        </a>
        <a href="https://twitter.com" target="_blank" title="Twitter">
          <i class="fab fa-twitter"></i>
        </a>
      </div>
    </div>

    <div class="right">
      <div class="profile-container">
        <div class="profile-pic">
          <img src="{{ asset('assets/images/mypic.jpg') }}" alt="Miraj Hassan" class="profile-image">
        </div>
      </div>
    </div>
  </main>

  <style>
    .btn-outline {
      background: transparent;
      border: 2px solid #667eea;
      color: #667eea;
    }

    .btn-outline:hover {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
    }

    .cta-buttons {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
      margin-bottom: 40px;
    }

    .social-links {
      display: flex;
      gap: 20px;
    }

    .social-links a {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 50px;
      height: 50px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      color: #667eea;
      font-size: 1.5rem;
      transition: all 0.3s ease;
      backdrop-filter: blur(10px);
    }

    .social-links a:hover {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      transform: translateY(-3px);
    }

    .profile-container {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .profile-pic {
      width: 300px;
      height: 300px;
      border-radius: 50%;
      border: 5px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
      transition: all 0.3s ease;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .profile-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
    }

    .profile-pic:hover {
      transform: scale(1.05);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
    }

    /* Background floating icons */
    .background-icons {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: -1;
      overflow: hidden;
    }

    .bg-icon {
      position: absolute;
      font-size: 2.5rem;
      opacity: 0.1;
      color: #667eea;
      animation: bounce 4s ease-in-out infinite;
      animation-delay: var(--delay);
      left: var(--x);
      top: var(--y);
    }

    @keyframes bounce {
      0%, 100% { 
        transform: translateY(0px) rotate(0deg);
        opacity: 0.1;
      }
      25% { 
        transform: translateY(-30px) rotate(90deg);
        opacity: 0.2;
      }
      50% { 
        transform: translateY(-15px) rotate(180deg);
        opacity: 0.15;
      }
      75% { 
        transform: translateY(-25px) rotate(270deg);
        opacity: 0.2;
      }
    }

    @media (max-width: 768px) {
      .cta-buttons {
        flex-direction: column;
        align-items: center;
      }

      .cta-buttons .btn {
        width: 100%;
        text-align: center;
      }

      .social-links {
        justify-content: center;
      }

      .bg-icon {
        font-size: 1.8rem;
      }
    }
  </style>

  <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
