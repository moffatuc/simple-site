<?php
$issue = $_GET['i'];
if ($issue < 10) {
    header( 'Location: https://connectors5086.org/newsletters/Issue%200' . $issue . '.pdf') ;
} else {
    header( 'Location: https://connectors5086.org/newsletters/Issue%20' . $issue . '.pdf') ;
}
