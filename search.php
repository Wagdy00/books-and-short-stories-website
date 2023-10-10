<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        span{
            margin-left: 130px;
        }
        h5{
            margin-left: 130px;

        }
       .product img{
            display: flex;
            margin-left: 80px;

        }
        @media (max-width: 700px) {
           span {
               margin-left: 0px;
           }
        }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="./assets/123.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="book.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Book store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="storyvol2.php">Stories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="cart.php"> Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user.php">Log In</a>
                </li>
            </ul>
            <form method="post" class="d-flex" role="search">
                <input class="form-control me-2" type="text" placeholder="Search" name="search">
                <button class="btn btn-primary" type="submit" name="submit">Search</button>
            </form>
        </div>
    </div>
</nav>





<br>
<?php
include ('functions.php');
$con = new PDO("mysql:host=localhost;dbname=project",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `book` WHERE name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
<div class="grid">

            <div class="item py-2" style="width: 250px;">
                <div class="product font-rale">
                    <a href="<?php printf('%s?id=%s', 'product.php',  $row->id); ?>"><img src="<?php echo $row->img; ?>" alt="product1" width="250px"></a>
                    <div class="text-center">
                        <h5><?php echo $row->name; ?></h5>
                        <div class="price py-1">
                            <span><?php echo $row->author; ?></span>
                        </div>
                        <div class="price py-1">
                            <span>$<?php echo $row->price; ?></span>
                        </div>
                            <input type="hidden" name="id" value="<?php echo $row->id ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                    </div>
                </div>
            </div>
</div>
<?php
	}


		else{
			echo '<h5>Book does not exist</h5>';
		}


}

?>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br>

<?php
// include footer
include ("footer.php")
?>

