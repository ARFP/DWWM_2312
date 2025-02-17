<?php 
// wp_posts : ID, post_date, post_title
// $sql = "INSERT INTO tbl_formulaire (nom, age) VALUES ('', '')";
// $sql = "INSERT INTO tbl_formulaire (nom, age) VALUES (:nom, :age)";


$db = new PDO('mysql:host=localhost;dbname=demo_formulaire;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

for($a = 0; $a < 10; $a++) {
    $id = 0;

    $start = microtime(true);
    
    for($i = 0; $i < 10000; $i++) {
        $id++;
        $stmt = $db->query("SELECT * FROM tbl_formulaire WHERE id=$id");
        $r = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    $end = microtime(true);
    $time = $end - $start;
    echo $time;
    echo ' | ';
    
    
    $id = 0;
    
    $start = microtime(true);
    
    $stmt = $db->prepare("SELECT * FROM tbl_formulaire WHERE id=:id");
    
    $stmt->bindParam(':id', $id);
    
    for($i = 0; $i < 10000; $i++) {
        $id++;
        $stmt->execute();
        $r = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    $end = microtime(true);
    $time = $end - $start;
    echo $time;
    echo '<hr>';
}
