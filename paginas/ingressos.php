<div class="container">

<h1>Adquira seu ingresso para o baile</h1>
<h3>O baile será animado pela <a href="https://www.facebook.com/bandabisoficial/" target="_blank">Banda Bis</a> e a compra do ingresso dá direito a buffet de frios e salgadinhos.</h3>
<p>Para adquirir o seu ingresso para o baile, siga estes passos:</p>
<p><strong>1. Escolha o item que deseja adquirir:</strong></p>

<div class="container">
    
            <div class="lotes">
                <img src="./images/lote01.jpg" width="100%" alt="Ingressos à venda"
            </div>
       
</div>


<p style="text-align: center;"> <br /><strong>Não deixe para a última hora. Ingressos limitados!</strong></p>

<p><strong>2. Faça um depósito identificado, no valor correspondente, conforme os dados abaixo:</strong></p>

<div class="banco">
    Banco do Brasil <br />
    Agência: 3037-6 C/C: 37.669-8<br />
    Em nome da Associação do Centro Acadêmico de Zootecnia IFMT Campus São Vicente<br />
    Favorecidos: Josilene Correa Rocha e Miller de Jesus Teodoro<br />
    CNPJ: 25.196.005/0001-62
</div>

<br />


<p><strong>3. Envie por mensagem de Whastapp (para o número 66-98114-0846) o comprovante do depósito e o número da mesa desejada. A sua compra será efetivada após a confirmação do crédito na conta bancária.</strong></p>

<p><strong>4. Você receberá uma mensagem confirmando a compra.</strong></p>

<p><strong>5. A retirada do ingresso (mesa ou individual) deverá ser feita até o dia da festa, na sede do câmpus, mediante documento de identificação do comprador.</strong></p>

<p style="text-align: center;"> <br /><strong>Obs: As confirmações das mesas serão feitas em ordem de recebimento do comprovante de depósito. <br />PROIBIDA A ENTRADA DE CERVEJA.</strong></p>

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
                $mesa = 120;
                $array = array(115, 105, 95, 85, 75, 65, 55, 45, 35, 25, 15, 5); 
                
                
                    include "./banco/conecta.php";
                    $sql ="SELECT * FROM mesas ORDER BY id DESC"; //Consulta
                    try{
                            $consulta = $db->prepare($sql);//prepara a consulta para evitar sql injection
                            $consulta->execute(); //executa a consulta
                        } 
                    catch(PDOException $e) {
                                echo $e -> getMessage(); //Se não conseguiu fazer a consulta retorna um erro
                        }

                        while (($resultado = $consulta->fetch(PDO::FETCH_OBJ)) && ($mesa >= 1)){
        
if ($mesa % 10 == 0) echo "<div class='clear'></div>\n";
if (in_array($mesa, $array, true))echo "<div class='corredor'>&nbsp;</div>\n";

                            ?>

                            <div class="<?php echo $resultado->situacao; ?>">
                                <div class="textomesa">
                                    <?php echo $resultado->mesa; ?> 
                                </div>
                            </div>

                        <?php 
                        
                        $mesa--;
                        
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