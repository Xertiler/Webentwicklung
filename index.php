<?php
$title_name = 'Login';
include_once ('header.php');
?>

<!-- place content here -->
    <div class="container">
        <div class="row">
            <div class="col">
                <form class="mb-4">
                    <div class="form-group">
                        <label for="exampleEmail">Email-Adresse</label>
                        <input type="email" class="form-control" id="exampleEmail" aria-describedby="emailHelp" placeholder="Email-Adresse eingeben">
                    </div>
                    <div class="form-group">
                        <label for="examplePassword">Passwort</label>
                        <input type="password" class="form-control" id="examplePassword" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="agbCheck">
                        <label class="form-check-label" for="agbCheck">AGBs und Datenschutzbedingung akzeptieren</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Einloggen</button>
                    <div><a>Noch nicht registriert? <a href="#" class="text-decoration-none">Registrierung</a></a></div>
                </form>
                <div><a>Da der Login Vorgang technisch noch nicht realisiert wurde: <a href="Todos.php" class="text-decoration-none">Überspringen</a></a></div>
            </div>
        </div>
    </div>
    </div>
    </body>
    </html>

<?php
include_once ('footer.php');
?>