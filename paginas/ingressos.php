<div class="container">
<h1>Adquira seu ingresso para o baile</h1>
<p>Para adquirir o seu ingresso para o baile, siga estes passos:</p>
<p>1. Escolha o item que deseja adquirir:</p>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="lotes">
                <center><img src="images/indisponivel.svg" alt=""></center>
            </div>
        </div>
        <div class="col-md-4">
            <div class="lotesnao">
                <center><img src="images/indisponivel2.svg" alt=""></center>
            </div>
        </div>
        <div class="col-md-4">
            <div class="lotesnao">
                <center><img src="images/indisponivel3.svg" alt=""></center>
            </div>
        </div>
    </div>
</div>


<p style="text-align: center;"> <br /><strong>Não deixe para a última hora. Ingressos limitados!</strong></p>

<p>2. Faça um depósito identificado, no valor correspondente, conforme os dados abaixo:</p>

<div class="banco">
    Banco do Brasil <br />
    Agência: 3037-6 C/C: 37.669-8<br />
    Em nome da Associação do Centro Acadêmico de Zootecnia IFMT Campus São Vicente<br />
    Favorecidos: Josilene Correa Rocha e Miller de Jesus Teodoro<br />
    CNPJ: 25.196.005/0001-62
</div>

<br />


<p>3. Envie via mensagem de Whastapp (para o número 66-98114-0846 o comprovante do depósito e o número da mesa desejada. A sua compra será efetivada após a confirmação do crédito na conta bancária.</p>

<p>4. Você receberá uma mensagem confirmando a compra.</p>

<p>5. A retirada do ingresso (mesa ou individual) deverá ser feita no dia da festa, mediante documento de identificação do comprador.</p>

<p style="text-align: center;"> <br /><strong>Obs: As confirmações das mesas serão feitas em ordem de recebimento do comprovante de depósito. </strong></p>

<hr class="style-one">

<table align="center">
    <tr>
        <td>
            <p style="text-align:center;"><strong>Legenda</strong></p>
        </td>
    </tr>
    <tr>
        <td><img src="./images/mesaGreen.png" alt="icone de mesa"></td>
        <td>Mesa Livre</td>        
    </tr>
    <tr>
        <td><img src="./images/mesaOrange.png" alt="icone de mesa"></td>
        <td>Mesa Reservada</td>
    </tr>
    <tr>
        <td><img src="./images/mesaRed.png" alt="icone de mesa"></td>
        <td>Mesa Adquirida</td>
    </tr>
</table>
<hr />
<table align="center">
        <tr>
            <td colspan="3">
                <img src="./images/buffet.svg" alt="">
            </td>
        </tr>
        <tr>
            <td>
            <?php
                $mesa = 0;
                
                    include "./banco/conecta.php";
                    $sql ="SELECT * FROM mesas"; //Consulta
                    try{
                            $consulta = $db->prepare($sql);//prepara a consulta para evitar sql injection
                            $consulta->execute(); //executa a consulta
                        } 
                    catch(PDOException $e) {
                                echo $e -> getMessage(); //Se não conseguiu fazer a consulta retorna um erro
                        }

                        while (($resultado = $consulta->fetch(PDO::FETCH_OBJ)) && ($mesa <= 59)){
        
                            if ($mesa % 5 == 0) echo "<div class='clear'></div>";
                            ?>
                            <div class="<?php echo $resultado->situacao; ?>">
                                <div class="textomesa">
                                    <?php echo $resultado->mesa; ?> 
                                </div>
                            </div>

                        <?php 
                        $mesa++;
                        } ?>       
            </td>
    <td>
        <div class="corredor">
            &nbsp;
        </div>
    </td>
            <td>
                <?php
                    $mesa1 = 61;
                
                    $sql ="SELECT * FROM mesas WHERE id > 60"; //Consulta
                    try{
                            $consulta = $db->prepare($sql);//prepara a consulta para evitar sql injection
                            $consulta->execute(); //executa a consulta
                        } 
                    catch(PDOException $e) {
                                echo $e -> getMessage(); //Se não conseguiu fazer a consulta retorna um erro
                        }
                        echo"<br />";//arrumando o alinhamento
                        while (($resultado1 = $consulta->fetch(PDO::FETCH_OBJ)) && ($mesa1 <= 120)){
        
                            
                            ?>
                            <div class="<?php echo $resultado1->situacao; ?>">
                                <div class="textomesa">
                                    <?php echo $resultado1->mesa; ?> 
                                </div>
                            </div>

                        <?php 
                        if ($mesa1 % 5 == 0) echo "<div class='clear'></div>";
                        $mesa1++;
                        } ?>    

            </td>

        </tr>
    <tr>
        <td colspan="3">
            <img src="./images/pista.svg" alt="">
        </td>
    </tr>
</table>
    




</div>