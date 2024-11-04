<?php
$adminOnly = true; // Require admin access
include '../includes/auth.php';
include '../includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <h2 class="text-center mb-4">Admin Dashboard</h2>

    <div class="row text-center">
        <div class="col-md-4 mb-3">
            <div class="card bg-primary text-white h-100">
                <div class="card-body">
                    <h5 class="card-title">Total Products</h5>
                    <p class="card-text fs-3">230</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card bg-success text-white h-100">
                <div class="card-body">
                    <h5 class="card-title">Total Orders</h5>
                    <p class="card-text fs-3">150</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card bg-warning text-dark h-100">
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                    <p class="card-text fs-3">100</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
