<?php echo file_get_contents("html/header.html"); ?>

<?php require_once('schedule.php');

$next_event = $events->find_next_event();
if ($next_event) {
    $next_event->print_event("Our Next Event: ");
}
else {
    echo "<h2> Our Next Event: Break </h2>";
    echo "<p>There are no German Club events between now and the end of the semester:-( We'll see you again at the start of next semester:-) <em>Sch&ouml;ne Ferien!</em></p>";
}
?>
<?php echo file_get_contents("html/footer.html"); ?>
<p>Copyright &copy; 2020-<?php echo date("Y"); ?> University of Michigan German Club </p>