<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact - Miraj's Portfolio</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <style>
    .contact-form {
      width: 100%;
      max-width: 350px;
      margin: 60px auto 20px auto;
      padding: 24px 18px;
      background: #fff;
      border-radius: 10px;
      border: 1.5px solid #3388cc;
      box-shadow: 0 2px 8px rgba(0,0,0,0.07);
      text-align: left;
    }
    .contact-form label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 7px;
      margin-bottom: 12px;
      border-radius: 4px;
      border: 1px solid #ccc;
      font-size: 15px;
    }
    .contact-form button {
      background: #3388cc;
      color: #fff;
      border: none;
      padding: 8px 18px;
      border-radius: 5px;
      font-size: 15px;
      cursor: pointer;
      width: 100%;
    }
    .contact-info {
      max-width: 350px;
      margin: 0 auto;
      text-align: left;
    }
    .contact-info div {
      margin-bottom: 8px;
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
  <main>
    <div class="contact-form">
      <h2 style="text-align:center;">Contact Me</h2>
      <form id="contactForm">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit">Send</button>
      </form>
      <div id="formMsg" style="color:green; margin-top:10px; display:none; text-align:center;">Your message has been sent!</div>
    </div>
    <div class="contact-info">
      <div>Phone: 01745363537</div>
      <div>
        Facebook: 
        <a href="https://facebook.com/" target="_blank">facebook.com</a>
      </div>
      <div>
        LinkedIn: 
        <a href="https://linkedin.com/" target="_blank">linkedin.com</a>
      </div>
      <div>
        Telegram: 
        <a href="https://t.me/" target="_blank">Telegram.com</a>
      </div>
    </div>
  </main>
  <script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
      e.preventDefault();
      document.getElementById('formMsg').style.display = 'block';
      this.reset();
      setTimeout(function() {
        document.getElementById('formMsg').style.display = 'none';
      }, 2500);
    });
  </script>
</body>
</html>