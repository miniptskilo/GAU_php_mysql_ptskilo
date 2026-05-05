<style>
    form{
        border: solid 1px black;
        margin: auto;
        padding: 10px;
        width:250px;
    }
</style>
<form method="post" enctype="multipart/form-data">
    <label for="name">Name: </label>
    <input type="text" name="name" placeholder="Input name">
    <br><br>
    <label for="email">Email: </label>
    <input type="text" name="email" placeholder="Input email">
    <br><br>
    <label for="age">Age: </label>
    <input type="number" name="age" placeholder="Input age">
    <br><br>
    <label for="profile_image">Profile Image: </label> <br><br>
    <input type="file" name="profile_image" placeholder="Upload file">
    <br><br>
    <button type="submit" name="submit">Submit</button>
</form>
<?php

$connect = mysqli_connect("localhost", "root", "", "justExercising");

    if(isset($_POST['submit'])){
        $file = $_FILES['profile_image'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        if(empty($_POST['name'])){
            echo "<br> Input name <br>";
        }

        if(empty($_POST['email'])){
            echo "<br>Input email <br>";
        }

        if(!empty($_POST['email']) && (!str_contains($_POST['email'], '@'))){
            echo "<br>Email must contain @ <br>";
        }

        if(empty($_POST['age'])){
            echo "<br>Input age <br>";
        }elseif($_POST['age'] < 18){
            echo "<br>Age must be above 18 <br>";
        }

        if(empty($file['name'])){
            echo "<br>File is not uploaded <br>";
        }

        if(
        !empty($_POST['name']) &&
        !empty($_POST['email']) &&
        !empty($_POST['age']) &&
        $_POST['age'] >= 18 &&
        !empty($file['name']) &&
        str_contains($_POST['email'], '@')
        ){
            $uniqueName = time() . "_" . $file['name'];

            move_uploaded_file($file['tmp_name'],"uploads/" . $uniqueName);

            $date = date("Y-m-d H:i:s");

            $insert = "INSERT INTO users(name, email, age, image, created_at) VALUES('$name', '$email', '$age', '$uniqueName', '$date')";
            mysqli_query($connect, $insert);

            echo "saved succesfully";
        }}


?>