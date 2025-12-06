<?php 
    include 'views/templates/header.php'; 
    include 'views/templates/helpers.php';

    flash('success');
?>

    <div class="container mt-4">
        <div class="card shadow">
            <div class="card-header bg-dark text-white text-center">
                <h4 class="mb-0 display-5">Product List</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($products as $product): ?>
                        <tr>
                            <td><?= $product['id'] ?></td>
                            <td><?= $product['name'] ?></td>
                            <td><?= $product['price'] ?></td>
                            <td>
                                <a href="index.php?module=products&action=edit&id=<?= $product['id'] ?>" class="btn btn-sm btn-warning edit-btn">Edit</a> |
                                <a href="index.php?module=products&action=delete&id=<?= $product['id'] ?>" class="btn btn-sm btn-danger delete-btn" data-id="<?= $product['id'] ?>">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-end">
                <a href="index.php?module=products&action=create" class="btn btn-primary">Add Product</a>
            </div>
        </div>
    </div>

                            

    <script>
        $(document).ready(function () {
            $('.delete-btn').click(function (e) {
                e.preventDefault(); // stop normal link

                let url = $(this).attr('href');

                Swal.fire({
                    title: "Are you sure?",
                    text: "This action cannot be undone.",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Yes, delete it!",
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = url; // proceed to delete
                    }
                });
            });

        });
    </script>
                        

<?php include 'views/templates/footer.php'; ?>
