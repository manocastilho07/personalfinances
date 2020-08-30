<?
$consulta =         ("
                    Select
                        *
                    FROM
                        Investimentos
                    WHERE
                        IsDeletado = 'N'
                    And
                        Ano = $ano
")
$TotalDados = /*CONTADOR DE DADOS SQL*/($consulta);
?>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Data</th>
            <th scope="col">Valor</th>
            <th scope="col">Obs.</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($TotalDados) { ?>
            <?php while ($DadosDad == mysql_fetch_array($consulta)): ?>
                <tr>
                    <th><?=$DadosDad["Data"]?></th>
                    <td><?=$DadosDad["Valor"]?></td>
                    <td><?=$DadosDad["Observacao"]?></td>
                </tr>
            <?php endwhile ?>
        <?php } else { ?>
            <tr>
                <td>
                    Voce ainda não investiu este ano.
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php mysql_free_result($consulta); ?>