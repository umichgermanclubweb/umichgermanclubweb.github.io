<?php 
require_once 'event.php';
class Events {
    private $events = array();

    function add_event($date_in, $name_in, $time_in, $location_in, $description_in) {
        array_push($this->events, new Event($date_in, $name_in, $time_in, $location_in, $description_in));
    }

    function find_next_event() {
        $present = strtotime('now');
        $nearest = strtotime('2100-01-01');
        //echo $present . "\n";
        //echo $nearest . "\n";
        $next_event = NULL;
        foreach($this->events AS $event) {
            $timestamp = strtotime($event->get_date());
            //echo $timestamp . "\n";
            if($timestamp > $present && $timestamp < $nearest) {
                $nearest = $timestamp;
                $next_event = $event;
                //echo "Found earlier event in the future\n";
            } else {
                //echo "Found later event in the future or event in past\n";
            }
        }
        return $next_event;
    }

    function print_events() {
        $present = strtotime('now');
        $nearest = strtotime('2100-01-01');
        foreach($this->events AS $event) {
            $timestamp = strtotime($event->get_date());
            if($timestamp > $present && $timestamp < $nearest) {
                $event->print_event('');
            }
        }
    }
}
?>