<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<body>

<form method="post">

<h2>PHP Form Validation Example</h2>
<p style="color: red;">* required fields</p>

Name: <input type="text" name="name"><br><br>

Email: <input type="email" name="email"><br><br>

Website: <input type="text" name="website"><br><br>

Comment:<br>
<textarea name="comment"></textarea><br><br>

Gender:
<input type="radio" name="g" value="Female">Female
<input type="radio" name="g" value="Male">Male
<br><br>

<input type="submit" name="submit" value="Submit">

</form>



    <div class="result">
        <?php
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";

            if(isset($_POST['submit-form'])){
                echo "<h3>Clicked</h3>";
                if(empty($_POST['name'])){
                    echo "<p>Name is Empty!!!!</p>";
                }

                if(empty($_POST['emial'])){
                    echo "<p>Email is Empty!!!!</p>";
                }

                

            }
        ?>
    </div>

</div>

</body>
</html>
```
