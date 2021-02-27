<?php

require_once './Model/Book.php';
function booklist(){
$books = [

    $book1 = new Book("La liste", "Broché ", "Florian Dennisson", "16 décembre 2019", number_format(17.99, 2, '.', '')),
    $book2 = new Book("Dr. Stone", "Broché ", " Riichirô Inagaki", "17 février 2021", number_format(6.90, 2, '.', '')),
    $book3 = new Book("Si ça saigne", "Broché ", "Stephen King", "10 février 2021", number_format(22.90, 2, '.', '')),
    $book4 = new Book("La Nuit des temps", "Poche ", "René BARJAVEL", "31 mai 2012", number_format(7.60, 2, '.', '')),
    $book5 = new Book("L’anomalie", "Broché ", "Hervé Le Tellier", "20 août 2020", number_format(20.00, 2, '.', '')),

];
return $books;
}
?>
