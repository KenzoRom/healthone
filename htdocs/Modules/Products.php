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

function getAllProductInfo()
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM products");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_CLASS,'Product');

    return $result;
}