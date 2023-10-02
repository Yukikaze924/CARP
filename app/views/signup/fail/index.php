<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>错误</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="popup">
                <h2>出现了一些问题!</h2>
                <p>账号已存在</p>
                <button type="button" class="confirm" title="Confirm" onclick="window.location.href='<?php echo CONTROLLER_PATH . '/RegisterController.php' ?>'">返回</button>
            </div>
        </div>
    </body>
</html>
