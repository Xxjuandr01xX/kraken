<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $titulo; ?></title>
    <!-- Custom fonts for this template-->
    <link href="public/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="public/template/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-secondary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Iniciar Session</h1>
                                    </div>

                                    <div class="input-group mb-3">
                                         <label for="" class="input-group-text">
                                            <i class = "fa fa-user"></i>
                                         </label>
                                        <input type="text" name="" id="user_name" class="form-control" placeholder = "Nombre de usuario">
                                    </div>

                                    <div class="input-group mb-3">
                                         <label for="" class="input-group-text">
                                            <i class = "fa fa-lock"></i>
                                         </label>
                                        <input type="password" name="" id="user_pass" class="form-control" placeholder = "Clave">
                                        
                                        <button onclick = "set_visible_password()" class = "input-group-text btn btn-sm btn-secondary">
                                            <i class = "fa fa-eye"></i>
                                        </button>
                                       
                                    </div>

                                   <div class="row clearfix d-flex justify-content-center ">
                                        <div class="col-md-8 mt-3">
                                            <button class="btn btn-success rounded-0 w-100">
                                                Entrar 
                                            </button>
                                        </div>
                                   </div>

                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="public/template/vendor/jquery/jquery.min.js"></script>
    <script src="public/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="public/template/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="public/template/js/sb-admin-2.min.js"></script>
    <!-- -->
    <script src="public/template/js/sb-admin-2.min.js"></script>
    <script type = "text/javascript">
        let password_of = (id) => $(id).attr("type", "text");
        let password_on = (id) => $(id).attr("type", "password");
        function set_visible_password(){
            /**
             *  validacion para ocultar y mostrar caracteres del campo de contraseña.
             */
            let input_password = $("#user_pass")
            if(input_password.attr("type") == "password"){
                password_of("#user_pass");
            }else if(input_password.attr("type") == "text"){
                password_on("#user_pass");
            }
        }
    </script>
</body>
</html>