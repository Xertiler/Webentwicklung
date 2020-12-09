<?php
function make_header($title){
    $header = 'Aufgabenplaner: ' . $title;
    return $header;
}

// function which prints arrays and adds the edit and garbage can icon at the end of each row
function print_array($data = array()){
    if(isset($data)){
        foreach ($data as $row){
            echo ('<tr>');
            if(isset($row)){
                foreach ($row as $cell){
                    if(isset($cell)){
                        echo ('<td>' . $cell .'</td>');
                    }
                }
                echo ('<td> <i class="far fa-edit" style="color:#3498DB"></i></td>');
                echo ('<td><i class="far fa-trash-alt" style="color:#3498DB"></i></td></tr>');
            }
            echo ('</tr>');
        }
    }
}
?>