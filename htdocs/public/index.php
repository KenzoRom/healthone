<?php
require '../Modules/Categories.php';
require '../Modules/Products.php';
require '../Modules/Database.php';
require '../Modules/user.php';



define("DOC_ROOT", realpath(dirname(__DIR__)));
define("TEMPLATE_ROOT", realpath(DOC_ROOT . "/Templates"));

require '../Modules/Reviews.php';


$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "HealthOne";
$titleSuffix = "";
session_start();

switch ($params[1]) {
    case 'categories':
        $titleSuffix = ' | Categories';
        
        if (isset($_GET['category_id'])) {
            $categoryId = $_GET['category_id'];
            $products = getProducts($categoryId);
            $name = getCategoryName($categoryId);

            if (isset($_GET['product_id'])) {
                $productId = $_GET['product_id'];
                $product = getProduct($productId);
                $titleSuffix = ' | ' . $product->name;

                

                if(isset($_POST['addReview'])) {
                    $review = filter_input(INPUT_POST, "review");
                    $stars = filter_input(INPUT_POST, "stars");
                    if(!isset($stars) || $stars == false) {
                        echo "Not all fields were filled in!";
                    } else {
                        saveReview($review, $stars, $productId);
                    }
                }
                $getProductReview = getProductReviews($productId);

                // TODO Zorg dat je hier de product pagina laat zien
                include_once "../Templates/product.php";

            } else {
                include_once "../Templates/products.php";
                // TODO Zorg dat je hier alle producten laat zien van een categorie
            }
        } else {
            // TODO Toon de categorieen
            $categories = getCategories();
            include_once "../Templates/categories.php";
        }
        break;
        
    case 'register':
        $titleSuffix = ' | register';
        if(isset($_POST['register'])) {
            RegisterUser($_POST['username'], $_POST['email'], $_POST['password']);
        }
        include_once "../Templates/register.php";
        break;

    case 'inlog':
        $titleSuffix = ' | inlog';
        if(isset($_POST['inlog'])) {
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $password = filter_input(INPUT_POST, 'password');
            $user = checkLogin($email, $password);
            if($user == false) {
                $error['title'] = 'Incorrect!';
                $error['message'] = 'Incorrect credentials!';
            } else {
                $_SESSION['inlog'] = true;
                $_SESSION['role'] = $user->role;

                var_dump($_SESSION['role']);

                $_SESSION['email'] = $user->email;
            }
        }
        include_once "../Templates/inlog.php";
        break;
    case 'logout':
        session_destroy();
        header("Location: /");
        break;

    case 'admin':
        include_once 'admin.php';
        break;

    case 'profile':
        $titleSuffix = ' | Profile';
        if(isset($_SESSION['email'])) {
            include_once "../Templates/profile.php";
        }
        break;
    case 'profileEdit':
        if(isset($_SESSION['email'])) {
            $titleSuffix = ' | profileEdit';
            include_once "../Templates/profileEdit.php";
        }
        break;

    case 'contact':
        $titleSuffix = ' | Contact';
        include_once "../Templates/contact.php";
        break;
        
    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
}

function getTitle() {
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}
