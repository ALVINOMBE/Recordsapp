<?php
    $conn = mysqli_connect(db_host ,db_user ,db_pass, db_name );

    if(mysqli_connect_errno()){
        echo "failed connection" . mysqli_connect_errno();
    }
