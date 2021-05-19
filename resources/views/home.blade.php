<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <link rel="stylesheet" href="/css/master.css">
  </head>
  <body>
    @foreach ($travels as $value)
    <p>{{$value['id']}}</p>
    <p>{{$value['location']}}</p>
    <p>{{$value['day']}}</p>
    <p>{{$value['price']}}</p>
    <p>{{$value['name_hotel']}}</p>

    @endforeach
  </body>
</html>
