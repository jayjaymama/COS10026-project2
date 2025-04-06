<?php
$page_title = "J&J IT Company";                   
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" ="width=device-width, initial-scale=1.0" />
    <title>J&J IT Company</title>
    <link rel="stylesheet" href="styles\style.css"/>
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <header>
      <img src="images\b.png" alt="J&J IT Company Logo" />
      <h1>J&J IT Company</h1>
      <nav>
        <ul class="topBotomBordersOut">
          <li><a href="index.php" aria-label="Home">Home</a></li>
          <li><a href="jobs.php" aria-label="Job Listings">Job Listings</a></li>
          <li><a href="apply.php" aria-label="Apply Now">Apply Now</a></li>
          <li><a href="about.php" aria-label="About Us">About Us</a></li>
          <li><a href="enhancement.php" aria-label="Enhancements">Enhancements</a></li>
          <li><a href="manage.php">Manage</a></li>
        </ul>
      </nav>
    </header>
  <main>
      <section id="hero">
        <h2>Welcome to J&J IT Company</h2>
        <p>Innovative and efficient solutions for businesses of all sizes.</p>
        <a href="apply.php" class="cta-button" aria-label="Apply Now">Apply Now</a>
      </section>

      <section>
        <h2>About J&J IT Company</h2>
        <p>
          J&J IT Company is a leading technology firm specializing in software
          development, cloud solutions, and IT consulting. We aim to provide
          innovative and efficient solutions to businesses of all sizes.
        </p>
      </section>

      <section>
        <h2>Our Services</h2>
        <div class="services">
          <div class="service">
            <h3>Software Development</h3>
            <p>
              We provide custom software development services to meet your
              business needs.
            </p>
          </div>
          <div class="service">
            <h3>Cloud Solutions</h3>
            <p>
              Our cloud solutions ensure your business is scalable and secure.
            </p>
          </div>
          <div class="service">
            <h3>IT Consulting</h3>
            <p>
              We offer expert IT consulting to help you navigate the technology
              landscape.
            </p>
          </div>
        </div>
      </section>

      <section>
        <h2>Watch Our Introduction Video</h2>
        <div class="video-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/KCKTjGvGDbg?si=iWQYsViwx2NhLnNW" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </section>

      <section>
        <h2>Testimonials</h2>
        <div class="testimonials">
          <div class="testimonial">
            <p>
              "J&J IT Company transformed our business with their innovative
              solutions. Highly recommend!"
            </p>
            <p>- Mr. Andrew Huang (CEO of AA company)</p>
          </div>
          <div class="testimonial">
            <p>
              "Their team is professional and highly skilled. We saw immediate
              improvements in our operations."
            </p>
            <p>- LeBron James (NBA Superstar)</p>
          </div>
          <div class="testimonial">
            <p>
              "Excellent service and support. They truly understand our needs
              and deliver beyond expectations."
            </p>
            <p>- LeBron James (NBA Superstar)</p>
            

          </p>
        </div>

      </section>
    </main>    
<?php include ('footer.inc'); ?>