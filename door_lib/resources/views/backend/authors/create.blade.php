<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<body>
    <h1>Create Post</h1>

    <form action="{{ route('author.index') }}" method="POST" >
        @csrf

        <label for="name">name:</label>
        <input type="text" name="name" id="name" required>

        <label for="description">description:</label>
        <textarea name="text" id="description" required></textarea>

        <label for="cover_image">cover_image:</label>
        <img src="{{ asset('assets/img/'.$book->image) }}">

        <button type="submit">Create Post</button>
    </form>
</body>
</html>
