<?php
include_once("vendor/autoload.php");
include_once("hidden/config.php");

  try {   

     $client = new Solarium\Client($solarium_config);

     $update = $client->createUpdate(); // Even initial insert is an "update"

     $doc = $update->createDocument();   // We insert documents 

     $pdo = new \PDO("mysql:host=localhost;dbname=" . $db_config['dbname'],
                        $db_config['dbuser'],
                        $db_config['dbpasswd']);  

     $sql = "SELECT rhs.id, rhs.signee_no, rhs.state, rhs.country, lhs.comments FROM as lhs INNER JOIN signee as rhs on lhs.id=rhs.signee_id where rhs.comments IS NOT NULL";

     foreach ($pdo->query($sql) as $row) {

     $pdo->query($query_str) {

            $row['id'] 
            $row['sign_no'] 
            $row['state'] 
            $row['country'] 
            $row['comments'] 
      }
            
  } catch (Exception $e) {
      
        echo "<p>" . $e->getMessage() . "</p>\n";
        echo "<p>" . $e . "</p>\n";
        echo "<p>" . $e->getStatusMessage() . "</p>\n";
    
  }
