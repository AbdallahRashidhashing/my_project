<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  User registration </title>
    <style>


        form {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: grey;
            border: 1px solid #ccc;
            border-radius: 10px;
        }


        input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }




        button:hover {
            background-color: #218838;
        }


        .error-message {
            color: red;
            font-size: 14px;
            display: none;
        }


    </style>
</head>
<body>
<center>
    <h2>   User data registration form</h2>

    <form   id="form" action="Database.php" method="POST">
        <label for="firstname">first Name:</label><br>
        <input type="text" id="firstname" name="firstname" required><br><br>

        <label for="lastname"> last Name:</label><br>
        <input type="text" id="lastname" name="lastname" required><br><br>

        <label for="phone"> phone Number:</label><br>
        <input  type="tel" id="phone" name="phone" pattern="[0-9]{11}" required><br><br>
        <input type="email" id="email" name="email"  required >

        <input type="submit" value="SEND">
    </form>
</center>



</body>
</html>
