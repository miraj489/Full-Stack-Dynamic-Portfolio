<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Miraj's Portfolio</title>
  <!-- Font Awesome CDN for icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f4f4f4;
    }

    .navbar {
      background-color: #3388cc;
      padding: 10px 0;
      text-align: center;
    }

    .navbar ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: inline-flex;
      gap: 20px;
    }

    .navbar a {
      color: white;
      text-decoration: none;
      font-weight: bold;
    }

    .main-section {
      display: flex;
      justify-content: space-between;
      padding: 50px;
      align-items: center;
      flex-wrap: wrap;
    }

    .left {
      max-width: 50%;
    }

    .left h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .left h1 {
      font-size: 36px;
      margin-bottom: 10px;
    }

    .left p {
      font-size: 18px;
      margin-bottom: 20px;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      background: #333;
      color: white;
      text-decoration: none;
      border-radius: 20px;
      margin-bottom: 20px;
    }

    .social-icons a {
      margin-right: 15px;
      font-size: 24px;
      color: #333;
      transition: color 0.3s;
    }

    .social-icons a:hover {
      color: #0077b5; 
    }

    .right .profile-pic {
      width: 250px;
      height: 250px;
      background: #ccc;
      border-radius: 50%;
      background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMCbr-5T_JJrYpdHFJwA9LImzmZC5ejEjk0B5ywInSJ8_B0565mBLb4UZzLKPJcQ6_O98&usqp=CAU'); 
      background-position: center;
    }

    @media (max-width: 768px) {
      .main-section {
        flex-direction: column;
        align-items: center;
      }

      .left, .right {
        max-width: 100%;
        text-align: center;
      }
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Skills</a></li>
        <li><a href="#">Education</a></li>
        <li><a href="#">Work Experience</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main class="main-section">
    <div class="left">
      <h2>Hi There,</h2>
      <h1>I'm Miraj</h1>
      <p>I am into Web Development</p>
      <a href="#" class="btn">About Me</a>
      <div class="social-icons">
        <a href="#"><i class="fab fa-linkedin"></i></a>
        <a href="#"><i class="fab fa-github"></i></a>
        <a href="#"><i class="fab fa-facebook"></i></a>
      </div>
    </div>
    <div class="right">
      <div class="profile-pic"></div>
    </div>
  </main>


<<script src="{{asset('assets/js/script.js')}}">
    
</script>
</body>
</html>
