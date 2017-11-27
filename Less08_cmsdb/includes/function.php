<?php
function find_all_subjects(){
    global $connection;
    $query = "SELECT * FROM subjects";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Can't connect to DB...");
    }
    return $result;
}

function find_all_pages($subject_id){
    global $connection;
    $query = "SELECT * FROM pages WHERE subject_id = $subject_id";
    $page_set = mysqli_query($connection, $query);
    if (!$page_set) {
        die("Can't connect to DB...");
    }
    return $page_set;
}


?>