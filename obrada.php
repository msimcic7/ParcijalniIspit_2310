<?php
    //vejzbe1710
    /*if (empty($_POST)){
        echo('Nema podataka za obradu!');
        die();
    }
    if (!isset($_POST['ime']) || !isset($_POST['prezime'])) {
        echo 'Nisu uneseni ovi podaci';
        die();
    }*/
    //vjezbe1710 drugi dio:
    /*if (empty($_GET)){
        echo('Nema podataka za obradu!');
        die();
    } 

    if (!isset($_GET['ime']) || !isset($_GET['prezime'])) {
        echo 'Nisu uneseni ovi podaci';
        die();
    }
    
    echo 'Hello, ' . $_GET['ime'] . '  ' . $_GET['prezime'];*/
  
    
    //vjezbe1710 treci dio: 
    if (empty($_FILES['file'])){
        echo('Niste odabrali datoteku!');
        die();
    }

    if (empty($_FILES)){
        echo('Datoteka nije poslana!');
        die();
    }

    $file = $_FILES['file'];

    //samo provjera ili treba ubit ako nije slika?
    if ($file['type'] !== 'image/jpg') {
        echo ('Datoteka je slika\n');
    }
    else{
        echo ('Datoteka nije slika\n');
    }

    $UploadDirectory = __DIR__ . '/uploads/';
    $uploadFileName = $UploadDirectory . basename($file['name']);


    //echo ("$uploadFileName");

    if (!move_uploaded_file($file['tmp_name'], $uploadFileName)) {
        die('Greška kod spremanja datoteke');
    }


    //var_dump($_get);
    /*elseif (!empty($ime)) {
        echo('Ime nije upisano!');
        exit;
    }
    elseif (!empty($prezime)) {
        echo('Prezime nije upisano!');
        exit;
    }    */
