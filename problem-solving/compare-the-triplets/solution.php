<?php

    function compareTriplets($a, $b) {
        $alice = 0;
        $bob = 0;
        for ($i = 0; $i < count($a); $i++) {
            if ($a[$i] > $b[$i]) {
                $alice++;
            } else if ($a[$i] < $b[$i]) {
                $bob++;
            }
        }
        return [$alice, $bob];
    }

?>