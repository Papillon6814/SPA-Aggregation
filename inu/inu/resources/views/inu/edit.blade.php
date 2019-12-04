<!DOCTYPE html>
<html>
  <head>
    <title>INU戒名</title>
  </head>
  <body>
    INU戒名
    <form action="inu/{{ $inu->id }}" method="post">
      <input type="hidden" name="_method" value="PUT" />
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />

      <div class="form-group">
        <label for="name">名前</label>
        <input type="text" class="form-control" name="name" value="{{ $inu->name }}" />
      </div>
      <button type="submit">送信</button>
    </form>
    <a href="/inu/index">戻る</a>
  </body>
</html>