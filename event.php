<?php
date_default_timezone_set("America/New_York");
// semester schedule, e.g. W20
class Event {
    private $date = "2000-01-01";
    private $name = "Turn of the century";
    private $time = "12 AM";
    private $location = "U-M";
    private $description = "Sample event";

    function __construct($date_in, $name_in, $time_in, $location_in, $description_in) {
        $this->date = $date_in;
        $this->name = $name_in;
        $this->time = $time_in;
        $this->location = $location_in;
        $this->description = $description_in;
    }

    function get_date() {
        return $this->date;
    }

    function print_event($arg) {
        $date = date_create($this->date);
        $date = date_format($date,'l, F jS');
        echo "<h3> $arg $this->name </h3>";
        echo "<h4> Event Details: $date @ $this->time at $this->location </h4>";
        echo "<p>$this->description</p>";
    }
    
}

?>