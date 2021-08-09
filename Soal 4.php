<?php 
    for($i = 1; $i <= 50; $i++){
        if($i % 3 == 0 && $i % 5 != 0){
            echo "Foo\r\n";
            continue;
        } else if($i % 5 == 0 && $i % 3 != 0) {
            echo "Bar\r\n";
            continue;
        } else if($i % 3 == 0 && $i % 5 == 0){
            echo "FooBar\r\n";
            continue;
        }
        echo "$i\r\n";
    }
?>