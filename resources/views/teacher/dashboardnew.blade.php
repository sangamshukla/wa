

    @php
        $today=\Carbon\Carbon::today()->format('d');
        $dates=[];

        for ($i=0; $i <7 ; $i++) {
            array_push($dates, $today);
            $today=$today+1;

        }
        $times=[];
        $start_time=\Carbon\Carbon::parse("08:00")->format('h:i');
        for ($i=0; $i < 25; $i++) {
            array_push($times, $start_time);
            $start_time=\Carbon\Carbon::parse($start_time)->addMinutes(30)->format("h:i");
        }
        echo "<table border=1>";
            echo "<tr>";
                echo "<td></td>";
            foreach ($dates as $date) {
                    echo "<th>";
                        echo $date;
                    echo "</th>";
                    }
                        echo "</tr>";
        foreach ($times as $time){
            echo "<tr>";
                echo "<td>$time</td>";
                foreach ($dates as $date) {
                    echo "<td>";
                    // echo "<strong>checking for $date....</strong><br>";
                    foreach ($session_data as $sessions) {
                        $sessions=(array)$sessions;
                        $session_date=\Carbon\Carbon::parse($sessions['start_date_time'])->format('d');
                        $session_time=\Carbon\Carbon::parse($sessions['start_date_time'])->format('h:i');
                        $time_plus_30=\Carbon\Carbon::parse($time)->addMinutes(30)->format('h:i');
                        // echo $time_plus_30;
                        if($date==$session_date)
                        {
                            if($time==$session_time)
                            {
                                echo "Class at $session_time<br>";
                                // echo "<b>yes</b><br>";
                            }
                            elseif ($session_time>$time && $time_plus_30>$session_time) {
                                echo "Class at $session_time<br>";
                            }
                        }
                    }
                }

        }
        echo "</td>";
        echo "</tr>";
        echo "</table>";
    @endphp
