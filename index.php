<?php
    $json = file_get_contents("src/data.json");
    $data = json_decode($json);

    $charcoal = $data->carvao ? "Yes" : "Not";
    $damage_dealt = $data->dano_causado;
    $money = $data->dinheiro;
    $actual_world = $data->fase;
    $damage = $data->forca;
    $killed_enemies = $data->inimigos_derrotados;
    $kits = $data->kit_medico;
    $level = $data->nivel;
    $jumps = $data->pulos;
    $life = $data->vida;
    $maxlife = $data->vida_maxima;
    $xp = $data->xp;
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Kauan's Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/icon.png">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/styles.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Monomaniac+One&display=swap" rel="stylesheet">

    </head>
    <body>
        <div id="screen-content">
            <div id="left-side">
                <div id="char-image-div">
                    <img id="char-image" src="img/char-img.jpg" />
                </div>

                <div id="char-statistics-div">
                    <h1 id="statistics-title">STATISTICS</h1>
                    <br><br>
                    <p class="statistics-paragraph">Killed Enemies: 
                        <?php echo $killed_enemies?>
                    </p>
                    <p class="statistics-paragraph">Damage Dealt: 
                        <?php echo $damage_dealt?>
                    </p>
                    <p class="statistics-paragraph">Jumps: 
                        <?php echo $jumps?>
                    </p>
                </div>
            </div>
            <div id="right-side">
                <div id="char-general-div">
                    <h1 id="general-title">KAUAN</h1>
                    <div id="player-info-side1">
                        <p class="general-paragraph" id="level">LEVEL: 
                            <?php echo $level?>
                        </p>
                        <br>
                        <p class="general-paragraph" id="money">MONEY: 
                            <?php echo $money?>
                        </p>
                    </div>
                    <div id="player-info-side2">
                        <p class="general-paragraph" id="max-life">MAX-LIFE: 
                            <?php echo $maxlife?>
                        </p>
                        <br>
                        <p class="general-paragraph" id="kits">KITS: 
                            <?php echo $kits?>
                        </p>
                    </div>
                </div>

                <div id="char-rightdown-div">
                    <div id="char-stats-div">
                        <h1 id="stats-title">STATS</h1>
                        <br>
                        <p class="stats-paragraph" id="life">LIFE: 
                            <?php echo $life."/".$maxlife?>
                        </p>
                        <p class="stats-paragraph" id="damage">DAMAGE: 
                            <?php echo $damage?>
                        </p>
                        <p class="stats-paragraph" id="xp">XP: 
                            <?php echo $xp?>
                        </p>
                        <p class="stats-paragraph" id="charcoal">CHARCOAL: 
                            <?php echo $charcoal?>
                        </p>
                    </div>
                    <div id="actual-world-div">
                        <h1 id="actual-world-title">ACTUAL WORLD</h1>
                        <p class="actual-world-paragraph" id="word-name">
                            <?php echo strtoupper($actual_world)?>
                        </p>
                        <br>
                        <img id="actual-world-img" <?php echo "src=\"img/worlds/$actual_world.png\"" ?>/>
                    </div>
                </div>
            </div>
            
        </div>
    </body>
</html>