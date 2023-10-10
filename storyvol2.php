<?php
include_once('functions.php');

?>
<!DOCTYPE html>
<html>
<head>
    <title>stories page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        a{
            text-decoration: none;
        }
        .card img{
            width: 190px;
            height: 280px;
        }
        .right p{
            justify-content: right;
            display: flex;
            margin-right: 20px;
            font-size: 19px;
            margin-top: 33px;
        }
        .right {
        }
    </style>
</head>
<body>

<!--primary nav-->
<nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="./assets/123.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="book.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Book store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="newStory.php">Creat story</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="search.php">Search</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user.php">Log In</a>
                </li>
            </ul>
            <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($book->getData('cart'))?></span>
                </a>
            </form>
        </div>
    </div>
</nav>


<?php
        include "./database/config.php";
        $records = mysqli_query($db,"select * from story");
        while($data =mysqli_fetch_array($records))
        {
            ?>

<div class="container mt-5">
    <div class="card">
        <div class="row">
            <div class="col-md-4">
                <img src="upload/<?php echo $data['storyimg']; ?>" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h2 class="card-title mt-5"><?php echo $data['storyname']; ?></h2>
                <h6><?php echo $data['genre']; ?></h6>
                <p><?php echo $data['storybreif']; ?></p>
                <a   class='btn btn-danger' href="story2.php?id=<?php echo $data['id'];?>" >   Read more</a>
                <div class="right">
                    <p>by <?php echo $data['username']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
            <?php
        }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
</body>
</html>