<html>
<head>
    <style>
        .text_1 {
            font-size: 55px;
            color: cornflowerblue;
        }
    </style>
</head>
    <body>
    <form action="/blog/public/users" method="post">
        @csrf
        <input type="text" name="name">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="submit" name="create">
    </form>
    </body>
</html>
