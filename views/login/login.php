<?php 
    include 'views/templates/header.php'; 
    include 'views/templates/helpers.php';

    flash('error');
?>

<div class="container mt-5">
    <div class="card mx-auto shadow" style="max-width: 400px;">
        <div class="card-header bg-dark text-center text-white">
            <h4>ACCOUNT LOGIN</h4>
        </div>
        <div class="card-body">
            <form method="POST">
                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="email" class="form-control" required>
                </div>

                <button class="btn btn-primary w-100">Login</button>
            </form>

        </div>
    </div>
</div>

<?php include 'views/templates/footer.php'; ?>
