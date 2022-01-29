<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formular</title>
  </head>
  <body>
    <form method="POST" action="/data">
      {{ csrf_field() }}
      <input type="text" name="eingabe">
      <input type="submit" name="input" value="Abschicken!">
    </form>
  </body>
</html>
