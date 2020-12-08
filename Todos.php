<?php
$title_name = 'Todos';
include_once ('header.php');
include_once ('navigation.php');
?>
    <!-- place content here -->
    <div class="col">
        <div class="card">
            <div class="card-header">
                ToDo:
            </div>
            <ul class="list-group">
                <li class="list-group-item">HTML Datei erstellen</li>
                <li class="list-group-item">CSS Datei erstellen</li>
            </ul>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-header">
                Erledigt:
            </div>
            <ul class="list-group">
                <li class="list-group-item">PC eingeschaltet</li>
                <li class="list-group-item">Kaffee trinken</li>
            </ul>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-header">
                Verschoben:
            </div>
            <ul class="list-group">
                <li class="list-group-item">Für die Uni lernen</li>
            </ul>
        </div>
    </div>
<?php
include_once ('footer.php');
?>