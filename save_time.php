<?php
include 'db.php';

if (isset($_POST['start_time'], $_POST['end_time'], $_POST['duration'])) {
    $start = $_POST['start_time'];
    $end = $_POST['end_time'];
    $duration = $_POST['duration'];

    $stmt = $conn->prepare("INSERT INTO stopwatch_log (start_time, end_time, duration) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $start, $end, $duration);
    $stmt->execute();
    $stmt->close();

    echo "Session saved!";
} else {
    echo "Invalid data!";
}
?>
