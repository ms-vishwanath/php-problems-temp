<!DOCTYPE html>
<html>
<head>
    <title>Message Received</title>
</head>
<body>
    <?php
    if (isset($_POST['username'])) {
        $name = $_POST['username'];
        echo "Message received. Welcome, " . htmlspecialchars($name);
    } else {
        echo "No message received.";
    }
    ?>
</body>
</html>
