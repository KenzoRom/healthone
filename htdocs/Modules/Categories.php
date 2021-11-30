<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getCategories()
{
try {
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM categories");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_CLASS, 'Category');
    return $result;
}
catch (PDOException $e) {
        die("Error!: " . $e->getMessage());
    return $noResult = [];
}
}

function getCategoryName(int $id)
{
    global $pdo;
     $query = $pdo->prepare("SELECT name FROM categories");
     $query->execute();
     $result = $query->fetchAll(PDO::FETCH_ASSOC);
     $categoryName = $result;
     return $categoryName;
}