<?php 

require_once("vendor/autoload.php");
    // namespace
use Rain\Tpl;

$app = new \Slim\Slim();

/*$app->get('/', function () {
    echo "Home Page";
});*/

/*$app->get('/', function () {
    echo json_encode(array(

    	'date'=>date("Y-m-d H:i:s")
    ));
});*/

$app->get('/', function () {
    


// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/"
);

Tpl::configure( $config );


// create the Tpl object
$tpl = new Tpl;

// assign a variable
$tpl->assign( "name", "Hcode" );
$tpl->assign( "version", PHP_VERSION );

// assign an array
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

// draw the template
$tpl->draw( "index" );

});

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});
$app->run();


 ?>