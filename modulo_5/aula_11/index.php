<!-- <?php
        $var = 9;
        $var1 = 11;

        if ($var < $var1) {
            echo 'Menor';

        } else if ($var <= $var1) {
            echo 'Menor ou igual';
        }

        if ($var > $var1) {
            echo 'Maior';

        } else if ($var >= $var1) {
            echo 'Maior ou igual';     

        } else {
            echo 'Falso';
        }

?> -->

<?php

        $var1 = 'valor1';
        $var2 = 'valor1';
        $var3 = 'valor1';

        if (($var1 == $var2) && ($var2 == $var3)) {
            echo 'Tudo Igual';
        }

        if (($var1 == $var2) || ($var1 == $var3)) {
            echo '1 e 3 Iguais';
        }        

        // } else if ($var <= $var1) {
        //     echo 'Menor ou igual';
        // }

        // if ($var > $var1) {
        //     echo 'Maior';

        // } else if ($var >= $var1) {
        //     echo 'Maior ou igual';     

        // } else {
        //     echo 'Falso';
        // }

?> 