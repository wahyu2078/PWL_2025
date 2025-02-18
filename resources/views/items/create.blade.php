<!DOCTYPE html> <!-- Menentukan bahwa ini adalah dokumen HTML5 -->
<html>

<head>
    <title>Add Item</title> <!-- Menentukan judul halaman -->
</head>

<body>
    <h1>Add Item</h1> <!-- Menampilkan judul halaman -->

    <form action="{{ route('items.store') }}" method="POST"> <!-- Form untuk menambahkan item baru, mengarah ke route 'items.store' -->
        @csrf <!-- Token CSRF untuk keamanan agar tidak terkena serangan CSRF -->

        <label for="name">Name:</label> <!-- Label untuk input nama -->
        <input type="text" name="name" required> <!-- Input untuk nama item, wajib diisi -->

        <br> <!-- Baris baru -->

        <label for="description">Description:</label> <!-- Label untuk input deskripsi -->
        <textarea name="description" required></textarea> <!-- Input untuk deskripsi item, wajib diisi -->

        <br> <!-- Baris baru -->

        <button type="submit">Add Item</button> <!-- Tombol untuk menambahkan item -->
    </form>

    <a href="{{ route('items.index') }}">Back to List</a> <!-- Link untuk kembali ke daftar item -->
</body>

</html>
