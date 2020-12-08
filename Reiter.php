<?php
$title_name = 'Reiter';
include_once ('header.php');
include_once ('navigation.php');

$reiter = array(
        array(
            'name' => 'ToDo',
            'beschreibung' => 'Dinge die erledigt werden müssen.'
        ),

        array(
            'name' => 'Erledigt',
            'beschreibung' => 'Dinge die erdledigt sind.'
        ),

        array(
            'name' => 'Verschoben',
            'beschreibung' => 'Dinge die später erledigt werden müssen.'
        )
);
?>
<!-- place content here -->
    <div class="col-md-7">
    <table class="table">
        <thead>
        <tr class="table-active">
            <th scope="col" width="20%">Name</th>
            <th scope="col" width="100%">Beschreibung</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php
        if(isset($reiter)){
            foreach ($reiter as $row){
                if(isset($row['name']) && isset($row['beschreibung'])){
                    echo ('<tr><td scope="row">'. $row['name'] . '</td>');
                    echo ('<td>' . $row['beschreibung'] .'</td>');
                    echo ('<td> <i class="far fa-edit" style="color:#3498DB"></i></td>');
                    echo ('<td><i class="far fa-trash-alt" style="color:#3498DB"></i></td>');
                }
            }
        }
        ?>
        </tbody>
    </table>
    <br>
    <br>
    <h3>Bearbeiten/Erstellen</h3>
    <div class="form-group">
        <label for="Reiter">Projektname:</label>
        <input type="text" class="form-control" id="Reiter" placeholder="Reiter">
    </div>
    <div class="form-group">
        <label for="Beschreibung">Beschreibung:</label>
        <textarea class="form-control" id="Beschreibung" rows="4" placeholder="Beschreibung"></textarea>
    </div>
    <div>
        <a class="btn btn-primary" href="#" role="button">Speichern</a>
        <button type="button" class="btn btn-info">Reset</button>
    </div>
<?php
include_once ('footer.php');
?>