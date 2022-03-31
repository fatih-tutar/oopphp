<?php
include_once("classes/input.class.php");
include_once("classes/validate.class.php");
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php
                if (Input::control('post')) {
                    $control = new formControl;
                    $isPass = $control->control($_POST,array(
                        'name' => array(
                            'required' => true,
                            "min" => 3,
                            "max" => 5
                        ),
                        'email' => array(
                            'required' => true,
                            "email" => true
                        ),
                        'password' => array(
                            'required' => true,
                            'min' => 3,
                            'max' => 10
                        ),
                        'confirmpassword' => array(
                            'confirm' => 'password'
                        )
                    ));
                    if($control->isPozitif()){
                        echo "It can be registered.";
                    }else{
                        echo "It can not be registered.";
                        $control->printError();
                    }
                } else {
                    echo 'No Post!';
                }
                ?>
                <h1>Form Control</h1>
                <form action="" method="POST">
                    <div class="form-group col-md-4">
                        <label for="">Name:</label>
                        <input type="text" name="name" class="form-control">
                        <label for="">Email:</label>
                        <input type="text" name="email" class="form-control">
                        <label for="">Password:</label>
                        <input type="text" name="password" class="form-control">
                        <label for="">Confirm Password:</label>
                        <input type="text" name="confirmpassword" class="form-control">
                        <input type="submit" value="Send" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>