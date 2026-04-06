<h2>Register</h2>

<form method="POST" action="/register">
    @csrf
    <div style="margin-bottom: 10px;">
        Email:<br>
        <input type="email" name="email" style="width: 250px;">
    </div>
    <div style="margin-bottom: 10px;">
        Name:<br>
        <input type="text" name="name" style="width: 250px;">
    </div>
    <div style="margin-bottom: 10px;">
        Password:<br>
        <input type="password" name="password" style="width: 250px;">
    </div>


    <div style="display: flex; gap: 10px; align-items: center;">
         <button type="submit" class="btn-register">Register</button>
     <a href="/login">Sudah punya akun? Login</a>
    </div>
</form>

@if(session('success'))
   <p style ="color: green;">{{ session('success') }}</p>
@endif


<style>
        .btn-register {
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        .btn-register:hover {
            background-color: darkgreen;
        }
    </style>