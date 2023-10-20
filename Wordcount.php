<?php
// file : WordCount.php
class Wordcount{
    // Mendefinisikan kelas Wordcount.

    public function countWords($sentence){
        // public mendeklarasikan bahwa bisa diakses di file manapun
        // function mendefinisikan metode countWords yang akan menghitung jumlah kata dalam kalimat.
        // parameter untuk function countWords adalah variabel sentence

        return count(explode(" ", $sentence));
        // Menghitung jumlah kata dalam kalimat dengan memisahkan kata-kata berdasarkan spasi dan menghitung elemen-elemen dalam array yang dihasilkan.
        // $sentence adalah variabel yang terdapat parameter function untuk dieksekusi
        // explode(" ", $sentence) menguraikan kalimat ke dalam array, dengan pemisah (delimiter) yang ditentukan di sini adalah spasi (" "). Ini akan memecah kalimat menjadi potongan-potongan teks (kata-kata) yang dipisahkan oleh spasi.

        // count(...) menghitung jumlah elemen dalam array yang dihasilkan oleh explode. Dengan kata lain, ini menghitung jumlah kata dalam kalimat.

        // return mengembalikan hasil perhitungan tersebut sebagai nilai dari ekspresi ini.

    }
}
