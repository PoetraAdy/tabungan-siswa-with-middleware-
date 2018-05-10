<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Sistem Informasi Tabungan Siswa</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>
  <link rel="stylesheet" href="{{ asset('login/css/css.css') }}" media="screen" type="text/css" />

</head>

<body>

  <div class="login-card">
    <h1>Log-in</h1><br>
    <form action="{{ url('/masuk/check') }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      {{ method_field('post')}}
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>
