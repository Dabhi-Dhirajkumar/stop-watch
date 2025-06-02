// CLOCK
function updateClock() {
    const now = new Date();
    const timeStr = now.toLocaleTimeString();
    $('#clock').text(timeStr);
}
setInterval(updateClock, 1000);
updateClock();

// STOPWATCH
let startTime, stopwatchInterval;
let running = false;

function updateStopwatch() {
    const now = new Date().getTime();
    const elapsed = new Date(now - startTime);

    const h = String(elapsed.getUTCHours()).padStart(2, '0');
    const m = String(elapsed.getUTCMinutes()).padStart(2, '0');
    const s = String(elapsed.getUTCSeconds()).padStart(2, '0');

    $('#stopwatch').text(`${h}:${m}:${s}`);
}

$('#startBtn').click(function () {
    if (!running) {
        startTime = new Date().getTime();
        stopwatchInterval = setInterval(updateStopwatch, 1000);
        running = true;
    }
});

$('#stopBtn').click(function () {
    if (running) {
        clearInterval(stopwatchInterval);
        running = false;

        const endTime = new Date().getTime();
        const duration = new Date(endTime - startTime);
        const h = String(duration.getUTCHours()).padStart(2, '0');
        const m = String(duration.getUTCMinutes()).padStart(2, '0');
        const s = String(duration.getUTCSeconds()).padStart(2, '0');
        const durationStr = `${h}:${m}:${s}`;

        // Save to DB
        $.ajax({
            url: 'save_time.php',
            method: 'POST',
            data: {
                start_time: new Date(startTime).toISOString(),
                end_time: new Date(endTime).toISOString(),
                duration: durationStr
            },
            success: function (response) {
                alert(response);
            }
        });
    }
});

$('#resetBtn').click(function () {
    clearInterval(stopwatchInterval);
    running = false;
    $('#stopwatch').text('00:00:00');
});

$('#viewHistoryBtn').click(function () {
    $.ajax({
        url: 'history.php',
        success: function (data) {
            $('#historyArea').html(data);
        }
    });
});
