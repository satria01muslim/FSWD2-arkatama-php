 <?php 
function pattern_satu() {
    echo "*<br>";
    echo "**<br>";
    echo "***<br>";
    echo "****<br>";
    echo "*****<br>";
}
function pattern_dua() {
    echo "&nbsp;&nbsp;&nbsp;<br>";
    echo "*****<br>";
    echo "****<br>";
    echo "***<br>";
    echo "**<br>";
    echo "*<br>";
    echo "&nbsp";
}
function pattern_tiga() {
    echo "&nbsp;&nbsp;&nbsp;<br>";
    echo "&nbsp;&nbsp;&nbsp;*<br>";
    echo "&nbsp;&nbsp;***<br>";
    echo "****<br>";
    echo "&nbsp;&nbsp;**<br>";
    echo "&nbsp;&nbsp;&nbsp;*****<br>";
}
function pattern_empat() {
    echo "&nbsp;&nbsp;&nbsp;<br>";
    echo "*****<br>";
    echo "&nbsp;&nbsp;***<br>";
    echo "&nbsp;&nbsp;&nbsp;****<br>";
    echo "&nbsp;&nbsp;*<br>";
    echo "**<br>";
}

function print_pattern($func_name) {
    if (function_exists($func_name)) {
        $func_name();
    } else {
        echo "&nbsp;&nbsp;&nbsp;<br>";
        echo "Pattern tidak ditemukan";

    }
}
print_pattern("pattern_satu"); // untuk menampilkan pola bintang pertama
print_pattern("pattern_dua"); // untuk menampilkan bintang kedua
print_pattern("pattern_tiga"); // untuk menampilkan bintang ketiga
print_pattern("pattern_empat"); // untuk menampilkan bintang keempat"
print_pattern("pattern_lima"); // untuk menampilkan "Pattern tidak ditemukan"  
  ?>
