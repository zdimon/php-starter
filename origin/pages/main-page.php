<h1>Bankomat ATM </h1>
<?php 

      require 'libs/card.class.php';

      $card = new Card();

      echo "<p>".$card->get_balance()."</p>";

      $card->make_transaction(150000);


      echo "<p>".$card->get_balance()."</p>";

//    echo 'hello';
//    require 'libs/lib1.php';
//    require 'libs/lib2.php';

//    use DimaNameSpace\User;
//    use VovaNameSpace\User as vova;

//     $user_dima = new User();
//     $user_vova = new vova();
//     // var_dump($user);
//     echo $user_dima->say_name();
//     echo $user_vova->say_name();


?>