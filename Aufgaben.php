<?php
$title_name = 'Aufgaben';
include_once ('header.php');
include_once ('navigation.php');

$aufgaben  = array(
    array(
        'bezeichnung' => 'HTML Datei erstellen',
        'beschreibung' => 'HTML Datei erstellen',
        'reiter' => 'ToDo',
        'zuständig' => 'Max Mustermann'
    ),

    array(
        'bezeichnung' => 'CSS Datei erstellen',
        'beschreibung' => 'CSS Datei erstellen',
        'reiter' => 'ToDo',
        'zuständig' => 'Max Mustermann'
    ),

    array(
        'bezeichnung' => 'PC eingeschaltet',
        'beschreibung' => 'PC eingeschalten',
        'reiter' => 'Erledigt',
        'zuständig' => 'Max Mustermann'
    ),

    array(
        'bezeichnung' => 'Kaffee trinken',
        'beschreibung' => 'Kaffee trinken',
        'reiter' => 'Erledigt',
        'zuständig' => 'Petra Müller'
    ),

    array(
        'bezeichnung' => 'Für die Uni lernen',
        'beschreibung' => 'Für die Uni lernen.',
        'reiter' => 'Verschoben',
        'zuständig' => 'Max Mustermann'
    )
)
?>
    <div class="col-md-7">
    <table class="table">
        <thead>
        <tr class="table-active">
            <th scope="col" width="20%">Aufgabenbezeichnung:</th>
            <th scope="col">Beschreibung der Aufgabe:</th>
            <th scope="col">Reiter:</th>
            <th scope="col">Zuständig:</th>
            <th width="2%"></th>
            <th width="2%"></th>
        </tr>
        </thead>
        <tbody>
        <!-- table gets printed with a loop here-->
        <?php
        print_array($aufgaben);
        ?>
        <!-- -->
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <br>
    <h3>Bearbeiten/Erstellen</h3>
    <div class="form-group">
        <label for="Aufgabenbezeichnung">Projektname:</label>
        <input type="text" class="form-control" id="Aufgabenbezeichnung" placeholder="Aufgabe">
    </div>
    <div class="form-group">
        <label for="Aufgabenbeschreibung">Beschreibung der Aufgabe:</label>
        <textarea class="form-control" id="Aufgabenbeschreibung" rows="3" placeholder="Beschreibung"></textarea>
    </div>
    <div class="form-group">
        <label for="Erstellungsdatum">Projektname:</label>
        <input type="text" class="form-control" id="Erstellungsdatum" placeholder="01.01.19">
    </div>
    <div class="form-group">
        <label for="fällig">fällig bis:</label>
        <input type="text" class="form-control" id="fällig" placeholder="01.01.19">
    </div>
    <div class="form-group">
        <label for="Reiter">Zugehöriger Reiter:</label>
        <input type="text" class="form-control" id="Reiter" placeholder="ToDo">
    </div>
    <div class="form-group">
        <label for="zuständig">Zugehöriger Reiter:</label>
        <input type="text" class="form-control" id="zuständig" placeholder="Max Mustermann">
    </div>
    <div>
        <a class="btn btn-primary" href="#" role="button">Speichern</a>
        <button type="button" class="btn btn-info">Reset</button>
    </div>

<?php
include_once ('footer.php');
?>