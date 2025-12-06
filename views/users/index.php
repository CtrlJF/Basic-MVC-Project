<?php 
    include 'views/templates/header.php'; 
    include 'views/templates/helpers.php';

    flash('info');
    flash('success');
?>

    <div class="container mt-4">
        <div class="card shadow">
            <div class="card-header bg-dark text-white text-center">
                <h4 class="mb-0 display-5">User List</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td>
                                <a href="index.php?action=edit&id=<?= $user['id'] ?>" class="btn btn-sm btn-warning edit-btn">Edit</a> |
                                <a href="index.php?action=delete&id=<?= $user['id'] ?>" class="btn btn-sm btn-danger delete-btn" data-id="<?= $user['id'] ?>">Delete</a>
                                <!-- onclick="return confirm('Delete this user?')" -->
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-end">
                <a href="index.php?action=create" class="btn btn-primary">Add User</a>
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

            /* $('.edit-btn').click(function (e) {
                e.preventDefault();

                let url = $(this).attr('href');

                Swal.fire({
                    title: 'Edit User',
                    html: `
                        <form id="editForm">
                            <label>Name</label>
                            <input type="text" id="name" class="swal2-input">

                            <label>Email</label>
                            <input type="email" id="email" class="swal2-input">
                        </form>
                    `,
                    showCancelButton: true,
                    confirmButtonText: "Save",
                    reverseButtons: true,
                    preConfirm: () => {
                        let name = $('#name').val();
                        let email = $('#email').val();

                        if (!name || !email) {
                            Swal.showValidationMessage("All fields are required");
                        }

                        return {name, email};
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.post(url, {
                            name: result.value.name,
                            email: result.value.email
                        });
                    }
                });
            }); */


        });
    </script>
                        

<?php include 'views/templates/footer.php'; ?>
