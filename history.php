<?php
include 'db.php';

$result = $conn->query("SELECT * FROM stopwatch_log ORDER BY id DESC LIMIT 10");

if ($result->num_rows > 0) {
    echo "<h4>Stopwatch Session History</h4><ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li><b>Start:</b> {$row['start_time']} | <b>End:</b> {$row['end_time']} | <b>Duration:</b> {$row['duration']}</li>";
    }
    echo "</ul>";
} else {
    echo "No sessions logged yet.";
}
?>
