<?php
// Function to check if a number is prime
function isPrime($num) {
if ($num <= 1) {
return false;
}
for ($i = 2; $i <= sqrt($num); $i++) {
if ($num % $i == 0) {
return false;
}
}
return true;
}
// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$start = isset($_POST['start']) ? intval($_POST['start']) : 0;
$end = isset($_POST['end']) ? intval($_POST['end']) : 0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Prime Number Results</title>
<!-- Bootstrap 5 CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg- light">
<div class="container mt-5">
95
<div class="card shadow-lg p-4">
<h2 class="text-center text-primary">Prime Number Results</h2>
<?php
if ($start > $end) {
echo "<div class='alert alert-danger text-center'>Start number must be less than or equal to the
end number.</div>";
} else {
echo "<div class='text-center mt-3'><h5 class='text-success'>Prime numbers between $start and
$end:</h5></div>";
echo "<div class='d-flex flex-wrap justify-content-center mt-3'>";
$foundPrime = false;
for ($i = $start; $i <= $end; $i++) {
if (isPrime($i)) {
echo "<span class='badge bg-success m-1 p-2'>$i</span>";
$foundPrime = true;
}
}
if (!$foundPrime) {
echo "<div class='alert alert-warning text-center mt-3'>No prime numbers found in this
range.</div>";
}
echo "</div>";
}
?>
<div class="text-center mt-4">
<a href="index.html" class="btn btn-primary">Try Again</a>
</div>
</div>
</div>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>