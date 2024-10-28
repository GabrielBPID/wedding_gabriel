<php?
    function formatdate($datestring, $format) {
        if (!$datestring){
            return "";
        }
    
        try {
            $date = new DateTime($datestring);
            $timezone = new DateTimeZone("Asia/Jakarta");
            $date->setTimezone($timezone);
        
            return $date->format($format);
        }   catch (Execution $e){
            return "";
        }
    }

    function countdown($datestring){
        $weddingDate = new DateTime($datestring);
        $weddingDate->setTime(0, 0);
        $now = new DateTime();
        $now->setTime(0, 0);

        $countdown = $now->diff($weddingDate)->format("%r%a");
        if ($countdown <0){
            if (countdown < 0){
            $countdown = 0;
            }

            return $countdown;
        }
    ?>
    }