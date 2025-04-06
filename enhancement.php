<?php 
$pageTitle = "Enhancements";
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Enhancements - J&J IT Company</title>
    <link rel="stylesheet" href="styles\style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <input type="checkbox" id="checkbox" class="theme-switch" />
    <label for="checkbox" class="theme-switch-label">
      <div class="slider round"></div>
      <em>Enable Dark Mode!</em>
    </label>
    <header>
      <img src="images\b.png" alt="J&J IT Company Logo" />
      <h1>Enhancements</h1>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="jobs.php">Job Listings</a></li>
          <li><a href="apply.php">Apply Now</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="enhancement.php">Enhancements</a></li>
          <li><a href="manage.php">Manage</a></li>
        </ul>
      </nav>
    </header>
<main>
<section>
        <h2>Website Enhancements</h2>
        <ul>
          <li>
            <strong>Responsive Design:</strong> Our website adapts to various
            screen sizes for optimal user experience.
          </li>
          <li>
            <strong>Animated Navigation:</strong> Smooth CSS animations enhance
            user interaction with the menu.
          </li>
          <li>
            <strong>Custom CSS Grid Layout:</strong> A modern layout design
            improves content organization.
          </li>
          <li>
            <strong>Interactive Job Listings:</strong> Job listings now include
            detailed descriptions and apply buttons.
          </li>
          <li>
            <strong>Service Section:</strong> Added a new section on the
            homepage to highlight our services.
          </li>
          <li>
            <strong>Testimonials Section:</strong> Added a new section on the
            homepage to showcase client testimonials.
          </li>
        </ul>
      </section>
      <section>
        <h2>Future Enhancements</h2>
        <ul>
          <li>
            <strong>AI Integration:</strong> Implementing AI to provide personalized user experiences.
          </li>
          <li>
            <strong>Advanced Analytics:</strong> Adding more detailed analytics to track user behavior.
          </li>
          <li>
            <strong>Mobile App:</strong> Developing a mobile app to complement our website.
          </li>
          <li>
            <strong>Enhanced Security:</strong> Implementing advanced security measures to protect user data.
          </li>
        </ul>
      </section>
      <section>
        <h2>Contact Us</h2>
        <form action="contact_form.php" method="post">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
          </div>
          <button type="submit" class="submit-button">Send Message</button>
        </form>
      </section>
</main>