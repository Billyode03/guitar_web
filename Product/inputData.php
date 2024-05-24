<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ODE'S GUITAR STORE </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../Home/semuaGaya.css">
</head>
<body>
    <div>
    <!-- HEADER -->
    <div class="container-header" align="center">
        <h1 class="header text-center">Ode's Guitar Store</h1>
            </div>
            <!-- NAVIGATION -->
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="../Home/GuitarStore.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../About/about.php">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../Product/product.php">Product</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    More
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../Contact/contact.php">Contact</a></li>
                    <li><a class="dropdown-item" href="../Service/service.php">Service</a></li>
                    <li><hr class="dropdown-divider"></li>
                </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
            </div>
        </div>
        </nav> 
        
        <div class="container-fluid bg-dark text-light"style="height: 100vh">
            <br><br>
           <?php
                 include "../Home/koneksi.php";
                 function input($data){
                        $data = trim($data);
                        $data = stripcslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                        }
                        if ($_SERVER["REQUEST_METHOD"] == "POST"){
                        $kode=input($_POST["code"]);
                        $bran=input($_POST["brand"]);
                        $typ=input($_POST["type"]);
                        $stok=input($_POST["stock"]);
                        $pric=input($_POST["price"]);
                        $pictur=addslashes(file_get_contents($_FILES["picture"]['tmp_name']));                    
                        $sql="insert into gitar (code,brand,type,stock,price,picture) values ('$kode','$bran','$typ','$stok','$pric','$pictur')";
                        $hasil=mysqli_query($conn,$sql);
                        if ($hasil){
                          header("Location: product.php");
                        }
                        else {
                            echo "Data Gagal disimpan.".mysqli_error($conn);
                        }
                 }
                ?>
            <section class="login">
                <div class="container">
                    <div class="rw_2 row g-0 rw col-6 offset-3">
                        <div class="text-center py-3">
                           <h2 style="color: black;"> Input Data </h2>
                        </div>
                    </div>
                </div>
              </section>
              <br><br>
              <section class="login">
                <div class="container">
                    <div class="rw_8 row g-0 rw col-6 offset-3">
                        <div class="text-center py-5">
                            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
                                <div class="form-row py-2 pt-3">
                                    <div class="offset-1 col-lg-10">
                                        <input type="text" class="input px-3 text-center" name="code" placeholder="Input Code" required >
                                    </div>
                                </div>
                                <div class="form-row py-3">
                                    <div class="offset-1 col-lg-10">
                                        <input type="text" class="input px-3 text-center" name="brand"  placeholder="Input Brand" required>
                                    </div>
                                </div>
                                <div class="form-row py-3">
                                    <select class="input px-3 text-center" name="type">
				                        <option value="Electric"> Electric
				                        <option value="Accoustic"> Accoustic
			                        </select>
                                </div>
                                <div class="form-row py-2">
                                    <div class="offset-1 col-lg-10">
                                        <input type="number" class="input px-3 text-center" name="stock" placeholder="Input Stock" required>
                                    </div>
                                </div>
                                <div class="form-row py-2">
                                    <div class="offset-1 col-lg-10">
                                        <input type="number" class="input px-3 text-center" name="price" placeholder="Input Price" required>
                                    </div>
                                </div>
                                <div class="form-row py-2">
                                    <div class="offset-1 col-lg-10">
                                        <input type="file" class="input px-3 text-center" name="picture" placeholder="Choose Picture" required>
                                    </div>
                                </div>
                              <div class="text-center">
                                  <br><br>
                                  <p>
                                      <button class="btn_1" type="submit" name="submit"> Submit </button>
                                      <button class="btn_1"><a href="product.php"> Back </a></button>
                                  </p>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
              </section>
              <br><br><br><br><br><br><br>
              <hr>
              <br><br><br><br><br><br><br><br>
          </div>
       

     <!-- FOOTER -->
     <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning"> Ode'S Guitar Store </h5>
                    <p> New Guitar Store with International Brand, </p>
                </div>
            </div>      
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning"> Product </h5>
            <p>
                <a href="#" class="text-white" style="text-decoration: none;"> Gibson </a>
            </p>
            <p>
                <a href="#" class="text-white" style="text-decoration: none;"> Ibanez </a>
            </p>
            <p>
                <a href="#" class="text-white" style="text-decoration: none;"> Schecter </a>
            </p>
            <p>
                <a href="#" class="text-white" style="text-decoration: none;"> More ..  </a>
            </p>
            </div>
  
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3 ">
            <div col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning"> Contact </h5>
                </div>
                </h5>
                <p>
                    <i class="fas fa-home mr-3"> naubilode@gmail.com </i>
                </p>
                <p>
                    <i class="fas fa-home mr-3"> +62 8228069 5085 </i>
                </p>
                <p>
                    <i class="fas fa-home mr-3"> TAMALANREA, MKS 92014, IND</i>
                </p>
            </div>
            <hr class="mb-4"> 
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <p> Copyright @2022 All rights reserved by:
                        <a href="#" style="text-decoration: none;">
                        <strong class="text-warning"> Ode'S Guitar Store </strong>
                    </a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>
</body>
</html>