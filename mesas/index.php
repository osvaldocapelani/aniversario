<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Mapa de Mesas</title>
    <style>

        .mesagreen{
            float: left;
            background: url(mesaGreen.png) bottom right;
            width: 41px;
            height: 41px;
            margin-left: 5px;
        }
        .mesaorange{
            float: left;
            background: url(mesaOrange.png) bottom right;
            width: 41px;
            height: 41px;
            margin-left: 5px;  
        }
        .mesared{
            float: left;
            background: url(mesaRed.png) bottom right;
            width: 41px;
            height: 41px;
            margin-left: 5px;
        }
        .textomesa{
            padding-top: 9px;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        .clear {
             clear: left;
             height:10px;
        }
        .corredor{
            background: url(corredor.svg);
            width: 50px;
            height: 100%;
        }
    </style>
</head>
<body>

<div class="container">
    <table>
        <tr>
            <td colspan="3">
                <img src="buffet.svg" alt="">
            </td>
        </tr>
        <tr>
            <td>
            <?php
                $mesa = 60;
                while ($mesa >= 1){
                if ($mesa % 6 == 0) echo "<div class='clear'></div>";
                    ?>
                    <div class="mesagreen">
                        <div class="textomesa">
                            <?php echo $mesa; ?>
                        </div>
                    </div>
                <?php
                    $mesa--;
                }
                ?>       
            </td>
    <td>
        <div class="corredor">
            &nbsp;
        </div>
    </td>
            <td>
                <?php
                    $mesa = 120;
                    while ($mesa >= 61){
                        if ($mesa % 6 == 0) echo "<div class='clear'></div>";
                            ?>

                            <div class="mesagreen">
                                <div class="textomesa">
                                    <?php echo $mesa; ?>
                                </div>
                            </div>
                        <?php

                        $mesa--;
                    }
                ?>        
            </td>

        </tr>
<tr>
    <td colspan="3">
        <img src="pista.svg" alt="">
    </td>
</tr>
    </table>




</div>



</body>
</html>