<?php
session_start();

if(isset($_SESSION['login'])){
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup - Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">The Perfect Cup</div>
    <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

    <!-- Navigation -->
    <?php require_once 'nav.php';?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php">Logout</a></h2>
                    <hr>
                    <h2 class="intro-text text-center">The Perfect Cup
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>COCONUT OIL COFFEE
                        <br>
                        <small>July 26, 2017</small>
                    </h2>
                    <p>Start your morning off with this great recipe for hot coffee with coconut oil and butter.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>IRISH COFFEE
                        <br>
                        <small>November 8, 2018</small>
                    </h2>
                    <p>Take the edge off with a Fresh hot cup of coffee made with Irish whiskey and Irish Cream.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>FROZEN CARAMEL LATTE
                        <br>
                        <small>April 5, 2019</small>
                    </h2>
                    <p>Sweetened with caramel sauce and topped with whipped cream, this will make you happy any time of day.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- Modal 1 -->
	  <div id="myModal" class="modal fade" role="dialog">
	    <div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Coconut Oil Coffee</h4>
          </div>
          <div class="modal-body">
            <p>Perhaps Oliver Wendell Holmes was sipping coconut oil coffee when he said, 'The morning cup of coffee has an exhilaration about it which the cheering influence of the afternoon or evening cup of tea cannot be expected to reproduce.' This blend of coconut oil and unsalted, grass-fed organic butter in your coffee is definitely something to write about!
            <hr>
            <strong>Ingredients:</strong><br>   
2 cups hot coffee<br>
2 tablespoons coconut oil<br>
2 tablespoons unsalted butter<br>
<hr>
            <strong>Directions:</strong><br>
Blend coffee, coconut oil, and butter together in a blender until oil and butter are melted and coffee is frothy.
<hr>
<strong>Tips:</strong><br>
Use unsalted grass-fed butter. Preheat your blender with hot water to make sure your coffee doesn't start out cold.
<hr>
<strong>Nutrition Facts:</strong><br>
Per Serving: 224 calories; protein 0.4g; fat 25.6g; cholesterol 30.5mg; sodium 6.3mg.
<hr>
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
	  <div id="myModal2" class="modal fade" role="dialog">
	    <div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Irish Coffee</h4>
          </div>
          <div class="modal-body">
          <p>Fresh hot coffee gets a little added pep with the addition of Irish whiskey and Irish cream.
            <hr>
            <strong>Ingredients:</strong><br>   
            1 (1.5 fluid ounce) jigger Irish cream liqueur<br>
            1 (1.5 fluid ounce) jigger Irish whiskey<br>
            1 cup hot brewed coffee<br>
            1 tablespoon whipped cream<br>
            1 dash ground nutmeg<br>
<hr>
            <strong>Directions:</strong><br>
            In a coffee mug, combine Irish cream and Irish whiskey. Fill mug with coffee. Top with a dab of whipped cream and a dash of nutmeg.
<hr>
<strong>Nutrition Facts:</strong><br>
Per Serving:  330 calories; protein 0.7g; carbohydrates 21.7g; fat 6.1g; cholesterol 20.4mg; sodium 13.6mg. 
<hr>
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
	  <div id="myModal3" class="modal fade" role="dialog">
	    <div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Frozen Caramel Latte</h4>
          </div>
          <div class="modal-body">
          <p>This frothy, blended espresso drink will wake you up and make you happy any time of day. Sweetened with caramel sauce and topped with whipped cream, this is one delicious frozen latte.
            <hr>
            <strong>Ingredients:</strong><br>   
            3 fluid ounces brewed espresso<br>
            1 tablespoon caramel sauce<br>
            2 tablespoons white sugar<br>
            ¾ cup milk<br>
            1 ½ cups ice cubes<br>
            2 tablespoons whipped cream<br>
<hr>
            <strong>Directions:</strong><br>
            Place the espresso, caramel sauce, and sugar into a blender pitcher. Blend on high until the caramel and sugar dissolve into the espresso. Pour in the milk and add the ice; continue blending until smooth and frothy. Top with whipped cream to serve.
<hr>
<strong>Nutrition Facts:</strong><br>
Per Serving:  293 calories; protein 6.8g; carbohydrates 47.5g; fat 9.3g; cholesterol 35.4mg; sodium 164.1mg.
<hr>
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Perfect Cup</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php
}else{
  header("location:login.php");
}
?>