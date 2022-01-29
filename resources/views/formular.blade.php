<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formular</title>
  </head>
  <body>

    @if (count($errors) > 0)
      <ul>
        @foreach ($errors->all() as $e)
        <li>{{ $e }}
        @endforeach
      </ul>
    @endif

    <form method="POST" action="/data">
      {{ csrf_field() }}
      Name <input type="text" name="username"> <br> <br>
      E-Mail <input type="email" name="email"> <br> <br>
      <input type="submit" value="Registrieren!">
    </form>
  </body>
</html>
