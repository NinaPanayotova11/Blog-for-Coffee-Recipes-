<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup - Contact</title>

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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            $("#contact").click(function () {

                fname = $("#fname").val();
                email = $("#email").val();
                message = $("#message").val();

                $.ajax({
                    type: "POST",
                    url: "sendmsg.php",
                    data: "fname=" + fname + "&email=" + email + "&message=" + message,
                    success: function (response) {
                        if (response === 'true') {
                            $("#add_err").html('<div class="alert alert-success"> \
                            <strong>Message Sent!</strong> \ \
                            </div>');

                        } else if (response === 'Name is too long') {
                            $("#add_err").html('<div class="alert alert-danger"> \
                            <strong>First Name</strong> must cannot exceed 50 characters. \ \
                            </div>');
						
                        } else if (response === 'Name is too short') {
                            $("#add_err").html('<div class="alert alert-danger"> \
                            <strong>First Name</strong> must exceed 2 characters. \ \
                            </div>');
                                    
                        } else if (response === 'Email is too long') {
                            $("#add_err").html('<div class="alert alert-danger"> \
                            <strong>Email</strong> must cannot exceed 50 characters. \ \
                            </div>');
                        
                        } else if (response === 'Email is too short') {
                            $("#add_err").html('<div class="alert alert-danger"> \
                            <strong>Email</strong> must exceed 2 characters. \ \
                            </div>');
                                    
                        } else if (response === 'Email is not valid') {
                            $("#add_err").html('<div class="alert alert-danger"> \
                            <strong>Email</strong> format incorrect. \ \
                            </div>');
                                    
                        } else if (response === 'Message is too long') {
                            $("#add_err").html('<div class="alert alert-danger"> \
                            <strong>Message</strong> must cannot exceed 50 characters. \ \
                            </div>');
                        
                        } else if (response === 'Message is too short') {
                            $("#add_err").html('<div class="alert alert-danger"> \
                            <strong>Message</strong> must exceed 2 characters. \ \
                            </div>');


                        } else {
                          $("#add_err").html('<div class="alert alert-success"> \
                          <strong>Message Sent!</strong> \ \
                          </div>');
                        }
                    },
                    beforeSend: function () {
                        $("#add_err").html("loading...");
                    }
                });
                return false;
            });
        });
    </script>

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
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>The Perfect Cup</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d826.116294514379!2d-118.3367694174206!3d34.083221816292955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2b8d2f0b5314b%3A0xd16a40748e182820!2sGeek%20Squad%20Solutions!5e0!3m2!1sbg!2sbg!4v1616958154594!5m2!1sbg!2sbg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>123.456.7890</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:info@theperfectcup.com">name@example.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <div id="add_err"></div>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" 
                                id="fname" name="fname" maxlegth="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" 
                                id="email" name="email" maxlegth="25" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control"
                                id="message" name="message" maxlegth="50"  rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit"
                                id="contact" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Perfect Cup</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
