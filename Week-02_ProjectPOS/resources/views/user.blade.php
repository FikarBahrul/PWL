<html>
    <body>
        <h1>Halaman User</h1>
        <p>ID   : {{ $id }}</p>
        <p>Nama : {{ $name }}</p>
        <img src="{{ asset('img/user.png') }}" alt="User Image" style="display: block; margin: 0 auto; width: 50%; height: auto;">

        <br>
        <div align="center">
            <a href="/">← Kembali ke Home</a>
        </div>
    </body>
</html>