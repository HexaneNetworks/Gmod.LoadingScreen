<?php
if (isset($_GET["steamid"])) {
    $steamid = $_GET["steamid"];
} else {
    $steamid = 76561198324110493;
}

$steamInfo = simplexml_load_string(file_get_contents("https://steamcommunity.com/profiles/" . $steamid . "?xml=1"));

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <style>

        body {
            background: #c72c2c;
            background: -moz-linear-gradient(left, #630f0f 0%, #c72c2c 100%) no-repeat fixed;
            background: -webkit-linear-gradient(left, #630f0f 0%, #c72c2c 100%) no-repeat fixed;
            background: linear-gradient(to right, #630f0f 0%, #c72c2c 100%) no-repeat fixed;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#630f0f', endColorstr='#c72c2c', GradientType=1);
            margin: 0;
        }

        .hexaneload-align {
            left: 0;
            margin: -100px auto auto auto;
            position: absolute;
            top: 50%;
            width: 100%;
            text-align: center;
        }

        .hexaneload-spacer-branding {
            margin-top: 200px;
        }

        .hexaneload-title {
            font-family: 'Pacifico', cursive;
            color: #fff;
            font-size: 22px;
            text-align: center;
            margin-bottom: -20px;
            font-weight: 500;
        }

        .hexaneload-hostname-hostname {
            font-family: 'Luckiest Guy', cursive;
            color: #fff;
            font-size: 29px;
            text-align: center;
            font-weight: 500;
        }
    </style>

    <script type="text/javascript">
        function GameDetails(servername) {
            document.getElementById("hexaneload-servername").innerHTML = servername;
        }
    </script>
</head>
<body>

<div class="hexaneload-align">
    <p class="hexaneload-title">Welcome, <?php echo $steamInfo->steamID; ?>! You're connecting to</p>
    <p class="hexaneload-hostname-hostname" id="hexaneload-servername">Hexane Networks</p>
    <div class="hexaneload-spacer-branding">
        <img src="https://cdn.hexanenetworks.com/billing/img/footer/footer-hexanenetworks-logo-white.png">
    </div>
</div>
</body>
</html>