<?php
/**
 * @param String[] $strs
 * @return String
 */
function longestCommonPrefix($strs) {
    $i = 0;
    $firstPostion = 0;
    $longestPrefix = "";

    while (true) {
        if (count($strs) === 0 || !$strs[$firstPostion][$i]) {
            return $longestPrefix;
        }

        $nextCharacter = $strs[$firstPostion][$i];

        for ($j = 0; $j < count($strs); $j++) {
            if ($strs[$j][$i] != $nextCharacter) {
                return $longestPrefix;
            }
        }

        $i++;
        $longestPrefix = $longestPrefix . $nextCharacter;
    }
}