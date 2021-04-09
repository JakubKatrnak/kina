
<div id="container_style" class="container"> 
    
    <h2 id="menu"><?= esc($title) ?></h2> 
    
    <div id="text_def"><?= \Config\Services::validation()->listErrors() ?></div>
    
    <form action="<?= base_url("form_submit"); ?>" method="post">
    <?= csrf_field() ?>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="nazev_filmu">Originální název filmu</label>
                <input type="input" class="form-control" name="nazev_filmu">
            </div>
            <div class="col">
                <label for="jazyk">Jazyk</label>
                <input type="input" class="form-control" name="jazyk">
            </div>
         </div>
    </div>
    <div class="form-group">
    <div class="row">
            <div class="col">
                <label for="alt_nazev">alternativní název</label>
                <input type="input" class="form-control" name="alt_nazev">
            </div>
            <div class="col">
                <label for="jazyk_alt">Jazyk</label>
                <input type="input" class="form-control" name="jazyk_alt">
            </div>
         </div>
    </div>
    <div class="form-group">
        <label for="delka">Délka</label>
        <input type="input" class="form-control" name="delka">
    </div>
    <div class="form-group">   
        <label for="typ">Typ</label>
        <select name="typ"  class="form-control">
            <option value="2">Animovaný</option>
            <option value="1">Hraný</option>
        </select>
    </div>
    <div class="form-group">   
        <label for="druh">Zanr</label>
        <select name="druh"  class="form-control">
            <option value="1">Komedie</option>
            <option value="2">Thriller</option>
            <option value="3">Drama</option>
            <option value="4">Rodinný film</option>
            <option value="5">Sci-fi</option>
        </select>
    </div>
    <button type="submit"  name='submit' value='Submit' class="btn btn-primary">Submit</button>
    </form>
    
</div>