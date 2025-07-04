<?php
setcookie("part5", "hehe}", time() + (8 * 60 * 60), "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Simple PHP Cookie Challenge</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Welcome to HeHe</h1>

  <button onclick="showHint()">Click for a hint</button>
  <p id="hint"></p>

  <script src="script.js"></script>
</body>
</html>
