<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Custom Captcha in JavaScript | CodingNepal</title>
  <link rel="stylesheet" href="style.css">
  <!-- Font Awesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <header>Captcha in JavaScript</header>
    <div class="captcha-area">
      <div class="captcha-img">
        <img src="captcha-bg.gif" alt="Captch Background">
        <span class="captcha"></span>
      </div>
      <button class="reload-btn"><i class="fas fa-redo-alt"></i></button>
    </div>
    <form action="#" class="input-area">
      <input type="text" placeholder="Enter captcha" maxlength="6" spellcheck="false" required>
      <button class="check-btn">Check</button>
    </form>
    <div class="status-text"></div>
  </div>
  <script src="script.js"></script>
</body>
</html>