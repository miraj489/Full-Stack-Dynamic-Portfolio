<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact - Miraj's Portfolio</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    /* Fix page title visibility */
    .page-title {
      color: #fff !important;
      text-shadow: 0 2px 4px rgba(0,0,0,0.5);
      margin-bottom: 20px;
      font-size: 2.5rem;
      font-weight: 700;
      text-align: center;
    }
    
    .page-subtitle {
      color: rgba(151, 120, 189, 0.9) !important;
      text-shadow: 0 1px 2px rgba(0,0,0,0.3);
      text-align: center;
      margin-bottom: 30px;
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

  <div class="content-section">
    <div class="page-header">
      <h1 class="page-title">Get In Touch</h1>
      <p class="page-subtitle">Let's discuss your next project or collaboration opportunity</p>
    </div>

    <div class="contact-container">
      <div class="contact-form">
        <h2><i class="fas fa-envelope"></i> Send Message</h2>
        <form id="contactForm">
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>
          </div>

          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>
          </div>

          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" required>
          </div>

          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="6" required></textarea>
          </div>

          <button type="submit" class="form-button">
            <i class="fas fa-paper-plane"></i> Send Message
          </button>
        </form>
        <div id="formMsg" style="color: #28a745; margin-top: 15px; display: none; text-align: center; font-weight: 500;">
          <i class="fas fa-check-circle"></i> Your message has been sent successfully!
        </div>
      </div>

      <div class="contact-info-card">
        <h2><i class="fas fa-address-card"></i> Contact Information</h2>
        <p style="margin-bottom: 30px; color: #666;">Feel free to reach out through any of these channels. I'm always excited to discuss new opportunities!</p>
        
        <div class="contact-info-item">
          <i class="fas fa-phone"></i>
          <div>
            <strong>Phone</strong><br>
            <a href="tel:+8801745363537">+880 1744-174564</a>
          </div>
        </div>

        <div class="contact-info-item">
          <i class="fas fa-envelope"></i>
          <div>
            <strong>Email</strong><br>
            <a href="mailto:miraj@example.com">miraj@example.com</a>
          </div>
        </div>

        <div class="contact-info-item">
          <i class="fab fa-facebook"></i>
          <div>
            <strong>Facebook</strong><br>
            <a href="https://facebook.com/" target="_blank">Connect on Facebook</a>
          </div>
        </div>

        <div class="contact-info-item">
          <i class="fab fa-linkedin"></i>
          <div>
            <strong>LinkedIn</strong><br>
            <a href="https://linkedin.com/" target="_blank">Professional Network</a>
          </div>
        </div>

        <div class="contact-info-item">
          <i class="fab fa-telegram"></i>
          <div>
            <strong>Telegram</strong><br>
            <a href="https://t.me/" target="_blank">Quick Messages</a>
          </div>
        </div>

        <div class="contact-info-item">
          <i class="fas fa-map-marker-alt"></i>
          <div>
            <strong>Location</strong><br>
            Dhaka, Bangladesh
          </div>
        </div>

        <div style="margin-top: 30px; padding-top: 30px; border-top: 1px solid #eee;">
          <h3 style="margin-bottom: 15px; color: #333;"><i class="fas fa-clock"></i> Response Time</h3>
          <p style="margin: 0; color: #666; font-size: 0.95rem;">I typically respond to messages within 24 hours during business days.</p>
        </div>
      </div>
    </div>
  </div>
  <script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Show success message
      const formMsg = document.getElementById('formMsg');
      formMsg.style.display = 'block';
      
      // Reset form
      this.reset();
      
      // Hide message after 3 seconds
      setTimeout(function() {
        formMsg.style.display = 'none';
      }, 3000);
    });

    // Add form validation feedback
    const inputs = document.querySelectorAll('input, textarea');
    inputs.forEach(input => {
      input.addEventListener('blur', function() {
        if (this.hasAttribute('required') && !this.value.trim()) {
          this.style.borderColor = '#e74c3c';
        } else {
          this.style.borderColor = '#e1e1e1';
        }
      });

      input.addEventListener('input', function() {
        if (this.style.borderColor === 'rgb(231, 76, 60)' && this.value.trim()) {
          this.style.borderColor = '#667eea';
        }
      });
    });
  </script>
</body>
</html>