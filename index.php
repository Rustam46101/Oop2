<?php include_once 'Form.php';?>
<?php include_once 'SmartForms.php'?>
<?php use App\Form\Form;?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        /*$form = new Form();
        echo $form->open(['action'=>'post.php', 'method'=>'post']);
        echo $form->input(
                [
                        'type'=>'text',
                        'value'=>'Some Data',
                        'name'=>'login',
                        'class'=>'form-control',
                ]);
        echo $form->input([
                'type'=>'submit',
                'value'=>'Send',
        ]);
        echo $form->close();*/

    $form = new Form();
    echo $form->open(['action' => 'post.php', 'method' => 'post']);
    echo $form->input(
        [
            'type' => 'text',
            'value' => 'Some Data',
            'name' => 'login',
            'class' => 'form-control',

        ]); $form1=new \App\Form\SmartForm('login' , 'Some Data');
    echo $form->input([
        'type' => 'submit',
        'value' => 'Send',
    ]);
    echo $form->close();


    ?>
</body>
</html>