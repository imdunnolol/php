//https://codeforces.com/problemset/problem/112/A?locale=ru
<?php
$lineOne = "aABAaaaa";
$lineTwo = "aabAaaaa";

for($i = 0; $i < mb_strlen($lineOne); $i++ ){
    if(mb_strtolower($lineOne) == mb_strtolower($lineTwo)) {
        echo "0\n";
        break;
    }
    elseif(mb_ord(mb_str_split(mb_strtolower($lineOne))[$i]) < mb_ord(mb_str_split(mb_strtolower($lineTwo))[$i])){
        echo "-1\n";
        break;
    }else{ 
        echo "1\n";
        break;
    }
}
