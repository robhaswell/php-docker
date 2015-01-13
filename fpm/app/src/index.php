<?php
if ($db = new SQLite3('counter.sqlite')) {
    // first let the engine check table, and create it eventualy
    $q = $db->query('CREATE TABLE IF NOT EXISTS counter (count int, PRIMARY KEY
        (count))');
    $count = (int)$db->querySingle("SELECT count FROM counter");
    echo "You are visitor number {$count}.";
    $count++;
    $db->query("DELETE FROM counter");
    $db->query("INSERT INTO counter (count) VALUES ({$count})");
}
?>
