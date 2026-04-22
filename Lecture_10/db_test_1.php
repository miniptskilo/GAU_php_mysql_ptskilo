<?php
    
    $connect = mysqli_connect("localhost", "root", "", "blog_2026_1");
    // echo "<pre>";
    // print_r($connect);
    // echo "</pre>";

    $select_roles_query = "SELECT * FROM `roles`";
    $query = mysqli_query($connect, $select_roles_query);
    // echo "<pre>";
    // print_r($query);
    // echo "</pre>";

    $data_of_roles = mysqli_fetch_all($query);
    // echo "<pre>";
    // print_r($data_of_roles);
    // echo "</pre>";
    if(isset($_POST['name'])) {
        $_role = $_POST['name'];
        $insert_roles_query = "INSERT INTO `roles` (`role`) VALUES ('$._role')";
        mysqli_query($connect, $insert_roles_query);
        header("Location: db_test_1.php");
    }

?>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
    }
</style>


<form style="
    width: 300px;
    margin: 20px auto;
" method="post">
    Role: <input type="text" name="name">
    <br><br>
    <button type="submit">insert into role</button>
</form>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Created_at</th>
        <th>Updated_at</th>
        <th>Deleted_at</th>
    </tr>

    <?php foreach($data_of_roles as $row) { ?>
    <tr>
        <td><?= $row[0]?></td>
        <td><?= $row[1]?></td>
        <td><?= $row[2]?></td>
        <td><?= $row[3]?></td>
        <td><?= $row[4]?></td>
    </tr>
    <?php } ?>
</table>