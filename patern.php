<?php 
function print_pattern($func_name) {
    if ($func_name == "pattern1") {
        echo "$&nbsp;\n$$&nbsp;\n$$$";
    } elseif ($func_name == "pattern2") {
        echo "***\n**&nbsp;\n*";
    } elseif ($func_name == "pattern3") {
        echo "&nbsp;&nbsp;#&nbsp;&nbsp;\n&nbsp;###&nbsp;\n#####";
    } else {
        echo "Pattern tidak ditemukan";
    }
    echo "<br>";
}

print_pattern("pattern1"); // untuk menampilkan dolar
print_pattern("pattern2"); // untuk menampilkan bintang 
print_pattern("pattern3"); // untuk menampilkan pagar
print_pattern("pattern4"); // untuk menampilkan "Pattern tidak ditemukan"


    
  ?>
