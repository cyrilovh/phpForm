<?php
    // AUTOLOAD
    include "../src/autoload.php";
    autoloader::register();

    // POO FORM
    use class\phpForm;
    $form = new phpForm();
    $form->setMethod("get");

    var_dump($form);

    echo "<br><br>Method: ".$form->getMethod()."<br><br>";

?>

