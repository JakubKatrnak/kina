<div id="container_style" class="container"> 
    <form method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Název filmu</label>
        <input type="text" class="form-control" id="bookName" name="nazev_knihy" placeholder="">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Alternativní název</label>
        <input type="text" class="form-control" id="authorName" name="autor"  placeholder="">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Délka</label>
        <input type="text" class="form-control" id="cover" name="prebal" placeholder="">
    </div>
    <div class="form-group">   
        <label for="exampleInputPassword1">Typ</label>
        <select name="obdobi_idobdobi"  class="form-control">
            <option value="1">Animovaný</option>
            <option value="2">Hraný</option>
        </select>
    </div>
    <button type="submit"  name='submit' value='Submit' class="btn btn-primary">Submit</button>
    </form>
</div>