<div class="container">

<p>Para adquirir o ingresso, primeiro faça a reserva da sua mesa, enviando uma mensagem via whatsapp para xx-xxxxx-xxxx</p>
<p>
    Em seguida faça o depósito na:<br />
    C/C: 37.669-8<br />
    Agência: 3037-6<br />
    Banco do Brasil<br />
    <strong>Associação do Centro Acadêmico de Zootecnia IFMT Campus São Vicente<br /></strong>
    Favorecidos: Josilene Correa Rocha e Miller de Jesus Teodoro<br />
    CNPJ: 25.196.005/0001-62<br />
</p>
<p>Após realizar o depósito, envie nova mensagem com imagem do comprovante, ou arquivo .pdf do comprovante e sua identificação, para o whatsaap xx-xxxxx-xxxx</p>
<p>O pagamento somente será validado após identificação no extrato da conta bancária, por isso é importante enviar o comprovante e se identificar.</p>
<p>Abaixo você pode acompanhar o mapa das mesas da festa.</p>
<p>Não deixe para a última hora.</p>
<p>As confirmações das mesas serão feitas em ordem de recebimento do comprovante de depósito recebidos no whatsapp.</p>

    <table align="center">
        <tr>
            <td colspan="3">
                <img src="./images/buffet.svg" alt="">
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
        <img src="./images/pista.svg" alt="">
    </td>
</tr>
    </table>




</div>