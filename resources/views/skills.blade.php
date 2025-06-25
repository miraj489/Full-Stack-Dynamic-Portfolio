
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Skills - Miraj's Portfolio</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
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
  <main class="skills-page">
    <div class="container">
      <h1>My Skills</h1>
      <p class="intro">Here are the technologies I'm learning and working with:</p>
      
      <div class="skills-list">
        <div class="skill-card">
          <h2>Web Development</h2>
          <div class="skills">
            <p>HTML</p>
            <p>CSS</p>
            <p>JavaScript</p>
            <p>PHP</p>
          </div>
        </div>
        
        <div class="skill-card">
          <h2>Frameworks</h2>
          <div class="skills">
            <p>Laravel</p>
            <p>React</p>
            <p>Vue.js</p>
          </div>
        </div>
        
        <div class="skill-card">
          <h2>Database & Tools</h2>
          <div class="skills">
            <p>MySQL</p>
            <p>Git</p>
            <p>VS Code</p>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>