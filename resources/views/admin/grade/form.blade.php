<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('gradesave') }}" method="post">
        @csrf
        <label for="username">full_name</label>
        <input type="text" name="full_name" id="">
        <label for="basic">email</label>
        <input type="email" name="email" id="">

        <label for="basic">cell</label>
        <input type="text" name="cell" id="">

        <input type="submit" value="Save">
    </form>
</body>
</html>
