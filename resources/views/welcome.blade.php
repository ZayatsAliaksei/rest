<!DOCTYPE html>

<style type="text/css">
    * { margin: 0; padding: 0; }
    p { padding: 10px; }
    #left { position: absolute; left: 0; top: 0; width: 50%; }
    #center { position: absolute; right: 0; top: 0; width: 80%; }
    #right { position: absolute; right: 0; top: 0; width: 50%; }
</style>

<div id="left">
    <p>
    <form action="/processing" method="post">
        @csrf
        Дата и время: <input type="datetime-local" name="date" required><br>
        Уровень сообщения: <input type="number" name="level" required><br>
        Описание сообщения: <input type="text" name="text" required><br>
        Контрольное значение: <input type="number" step="0.1" name="value" required><br>
        <input type="submit" value="отправить">
    </form>
</div>

<div id="center">
    <p>Данные:</p>
    @if($data)
    <table border="2">
        @foreach($data as $key=>$value)
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
        @endif
</div>

<div id="right">
    <p>
    <a href="{{ url('/rest') }}">Таблица</a>
</div>
