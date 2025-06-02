CREATE DATABASE stopwatch_db;

USE stopwatch_db;

CREATE TABLE stopwatch_log (
    id INT AUTO_INCREMENT PRIMARY KEY,
    start_time DATETIME,
    end_time DATETIME,
    duration TIME,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
