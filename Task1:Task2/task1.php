<?php
function myArrowFunc (int $x)
{

    for ($i = 0; $i < $x; $i++) {
       echo "<";

    }


    for ($i=0; $i<$x; $i++) {
         echo ">";
    }
}
myArrowFunc(5);