<?php
include_once("vendor/autoload.php");
include_once("hidden/config.php");

  try {   

  
     $pdo = new \PDO("mysql:host=localhost;dbname=" . $db_config['db']['name'],
                        $db_config['db'['user'],
                        $db_config['db']['pw']);  

     $sql = "SELECT rhs.id, rhs.signee_no, rhs.state, rhs.country, lhs.comments FROM as lhs INNER JOIN signee as rhs on
             lhs.id=rhs.signee_id where rhs.comments IS NOT NULL";

     $client = new Solarium\Client($config['solr']);

     $update = $client->createUpdate(); // Even initial insert is an "update"

     $doc = $update->createDocument();   // We insert documents 

     foreach ($pdo->query($sql) as $row) {

     $pdo->query($query_str) {

         $doc->id =  $row['id'];
 
         $doc->signee_no = $row['signee_no'];
 
         $doc->comments =  $row['comments']; 
      }
            
  } catch (Exception $e) {
      
        echo "<p>" . $e->getMessage() . "</p>\n";
        echo "<p>" . $e . "</p>\n";
        echo "<p>" . $e->getStatusMessage() . "</p>\n";
    
  }
