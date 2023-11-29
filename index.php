<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Panel</title>
</head>
<body>
    <h1>Control Panel</h1>

    <form method="post" action="index.php">
        <label for="command">Enter Command:</label>
        <input type="text" id="command" name="command" required>
        <button type="submit">Execute</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $command = $_POST["command"];
        $output = shell_exec("python3 execute_command.py '" . escapeshellarg($command) . "'");
        echo "<h2>Command Result:</h2>";
        echo "<pre>$output</pre>";
    }
    ?>
</body>
</html>
