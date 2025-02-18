<!DOCTYPE html> <!-- Menentukan bahwa ini adalah dokumen HTML5 -->
<html lang="en"> <!-- Menentukan bahasa utama dokumen sebagai English -->

<head>
    <meta charset="UTF-8"> <!-- Mengatur karakter encoding agar mendukung berbagai karakter -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Membuat tampilan responsif pada perangkat mobile -->
    <title>Item List</title> <!-- Menentukan judul halaman -->
</head>

<body>
    <h1>Items</h1> <!-- Menampilkan judul utama halaman -->

    @if(session('success')) <!-- Mengecek apakah ada pesan sukses dalam session -->
    <p>{{ session('success') }}</p> <!-- Menampilkan pesan sukses jika ada -->
    @endif

    <a href="{{ route('items.create') }}">Add Item</a> <!-- Link untuk menambahkan item baru -->

    <ul> <!-- Membuat daftar item dalam bentuk unordered list -->
        @foreach ($items as $item) <!-- Melakukan perulangan untuk setiap item dalam daftar -->
        <li>
            {{ $item->name }} - <!-- Menampilkan nama item -->
            <a href="{{ route('items.edit', $item) }}">Edit</a> <!-- Link untuk mengedit item -->

            <form action="{{ route('items.destroy', $item) }}" method="POST" style="display: inline;"> <!-- Form untuk menghapus item -->
                @csrf <!-- Menyertakan token CSRF untuk keamanan -->
                @method('DELETE') <!-- Menggunakan metode DELETE untuk menghapus item -->
                <button type="submit">Delete</button> <!-- Tombol untuk menghapus item -->
            </form>
        </li>
        @endforeach
    </ul>
</body>

</html>