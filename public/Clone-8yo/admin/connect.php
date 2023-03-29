<?php 
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=ct275_project', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        
    } catch (PDOException $e) {
        echo $e->getMessage();
        
    }
    
    // them
    // $query = "INSERT INTO product (masp,gia) VALUES (?,?)";
    // $sth = $pdo->prepare($query);
    // $sth->execute([
    //     "002",
    //      "200000"
    // ]);
    // chon
    // $query = "SELECT * FROM product";
    // $sth = $pdo->query($query);
    // $sth->execute();
    // $row = $sth->fetch();
    // echo $row['masp'];
    // xoa
    // $query = "DELETE FROM product where id=1";

    // $sth = $pdo->query($query);
    // $sth->execute();
    // if(isset($_GET['masp'])) {
        // echo $_GET['masp'];
        // echo $_GET['price'];
    // }


?>

