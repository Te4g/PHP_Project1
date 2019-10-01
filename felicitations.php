<?php
function comp($a1, $a2)
{
    function custom_sort($array)
    {
        asort($array);
        return $array;
    }

    if (is_array($a1) && is_array($a2) && isset($a1) && isset($a2)) {
        $sortedA1 = custom_sort($a1);
        $sortedA2 = custom_sort($a2);
        $newSortedA2 = [];
        for ($i = 0; $i < count($sortedA2); $i++) {
            $newSortedA2[$i] = sqrt($sortedA2[$i]);
        }
        if ($sortedA1 == $newSortedA2) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}