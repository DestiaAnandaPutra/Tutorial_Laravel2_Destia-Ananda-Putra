
<h2>Selamat Datang, {{ $user->name }}</h2>



<div style="display: flex; gap: 10px; align-items: center;">
    <form method="POST" action="/logout">
        @csrf
        <button type="submit" class="btn-logout">Logout</button>
    </form>
</div>

         <style>
        .btn-logout {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        .btn-login:hover {
            background-color: darkblue;
        }
    </style>