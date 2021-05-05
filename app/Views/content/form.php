
<div id="container_style" class="container"> 
      
    <?php $validation = \Config\Services::validation();?>
    
    <form action="<?= base_url("form_submit"); ?>" method="post">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="nazev">Název</label>
                <input type="input" class="form-control" name="nazev">
                <?php 
                    if($validation->getError('nazev')){
                        echo '<div class="alert alert-danger mt-2">'.$validation->getError('nazev').'</div>';
                    }
                ?>
            </div>
            <div class="col">
                <label for="vyrobce">Výrobce</label>
                <input type="input" class="form-control" name="vyrobce">
                <?php 
                    if($validation->getError('vyrobce')){
                        echo '<div class="alert alert-danger mt-2">'.$validation->getError('vyrobce').'</div>';
                    }
                ?>
            </div>
         </div>
    </div>
    <div class="form-group">
    <div class="row">
            <div class="col">
                <label for="pocet_dilku">Počet dílků</label>
                <input type="input" class="form-control" name="pocet_dilku">
                <?php 
            if($validation->getError('pocet_dilku')){
                echo '<div class="alert alert-danger mt-2">'.$validation->getError('pocet_dilku').'</div>';
            }
        ?>
            </div>
            <div class="col">
                <div class="form-group">   
                    <label for="sviti_v_noci">Svítí v noci</label>
                    <select name="sviti_v_noci"  class="form-control">
                        <option value="1">ano</option>
                        <option value="0">ne</option>
                    </select>
                </div>
            </div>
         </div>
    </div>
    <button type="submit"  name='submit' value='Submit' class="btn btn-primary">Submit</button>
    </form>
    
</div>