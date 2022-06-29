<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>test</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <form method="POST">

        @csrf

        <label for="fname">Name:</label><br>
        <input type="text" id="fname" name="fname"><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="pass">Pass:</label><br>
        <input type="password" id="pass" name="pass"><br>

        <br><input type="submit">
    </form>
</body>

</html>