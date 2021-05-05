
<div id="container_style" class="container">
    <table class="table table-striped table-bordered">
        <tr>
            <th>název</th>    
            <th>výrobce</th>
            <th>počet dílků</th>
            <th>svítí v noci</th>
         </tr>
        <?php foreach($vypis as $v): ?>
        <tr>
            <td><?php echo $v->nazev; ?></td>
            <td><?php echo $v->vyrobce; ?></td>
            <td><?php echo $v->pocet_dilku; ?></td>
            <td><?php 
                    if($v->sviti_v_noci == 0){
                            echo "NE";
                        }
                        else 
                            echo "ANO";
                ?>
            
            </td>
         </tr>
         <?php endforeach; ?>     
    </table>
</div>
 