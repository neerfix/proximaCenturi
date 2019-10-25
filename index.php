<?php get_header();

require_once (__DIR__.'/../functions/recaptcha.php');

if($_POST){
    $pdo = new PDO("mysql:host=localhost;dbname=wp_pf", "H6B1", "H6B1_Pr25Nix4_Portfolio", [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]);

    $pdo->query("INSERT INTO `pf_wp_contact` SET `pf_name` = '".$_POST['name']."', `pf_email` =  '".$_POST['name']."', `pf_object` = '".$_POST['object']."', `pf_message` = '".$_POST['message']."' ");

    echo '
        <div class="container">
            <div class="alert alert-success" role="alert">
              Votre message à été envoyé avec succès !
            </div>
        </div>';

}else{
    echo '<div class="container text-center">
        <h1>Code 404!</h1>
        <p>Spaceman! You\'re lost in deep space.</p>
    </div>';
}
?>

<?php get_footer(); ?>
