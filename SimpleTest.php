<?php
    // Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
    // Ini adalah komentar yang memberikan informasi tentang cara menjalankan PHPUnit dengan file FileName.php.
    // Butuh Framework PHPUnit
    use PHPUnit\Framework\TestCase;
    
    // use berarti Mengimpor namespace atau kelas dari file TestCase dari PHPUnit, yang akan digunakan untuk menulis tes.

    // Class yang mau di TEST
    require_once "Wordcount.php";
    // require_once berarti mengimpor kelas Wordcount.php yang akan diuji. File "Wordcount.php" harus dipastikan sudah ada.

    // Class untuk run Testing.
    class SimpleTest extends TestCase{
        // Mendefinisikan kelas SimpleTest yang akan digunakan untuk menulis tes.
        // extends merupakan pewarisan inheritance dari class TestCase kepada class SimpleTest 

        public function testCountWords(){
            // function Mendefinisikan metode testCountWords yang akan menjalankan tes.
            // public berarti dapat diakses di file manapun

            // Memakai class yang mau kita test.
            $Wc = new WordCount();
            // Membuat objek WordCount untuk menguji fungsi countWords() yang dideklarasikan ke variabel Wc.

            // memasukkan parameter 4 kata, yang harusnya dapat output 4.
            $TestSentence = "My name if Fuad"; //4 kata ..
            // Menentukan value bertipe string pada variabel TestSentence.

            $WordCount = $Wc->countWords($TestSentence);
            // Memanggil metode countWords pada objek WordCount yang dideklarasikan ke variabel Wc. Kemudian menyimpan hasilnya dalam variabel $WordCount.

            // assert equal ekspetasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
            $this->assertEquals(4,$WordCount);
            // $this merujuk pada objek assertEquals yang merupakan objek dari kelas SimpleTest
            // Membandingkan hasil dari countWords dengan nilai yang diharapkan (4) dan memeriksa apakah keduanya sama.

        }
    }
?>
