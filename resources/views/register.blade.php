<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="/assets/css/login.style.css">
 <title>Signin</title>
</head>

<body>
 <div class="login-box">
  <div class="login-signin">
   <a href="login">Giriş Yap</a>
   <a href="#">Kayıt Ol</a>
  </div>
  <form action="login" method="POST">
    @csrf
   <div class="user-box">
    <input type="text" name="user_name" value="{{old('user_name')}}">
    <label>Kullanıcı Adı</label>
   </div>
   <div class="user-box">
    <input type="password" name="password" >
    <label>Şifre</label>
   </div>
   <div class="user-box">
    <input type="password" name="password_confirmation" >
    <label>Şifre Tekrar</label>
   </div>
   <div class="user-box">
    <input type="email" name="mail"  value="{{old('mail')}}">
    <label>Email</label>
   </div>
   @if($errors->any())
<div class="alert alert-danger">
  <ul style="list-style:none">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>

 @endif
   <button class="submitButton" type="submit">Kayıt Ol</button>
  </form>
 </div>

</body>

</html>