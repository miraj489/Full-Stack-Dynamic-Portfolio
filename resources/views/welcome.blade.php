<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Miraj's Portfolio</title>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

  <header>
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
  </header>

  <main class="main-section">
    <div class="left">
      <h2>Hi There,</h2>
      <h1>I'm Miraj</h1>
      <p>I am into Web Development</p>
      <a href="{{ url('/about') }}" class="btn">About Me</a>

    <h3 class="title">Click here to see dynamic content</h3>
    </div>

    <div class="right">
      <div class="profile-pic"></div>
    </div>
  </main>

  <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
