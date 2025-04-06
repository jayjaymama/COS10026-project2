<?php
$page_title = "About Us";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us - J&J IT Company</title>
    <link rel="stylesheet" href="styles\style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <img src="images\b.png" alt="J&J IT Company Logo" />
      <h1>About us</h1>
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
        <h2>Meet Our Team</h2>
        <div class="team-info">
          <dl>
            <dt>Group Name:</dt>
            <dd>Monkeys</dd>
            <dt>Group ID:</dt>
            <dd>COS10026</dd>
            <dt>Tutor:</dt>
            <dd>Mr. Trung Nguyen</dd>
            <dt>Team Members:</dt>
            <dd>Jeremy specializes in creating stunning user interfaces and
              ensuring a seamless user experience.</dd>
            <dd>Jacob focuses on server-side logic, database management, and
              ensuring the robustness of our applications.</dd>
          </dl>
        </div>
      </section>
          <h3>Timetable</h3>
        <table>
            <tr>
                <th>Day</th>
                <th>Class</th>
                <th>Time</th>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td>Vovinam</td>
                <td>10:00 - 13:00</td>
            </tr>
            <tr>
                <td>Thursday</td>
                <td>COS10005</td>
                <td>13:00 - 16:00</td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td>COS10026</td>
                <td>13:00 - 15:00</td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td>TNE10006</td>
                <td>7:00 - 11:00</td>
            </tr>
        </table>
        </div>
      </section>
    </main>
<?php include('footer.inc'); ?>