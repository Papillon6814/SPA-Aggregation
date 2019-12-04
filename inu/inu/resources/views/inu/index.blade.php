<!DOCTYPE html>
<html>
  <head>
    <title> inu図鑑 </title>
  </head>

  <body>
    <table class="table text-center">
      <tr>
        <th class="text-center">犬id</th>
        <th class="text-center">名前</th>
      </tr>
      @foreach($inus as $inu)
      <tr>
        <td>
          <a href="/inu/{{ $inu->id }}/edit">
            {{ $inu->id }}
          </a>
        </td>
        <td>{{ $inu->name }}</td>
      </tr>
      @endforeach
    </table>
  </body>
</html>