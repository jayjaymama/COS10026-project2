<?php
$page_title = "Apply Now";           
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Application Form - J&J IT Company</title>
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap"
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
      <img src="images/b.png" alt="J&J IT Company Logo" />
      <h1>Apply Now</h1>
      <nav>
        <ul class="topBotomBordersOut">
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
    <h2>Job Application Form</h2>
    <form action="process_eoi.php" method="post" novalidate>
        <div class="form-group">
            <label for="jobRef">Job Reference Number:</label>
            <input type="text" id="jobRef" name="jobRef" pattern="[A-Za-z0-9]{5}" required />
        </div>

        <div class="form-group">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" maxlength="20" required />
        </div>

        <div class="form-group">
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" maxlength="20" required />
        </div>

        <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required />
        </div>

        <fieldset class="form-group">
            <legend>Gender:</legend>
            <label><input type="radio" name="gender" value="male" required /> Male</label>
            <label><input type="radio" name="gender" value="female" required /> Female</label>
            <label><input type="radio" name="gender" value="other" required /> Other</label>
        </fieldset>

        <div class="form-group">
            <label for="address">Street Address:</label>
            <input type="text" id="address" name="address" maxlength="40" required />
        </div>

        <div class="form-group">
            <label for="suburb">Suburb/Town:</label>
            <input type="text" id="suburb" name="suburb" maxlength="40" required />
        </div>

        <div class="form-group">
            <label for="state">State:</label>
            <select id="state" name="state" required>
                <option value="">Select State</option>
                <option value="VIC">VIC</option>
                <option value="NSW">NSW</option>
                <option value="QLD">QLD</option>
                <option value="NT">NT</option>
                <option value="WA">WA</option>
                <option value="SA">SA</option>
                <option value="TAS">TAS</option>
                <option value="ACT">ACT</option>
            </select>
        </div>

        <div class="form-group">
            <label for="postcode">Postcode:</label>
            <input type="text" id="postcode" name="postcode" pattern="\d{4}" required />
        </div>

        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required />
        </div>

        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" pattern="\d{10}" required />
        </div>

        <fieldset class="form-group">
            <legend>Skills:</legend>
            <label><input type="checkbox" name="skills[]" value="html" /> HTML</label>
            <label><input type="checkbox" name="skills[]" value="css" /> CSS</label>
            <label><input type="checkbox" name="skills[]" value="javascript" /> JavaScript</label>
            <label><input type="checkbox" name="skills[]" value="python" /> Python</label>
            <label><input type="checkbox" name="skills[]" value="other" /> Other</label>
        </fieldset>

        <div class="form-group">
            <label for="otherSkills">Other Skills:</label>
            <textarea id="otherSkills" name="otherSkills" rows="4"></textarea>
        </div>

        <div class="form-group">
            <label for="resume">Upload Resume:</label>
            <input type="file" id="resume" name="resume" required />
        </div>

        <div class="form-group">
            <label for="coverLetter">Cover Letter:</label>
            <textarea id="coverLetter" name="coverLetter" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="portfolio">Portfolio URL:</label>
            <input type="url" id="portfolio" name="portfolio" required />
        </div>

        <button type="submit" class="submit-button">Apply</button>
    </form>
</section>
</main>
