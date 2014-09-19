
<?

    $test1 = array(8, 2, 3, 4, 3, 2, 1, 9, 10, 11 );

    print_r(findConsecutiveRuns($test1));

    function findConsecutiveRuns($data) 
    {
        $runs = array();

        for ($i = 0; $i < count($data); $i++) 
        {
            $first  = $data[$i];
            $second = $data[$i+1];
            $third  = $data[$i+2];

            if ($first-1 === $second && $second-1 === $third) 
            {
                $runs[] = $i;
            }
            
            if ($first+1 === $second && $second+1 === $third) 
            {
                $runs[] = $i;
            }
            
            echo $i . '<br>' ;
            
        }

        if (empty($runs))
            return null;
        else
            return $runs;
    }

?>