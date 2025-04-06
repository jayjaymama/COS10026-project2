<?php




?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Listings - J&J IT Company</title>
    <link rel="stylesheet" href="styles\style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
   
    <header>
      <img src="images\b.png" alt="J&J IT Company Logo" />
      <h1>Job Listings</h1>
      <nav>
        <ul class="topBotomBordersOut">
          <li><a href="index.php">Home</a></li>
          <li><a href="jobs.php">Job Listings</a></li>
          <li><a href="apply.php">Apply Now</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="enhancement.php">Enhancements</a></li>
          <li><a href="manage.php">Enhancements</a></li>
        </ul>
      </nav>
    </header>
<main>
<body>
    <h2>Manage EOIs</h2>
    <table id="eoiTable">
        <tr>
            <th onclick="sortTable(0)" data-order="asc">EOI Number</th>
            <th onclick="sortTable(1)" data-order="asc">Job Reference</th>
            <th onclick="sortTable(2)" data-order="asc">First Name</th>
            <th onclick="sortTable(3)" data-order="asc">Last Name</th>
            <th onclick="sortTable(4)" data-order="asc">DOB</th>
            <th onclick="sortTable(5)" data-order="asc">Email</th>
            <th onclick="sortTable(6)" data-order="asc">Phone</th>
            <th onclick="sortTable(7)" data-order="asc">Address</th>
            <th onclick="sortTable(8)" data-order="asc">Suburb</th>
            <th onclick="sortTable(9)" data-order="asc">State</th>
            <th onclick="sortTable(10)" data-order="asc">Postcode</th>
            <th onclick="sortTable(11)" data-order="asc">Status</th>
        </tr>
         else {
            echo "<tr><td colspan='12'>No records found.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
</main>

