<?php
function pattern3($pattern, $baris = 5, $symbol = '*') {
    switch ($pattern) {
        case "triangle_upside_left":
            for ($i = $baris; $i >= 1; $i--) {
                for ($j = $i; $j <= $baris; $j++) {
                    echo "$symbol ";
                }
                echo "<br>";
            }
            break;
        case "triangle_downside_left":
            for ($i = $baris; $i >= 1; $i--) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "$symbol ";
                }
                echo "<br>";
            }
            break;
        case "triangle_upside_right":
            for ($i = 1; $i <= $baris; $i++) {
                for ($j = 1; $j <= $baris-$i; $j++) {
                    echo "&nbsp;&nbsp;"; 
                }
                for ($k = 1; $k <= $i; $k++) {
                    echo "$symbol";
                }
                echo "<br>";
            }
            break;
        case "triangle_downside_right":
            for ($i = $baris; $i >= 1; $i--) {
                for ($j = 1; $j <= $baris-$i; $j++) {
                    echo "&nbsp;&nbsp;"; 
                }
                for ($k = 1; $k <= $i; $k++) {
                    echo "$symbol";
                }
                echo "<br>";
            }
            break;
        default:
            echo "Pola tidak diketahui.";
            break;
    }
}
pattern3("triangle_upside_left", 6, '$'); 
echo "<br>";
pattern3("triangle_downside_left", 10, '@'); 
echo "<br>";
pattern3("triangle_upside_right", 9, '#'); 
echo "<br>";
pattern3("triangle_downside_right", 7); 
?>