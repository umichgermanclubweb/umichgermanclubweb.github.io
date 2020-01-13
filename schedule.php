<?php require_once('events.php');
$events = new Events;

// TODO - UPDATE SEMESTER SCHEDULE HERE:
// template $events->add_event('Date', 'Name', 'Time', 'Location', 'Description');
// NOTE: Date should be in YYYY-MM-DD format
// Winter 2020 Schedule -- updated through Feb. 13th
$stammtisch_description = 'Stammtisch is a weekly German conversation table that brings students of all language levels together to chat informally in German.';

$events->add_event('2020-01-14', 'German Club Tabling', '8 am', 'Chem Building', 'German Club Tabling with Donuts from Washtenaw Dairy');
$events->add_event('2020-01-15', 'Stammtisch', '7 pm', 'Union Tap Room', $stammtisch_description);
$events->add_event('2020-01-23', 'Stammtisch', '7 pm', 'Union Tap Room', $stammtisch_description);
$events->add_event('2020-01-31', 'TBD', 'TBD', 'TBD', 'TBD');
$events->add_event('2020-02-05', 'Stammtisch', '7 pm', 'Union Tap Room', $stammtisch_description);
$events->add_event('2020-02-13', 'Der Bachelor', 'TBD', 'TBD', '"Der Bachelor" Filmabend: Get in the Valentine\'s Day spirit with German Club with a viewing of the German edition of "Der Bachelor". Snacks will be provided.');