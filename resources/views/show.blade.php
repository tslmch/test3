<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h3> {{ $item->title }}> </h3>
        <h3> {{ $item->content }}</h3>
        <p>{{ $item->created_at }}</p>


        @foreach($item as $questoin)
        <h3> Ответ: {{ $questoin->answer}}</h3>
        @endforeach

</body>
</html>