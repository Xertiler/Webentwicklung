<?php
$title_name = 'Personen';
include_once ('header.php');
include_once ('navigation.php');

$mitarbeiter = array(
        array(
            'name' => 'Max Mustermann',
            'email' => 'mustermann@muster.de'
        ),

        array(
            'name' => 'Petra Müller',
            'email' => 'petra@mueller.de'
        )
)
?>
    <div class="col-md-7">
    <table class="table">
        <thead>
        <tr class="table-active">
            <th scope="col">Name:</th>
            <th scope="col">E-Mail:</th>
            <th scope="col">In Projekt:</th>
            <th width="2%"></th>
            <th width="2%"></th>
        </tr>
        </thead>
        <tbody>
        <?php
        if(isset($mitarbeiter)){
            foreach ($mitarbeiter as $row){
                if(isset($row['name']) && isset($row['email'])){
                    echo ('<tr><td scope="row">'. $row['name'] . '</td>');
                    echo ('<td>' . $row['email'] .'</td>');
                    echo ('<td>' . '<div class="form-group form-check"  width="50%">
                                <input type="checkbox" class="form-check-input" id="inProj">
                                <label class="form-check-label" for="inProj" width="50%"></label>
                            </div>' .'</td>');
                    echo ('<td> <i class="far fa-edit" style="color:#3498DB"></i></td>');
                    echo ('<td><i class="far fa-trash-alt" style="color:#3498DB"></i></td></tr>');
                }
            }
        }
        ?>
        </tbody>
    </table>
    <h3>Bearbeiten/erstellen:</h3>
    <div class="form-group">
        <label for="Username">Username:</label>
        <input type="text" class="form-control" id="Username" placeholder="Username">
    </div>
    <div class="form-group">
        <label for="E-Mail-Adresse">E-Mail-Adresse:</label>
        <input type="email" class="form-control" id="E-Mail-Adresse" placeholder="E-Mail-Adresse eingeben">
    </div>
    <div class="form-group">
        <label for="Passwort">Passwort:</label>
        <input type="password" class="form-control" id="Passwort" placeholder="Passwort">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="Proj">
        <label class="form-check-label" for="Proj">Dem Projekt zugeordnet</label>
    </div>
    <div>
        <a class="btn btn-primary" href="#" role="button">Speichern</a>
        <button type="button" class="btn btn-info">Reset</button>
    </div>

<?php
include_once ('footer.php');
?>