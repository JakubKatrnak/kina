
<div id="container_style" class="container"> 
    
    <h2 id="menu"><?= esc($title) ?></h2> 
    
    <?= \Config\Services::validation()->listErrors() ?>
    
    <form action="/kina/form" method="post">
    <?= csrf_field() ?>
    <div class="form-group">
        <label for="nazev_filmu">Název filmu</label>
        <input type="input" class="form-control" name="nazev_knihy">
    </div>
    <div class="form-group">
        <label for="alternativni_nazev">Alternativní název</label>
        <input type="input" class="form-control" name="alternativni_nazev">
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
        <label for="druh">Druh</label>
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