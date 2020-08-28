<?php

    include('tableName.php');
    include('../database.php');

    $connection = mysqli_connect($host, $username, $password);
    $db = mysqli_select_db($connection, $db_name);

    $query = "SELECT * FROM $tableName";
    $query_run = mysqli_query($connection, $query);
?>

<table class="table table-hover table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">File Name</th>
            <th scope="col">Edit</th>
        </tr>
    </thead>

    <?php
    if($query_run)
    {
        foreach($query_run as $row)
        {
    ?>
    <tbody>
        <tr>
            <td> <?php echo $row['id'] ?></td>
            <td> <?php echo $row['fileName'] ?></td>
            <td>
                <button type="button" class="btn btn-success editBtn">Edit</button>
            </td>
        </tr>
    </tbody>
    <?php
        }
    }
    else
    {
        echo "No Record Found";
    }

?>

</table>