<html>
    <body>
        <h1>Halaman Products</h1>
        <p>Kategori: {{ $category }}</p>
        <img src="{{ asset('img/' . $image) }}" alt="{{ $category }}" style="display: block; margin: 0 auto; width: 50%; height: auto;">
        
        <br>
        <div align="center">
            <a href="/">← Kembali ke Home</a>
        </div>
    </body>
</html>