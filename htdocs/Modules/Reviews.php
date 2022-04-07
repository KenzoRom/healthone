<?php
    function getUserReviews(int $userId){
        global $pdo;
        $query = $pdo->prepare(
            "SELECT reviews.description, reviews.stars, reviews.date, review.user_id,
            users.username,
            product.id AS 'product_id', product.name AS 'product_name', product.picture
            FROM reviews
            LEFT JOIN users
            ON reviews.user_id=users.id
            LEFT JOIN product
            ON reviews.product_id=product.id
            WHERE user_id = '$userId'
            ORDER BY 'date' DESC;
            ");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_CLASS, "review");
        return $result;
    }

    function getProductReviews(int $product_id){
        global $pdo;
        $sth = $pdo->prepare(
            "SELECT reviews.stars, reviews.description, reviews.date, users.username
            FROM reviews
            LEFT JOIN users
            ON reviews.user_id=users.id 
            WHERE product_id = '$product_id'");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_CLASS, "review");
        return $result;
    }

    function saveReview(string $review, int $stars, int $productId) {
        global $pdo;
        $sth = $pdo->prepare("INSERT INTO reviews (description, stars, product_id) VALUES (:d, :s, :pi)");
        $sth->execute(
            array(
                "d" => $review,
                "s" => $stars,
                "pi" => $productId
            )
        );
    }
?>