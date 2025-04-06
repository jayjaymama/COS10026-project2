<?php
// settings.php should be included for database connection
require 'settings.php';

// Connect to the database
$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch EOIs from the database
$sql = "SELECT * FROM eoi ORDER BY id ASC"; // Replace 'id' with the correct column name
$result = $conn->query($sql);

if (!$result) {
    die("Error executing query: " . $conn->error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage EOIs</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 8px; text-align: left; border: 1px solid #ddd; }
        th { cursor: pointer; }
    </style>
    <script>
        function sortTable(n) {
            let table = document.getElementById("eoiTable");
            let rows = Array.from(table.rows).slice(1);
            let ascending = table.rows[0].cells[n].getAttribute("data-order") !== "asc";
            rows.sort((a, b) => {
                let x = a.cells[n].innerText.toLowerCase();
                let y = b.cells[n].innerText.toLowerCase();
                return ascending ? (x > y ? 1 : -1) : (x < y ? 1 : -1);
            });
            rows.forEach(row => table.appendChild(row));
            table.rows[0].cells[n].setAttribute("data-order", ascending ? "asc" : "desc");
        }
    </script>
</head>
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
        <?php if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>"; // Replace 'id' with the correct column name
                echo "<td>{$row['job_reference']}</td>";
                echo "<td>{$row['first_name']}</td>";
                echo "<td>{$row['last_name']}</td>";
                echo "<td>{$row['dob']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "<td>{$row['phone']}</td>";
                echo "<td>{$row['address']}</td>";
                echo "<td>{$row['suburb']}</td>";
                echo "<td>{$row['state']}</td>";
                echo "<td>{$row['postcode']}</td>";
                echo "<td>{$row['status']}</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='12'>No records found.</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
