<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getProducts(int $categoryid)
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM products WHERE categoryid = $categoryid");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_CLASS,'Product');
    return $result;

}

function getProduct(int $productId)
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM products WHERE id = :id");
    $query->setFetchMode(PDO::FETCH_CLASS, 'Product');
    $query->bindParam("id", $productId);
    $query->execute();
    $request = $query->fetch();

    return $request;
}

function getAllProducts():array
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM products ORDER BY categoryid");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_CLASS,'Product');

    return $result;
}

function addProduct($name,$categoryId,$description,$picture){
    try{
        global $pdo;
        $query=$pdo->prepare('INSERT INTO products (name , categoryid ,description, image) VALUES (:name,:categoryid,:description,:image)');
        $query->bindParam('name',$name);
        $query->bindParam('categoryid',$categoryId);
        $query->bindParam('description',$description);
        $query->bindParam('image',$image);

        $query->execute();
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}