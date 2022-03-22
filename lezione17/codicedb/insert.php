<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */
require "connessionedb.php";

 $sql = 'INSERT INTO speakers (name, title, company, url, twitter) VALUES (:name, :title, :company, :url, :twitter)';
 $sth = $db->prepare($sql);
 $data = [
     ':name' => 'antonio',
     ':title' => 'Dr',
     ':company' => 'IBM',
     ':url' => 'http://www.ibm.com',
     ':twitter' => '@mrossi'
];
if (! $sth->execute($data)) {
    throw new Exception(sprintf(
        "Error PDO exec: %s", implode(',', $db->errorInfo())
    ));
}
printf("Speaker added successfully!\n");
