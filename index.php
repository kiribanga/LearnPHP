<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect('localhost:3306', 'readerPHP', 'readerphp', 'testDB');

if($link==true){
    //mysqli_set_charset($con, 'utf8');
    $result = mysqli_query($link,'SELECT Name, Description FROM CurrentTasks', MYSQLI_USE_RESULT);
    if($result)
        while($row = mysqli_fetch_array($result))
            print($row['Name'].')  '.$row['Description'].'</br>');
    else
        print('error in query</br>');
}
