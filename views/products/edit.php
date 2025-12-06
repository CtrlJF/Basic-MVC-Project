<?php include 'views/templates/header.php'; ?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow">
                <!-- Card Header -->
                <div class="card-header text-center bg-dark text-white">
                    <h4 class="mb-0">Edit Product</h4>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form method="POST" class="mx-auto" style="min-width: 250px; max-width: 100%;">
                        <!-- Form fields -->
                        <div class="mb-3 text-start">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" name="name" value="<?= $product['name']; ?>" class="form-control" required>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="price" class="form-label">Price</label>
                            <input type="price" id="price" name="price" value="<?= $product['price']; ?>" class="form-control" required>
                        </div>
                        <!-- Buttons -->
                        <div class="d-flex justify-content-between">
                            <a href="index.php?module=products" class="btn btn-dark">Cancel</a>
                            <button type="submit" class="btn btn-primary">Done</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'views/templates/footer.php'; ?>
