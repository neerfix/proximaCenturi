<?php get_header();



if($_POST){

    var_dump("PANCAKE");
    var_dump($_POST);

    $pdo = new PDO("mysql:host=localhost;dbname=pf_wp_contact", "H6B1", "H6B1_Pr25Nix4_Portfolio", [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]);

    $pdo->query("INSERT INTO `pf_wp_contact` pf_name` = ".$_POST['name'].", `pf_email` =  ".$_POST['name'].", `pf_object` = ".$_POST['object'].", `pf_message` = ".$_POST['message']." ");

}
?>

<div class="container text-center">
    <h1>Code 404!</h1>
    <p>Spaceman! You're lost in deep space.</p>
</div>

<?php get_footer(); ?>
