<?php
$title_name = 'Projekte';
include_once ('header.php');
include_once ('navigation.php');
?>

<!-- place content here -->
<div class="col-md-7">
<h3>Projekt auswählen:</h3>
<div class="form-group">
    <select class="form-control" id="exampleFormControlSelect1">
        <option value="" disabled selected hidden> -bitte auswählen-</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
</div>
<div>
    <a class="btn btn-primary" href="#" role="button">Auswählen</a>
    <a class="btn btn-primary" href="#" role="button">Bearbeiten</a>
    <button type="button" class="btn btn-danger">Löschen</button>
</div>
<h3>Projekt bearbeiten/erstellen:</h3>
<div class="form-group">
    <label for="Projektname">Projektname:</label>
    <input type="text" class="form-control" id="Projektname" placeholder="Projekt">
</div>
<div class="form-group">
    <label for="Projektbeschreibung">Projektbeschreibung:</label>
    <textarea class="form-control" id="Projektbeschreibung" rows="3" placeholder="Beschreibung"></textarea>
</div>
<div>
    <a class="btn btn-primary" href="#" role="button">Speichern</a>
    <button type="button" class="btn btn-info">Reset</button>
</div>

<?php
include_once ('footer.php');
?>

