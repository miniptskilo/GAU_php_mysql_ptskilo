<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            width: 400px;
            margin: auto;
            border: solid 1px black;
            padding: 10px;
        }
    </style>
</head>
<body> 
    <!-- <form action="">
        <input type="text" placeholder="name" id="name">
        <br><br>
        <input type="text" placeholder="subject" id="subject">
        <br><br> -->
        <!-- <button>send information</button> -->
        <!-- <button>send information</button>
    </form> -->

    <script>
        function send_information(){
            alert(document.getElementById("name").value + "სწავლობს "+ document.getElementById("subject").value)
        }
    </script>

    <form action="worker.php" method="get">
        <input type="text" placeholder="name" id="name">
        <br><br>
        <input type="text" placeholder="subject" id="subject">
        <br><br>
        <!-- <button>send information</button> -->
        <button>send information</button>
    </form>

    <hr><hr>
        <form action="worker.php" method="post">
        <input type="text" placeholder="name" id="name">
        <br><br>
        <input type="text" placeholder="subject" id="subject">
        <br><br>
        <!-- <button>send information</button> -->
        <button>send information</button>
    </form>
</body>
</html>
