<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>My Style by Kartjungle</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="css/creative.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">My Style</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
					<li>
						<a class="page-scroll" href="#contact">Contact</a>
					</li>
					@unless(Auth::check())
                    <li>
                        <a class="page-scroll" href="#sign-up">SignUp</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#login">Login</a>
                    </li>
					@else
					<li>
						<a class="page-scroll" href="/logout">SignOut</a>
					</li>
					@endif

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    @yield("content");
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>
     <script>
        



         $('#firstname').on('input',function(e){
            if(this.value.length>3)
                   { 
                   
                    if($("#"+this.id+"error").length)
                        $("#firstnameerror").remove();
                        

                    }
            else {
                
                if(!$('#firstnameerror').length)
                            $("#error").append('<div id="'+$(this).attr('id')+'error"'+' class="alert-danger">Frist name must be of 3 char</div>');
                            
                }
        });

        $("#lastname").on('input',function(e){

            if(this.value.length>3)
                   { 
                   
                    if($("#"+this.id+"error").length)
                        $("#lastnameerror").remove();   

                    }
            else {
                
                if(!$('#lastnameerror').length)
                            $("#error").append('<div id="'+$(this).attr('id')+'error"'+' class="alert-danger">Last name must be of 3 char</div>');
                   
                }

        });

         $("#email").on('input',function(e){

             if (!isEmail(this.value)){

                showError('email','This is not a Valid Email');
                }
                else removeError('email');

            });

            $('#password').on('input',function(e){
                if(this.value.length >6)
                    removeError('password');
                else showError('password','Password must be greater than 6 char');

                if(!verifyPassword())
                    showError('cnfpassword','no match');

            });

            $('#cnfpassword').on('input',function(e){

                if(verifyPassword())
                    removeError('cnfpassword');
                else showError('cnfpassword','Password not matches');
            });

            $('#dob').on('input',function(e){
                if(this.value == 0 || this.value <0)
                    showError('dob',"That is not a Valid Age");
                else removeError('dob');

            });


            function verifyPassword()
            {
                

                return document.getElementById('password').value == document.getElementById('cnfpassword').value;
                    
            }

            function isEmail(email) {
              var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
              return regex.test(email);
            }

            function showError(id,message)
            {
                
                if(!$('#'+id+"error").length)
                            $("#error").append('<div id="'+id+'error"'+' class="alert-danger">'+message+'</div>');
                  
            }
            function removeError(id)
            {
                
                if($("#"+id+"error").length)
                        $("#"+id+"error").remove(); 
            }

            function checkIfValid()
            {
                if($("#firstname").val().length >2 &&
                    $("#lastname").val().length >2 &&
                    isEmail($("#email").val())     &&
                    $("#password").val().length >5 &&
                    isEmail($("#email").val())    &&
                    verifyPassword() &&
                    parseInt($('#dob').val()) >0 

                    )
                    {   console.log("success");
                        removeError('submit');
                    return true;
                }
                else { 
                    console.log("fail");
                    showError('submit','Please Check all the fields');
                    return false;
                }

                
            }

    </script>
</body>
</html>
