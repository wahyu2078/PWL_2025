<?php

use Illuminate\Database\Migrations\Migration; //untuk membuat migrasi database
use Illuminate\Database\Schema\Blueprint; //untuk membuat struktur tabel
use Illuminate\Support\Facades\Schema; //untuk membuat tabel

return new class extends Migration //class yang mewarisi migrasi
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) { //membuat tabel items
            $table->id(); //membuat id otomatis
            $table->string('name'); //membuat kolom nama dengan tipe data string
            $table->text('description'); //membuat kolom deskripsi dengan tipe data text
            $table->timestamps(); //membuat kolom create_at dan update_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void 
    {
        Schema::dropIfExists('items'); //menghapus tabel items
    }
};
