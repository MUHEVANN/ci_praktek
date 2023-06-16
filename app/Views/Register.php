<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/register/process" method="post">
        <form-group>
            <label for="nama">Nama</label>
            <input type="text" name="nama" value="">
        </form-group>
        <form-group>
            <label for="email">Email</label>
            <input type="email" name="email" value="">
        </form-group>
        <form-group>
            <label for="password">Password</label>
            <input type="password" name="password" value="">
        </form-group>
        <button type="submit">Register</button>
    </form>
</body>

</html>