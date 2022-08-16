<?php
    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        $splittedArr = str_split($s);
        
        // count the number of occurences of each value
        $numOffOcr = array_count_values($splittedArr);
        
        // filtering only unique values
        $uniqueVal = array_filter($numOffOcr, function($item){ return $item == 1; });
        
        if(empty($uniqueVal)) {
            return -1;
         }        
        
        // to fetched first unique
        // fetching filtered values as keys
        $firstUnique = array_keys($uniqueVal); 
        
        $result = array_search($firstUnique[0], $splittedArr);
        return $result;
    }
