<?php
include 'db.php';
include 'includes/auth.php'; // Optional if user must be logged in
include 'includes/header.php';

$result = $conn->query("SELECT * FROM products WHERE status='active'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Catalog</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <h2 class="text-center mb-4">Product Catalog</h2>
    <div class="row">

        <?php while ($product = $result->fetch_assoc()): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="<?= $product['image_url'] ?>" class="card-img-top" alt="<?= $product['name'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['name'] ?></h5>
                        <p class="card-text"><?= $product['description'] ?></p>
                        <p class="card-text"><strong>Price:</strong> $<?= $product['price'] ?></p>
                        <a href="product_details.php?id=<?= $product['product_id'] ?>" class="btn btn-primary">View Details</a>
                        <a href="add_to_cart.php?id=<?= $product['product_id'] ?>" class="btn btn-success ms-2">Add to Cart</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>

    </div>
</div>

<?php include 'includes/footer.php'; ?>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
