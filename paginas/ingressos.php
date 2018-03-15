<div class="container">
<h1>Adquira seu ingresso para o baile</h1>
<p>Para adquirir o ingresso para o baile, primeiro faça a reserva da sua mesa, enviando uma mensagem via whatsapp para xx-xxxxx-xxxx</p>
<p>
    Em seguida faça o <strong>depósito identificado</strong> na:<br />
    C/C: 37.669-8<br />
    Agência: 3037-6<br />
    Banco do Brasil<br />
    <strong>Associação do Centro Acadêmico de Zootecnia IFMT Campus São Vicente<br /></strong>
    Favorecidos: Josilene Correa Rocha e Miller de Jesus Teodoro<br />
    CNPJ: 25.196.005/0001-62<br />
</p>
<p>Após realizar o depósito, envie nova mensagem com imagem do comprovante, ou arquivo .pdf do comprovante e sua identificação, para o whatsaap xx-xxxxx-xxxx</p>
<p>A reserva realizada por whatsapp, será mantida por apenas um dia, para evitar o "aprisionamento de mesa".</p>
<p>O pagamento somente será validado após identificação no extrato da conta bancária, por isso é importante enviar o comprovante e se identificar na hora da realização do depósito.</p>
<p>Abaixo você pode acompanhar o mapa das mesas da festa.</p>
<p>Não deixe para a última hora.</p>
<p>As confirmações das mesas serão feitas em ordem de recebimento do comprovante de depósito recebidos no whatsapp.</p>

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