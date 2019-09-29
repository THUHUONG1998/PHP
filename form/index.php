<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="xuly-form.php" method="POST">
        <h2>Create user account</h2>
        Name: <input type="text" name="name">
        <br>
        Email: <input type="email" name ="email">
        <br>
        Gender :
        <label >
         <input type="radio" name = "gender" value="male"> Male
         </label>
        <input type="radio" name ="gender"  id="female" value="female"> 
        <label for="female">Female </label>
        <br>
        Password : <input type="password" name="password">
        <br>
        Confirm password : <input type="password" name ="confirm_password">
        <button type="reset">Clear</button>
        <button type="submit">Submit</button>
    </form>
</body>
</html>