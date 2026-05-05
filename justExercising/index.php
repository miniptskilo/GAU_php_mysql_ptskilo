<form method="post" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" name="name">
    <br><br>
    <label for="email">Email:</label>
    <input type="text" name="email">
    <br><br>
    <label for="profile_image">Profile Image</label>
    <input type="file" name="profile_image">
    <br><br>
    <button type="submit" name="submit">Submit</button>
</form>

<?php
if(isset($_POST['submit'])){
    if(empty($_POST['name'])){
        echo "fill this field";
    }
    if(empty($_POST['email'])){
        echo "fill this field";
    }
    if(empty($_FILES['profile_image']['name'])){
        echo "file is not uploaded";
    }
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_FILES['profile_image'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $file = $_FILES['profile_image'];
        $uniqueName = time() . "_" . $file['name'];
        move_uploaded_file($file['tmp_name'], "uploads/" . $uniqueName);
        echo "Success!";
}
}
?>