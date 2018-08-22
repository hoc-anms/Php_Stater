<?php
/**
 * Created by PhpStorm.
 * User: Hoc_Anms
 * Date: 8/21/2018
 * Time: 11:11 AM
 */
    //phan tich cu phap cua file XML
    $xml=simplexml_load_file("note.xml") or die("Error: Cannot create object");
    if ($xml === false) {
        echo "Failed loading XML: ";
        foreach(libxml_get_errors() as $error) {
            echo "<br>", $error->message;
        }
    } else {
        print_r($xml);
    }
    echo "<br>";
    echo $xml->to . "<br>";
    echo $xml->from . "<br>";
    echo $xml->heading . "<br>";
    echo $xml->body."<br>";

    $xmlbook=simplexml_load_file("books.xml")  or die("Error: Cannot create object");;

    echo $xmlbook->book[0]->title. "<br>";

    foreach ($xmlbook->children() as  $books){
        echo $books->title . ", ";
        echo $books->author . ", ";
        echo $books->year . ", ";
        echo $books->price . "<br>";
    }