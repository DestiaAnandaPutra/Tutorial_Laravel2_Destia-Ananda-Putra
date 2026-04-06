<h2>Login</h2>

<form method="POST" action="/auth">
    @csrf

    <div style="margin-bottom: 10px;">
        Email:<br>
        <input type="email" name="email" style="width: 250px;">
    </div>

    <div style="margin-bottom: 15px;">
        Password:<br>
        <input type="password" name="password" style="width: 250px;">
    </div>


  <div style="display: flex; gap: 10px; align-items: center;">
        <button type ="submit" class="btn-login">Login</button>
      <a href="/registration">Belum punya akun? Register</a>
         </div>
</form>


@if(session('error'))
    <p style="color: red;">{{ session('error') }}</p>
@endif


 <style>
        .btn-login {
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        .btn-login:hover {
            background-color: darkgreen;
        }
    </style>