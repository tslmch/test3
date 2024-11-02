<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Заголовок">
            <input type="text" name="content" placeholder="Вопрос">
            <input type="submit" value="Задать вопрос">
    </form>
    @foreach($question as $item)
        <h3> Заголовок: <a href= "{{route ('show', $item)}}"> {{ $item->title }}</a></h3>
        <h3> Вопрос: {{ $item->text}}</h3>
        <p> Время: {{ $item->created_at }}</p>
    @endforeach
</body>
</html>