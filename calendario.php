<?php

    
?>
 
<table border="1" width="100%">
    <tr>
        <th>Dom</th>
        <th>Seg</th>
        <th>Ter</th>
        <th>Qua</th>
        <th>Qui</th>
        <th>Sex</th>
        <th>Sab</th>
    </tr>
    <?php for($l=0;$l<$linhas;$l++): ?>
        <tr>
            <?php for($q=0;$q<7;$q++):?>
                <?php
                $w = date('Y-m-d', strtotime(($q+($l*7)).' days', strtotime(
                    $data_inicio)) );
                ?>
                <td>
                <?php
                echo $w."<br/><br/>";

                foreach($lista as $item){
                    
                }
                ?></td>
            <?php endfor;?>
        </tr>
    <?php endfor;?>

</table>