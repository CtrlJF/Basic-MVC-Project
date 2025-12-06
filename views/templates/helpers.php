<?php

function flash($name) {
    $msgName = ucfirst($name);
    if(isset($_SESSION[$name])) {
        echo "
        <script>
            Swal.fire({
                icon: '$name',
                title: '$msgName',
                text: '{$_SESSION[$name]}',
                timer: 2000,
                showConfirmButton: false
            });
        </script>";
        unset($_SESSION[$name]);
    }
}
/* 
✔ success
✔ error
✔ warning
✔ info
✔ question 
*/

/* 
    echo "
        <script>
            console.log('login');
            console.log(" . json_encode($user) . ");
        </script>"; 
*/