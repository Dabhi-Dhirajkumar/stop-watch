<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clock & Stopwatch</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>🕒 Clock & Stopwatch</h2>

        <div class="clock-box">
            <h3>Current Time</h3>
            <div id="clock">00:00:00</div>
        </div>

        <div class="stopwatch-box">
            <h3>Stopwatch</h3>
            <div id="stopwatch">00:00:00</div>
            <div class="buttons">
                <button id="startBtn">Start</button>
                <button id="stopBtn">Stop</button>
                <button id="resetBtn">Reset</button>
            </div>
        </div>

        <button id="viewHistoryBtn">View Session History</button>
        <div id="historyArea"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
