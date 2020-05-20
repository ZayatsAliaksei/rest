<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="{{ url('/') }}">На Главную</a>

<table border="2">
    @foreach($arr as $key=>$value)
        <tr>
            <th>Дата</th>
            <th>Уровень сообщения</th>
            <th>Сообщение</th>
            <th>Контрольное значение</th>
        </tr>
        <tr>
            <td>{{$value['date']}}</td>
            <td>{{$value['level']}}</td>
            <td>{{$value['text']}}</td>
            <td>{{$value['value']}}</td>
        </tr>
    @endforeach
</table>

</body>
</html>
