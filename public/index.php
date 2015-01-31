    <?php


    error_reporting(E_ALL);
    use Phalcon\Mvc\View,
         Phalcon\Mvc\View\Engine\Volt;
    try {

        /**
         * Read the configuration
         */
        $config = include __DIR__ . "/../app/config/config.php";

        /**
         * Read auto-loader
         */
        include __DIR__ . "/../app/config/loader.php";

        /**
         * Read services
         */
        include __DIR__ . "/../app/config/services.php";

        /**`
         * Read Base Controller    */

        include __DIR__ ."/../app/controllers/ControllerBase.php";


        //register autoloader
    $loader = new \Phalcon\Loader();
            $loader->registerDirs(array(
                '../app/controllers/',
                '../app/models/',
                '../app/forms/'
            ))->register();

    //creating factory and dependencies
    $di = new \Phalcon\Di\FactoryDefault();

 //Register Volt as a service
$di->set('voltService', function($view, $di) {
    $volt = new Volt($view, $di);
    $volt->setOptions(array(
        "compiledPath" => "../app/cache/volt/",
        "compiledExtension" => ".compiled",
        "compiledSeperator" =>"%%",
        "compiledAlways"=>true
    ));

    return $volt;
});
    //set up view 
    $di->set('view',function(){
            $view = new \Phalcon\Mvc\View();
            $view->setViewsDir('../app/views/');
          $view->registerEngines(array(
            ".volt" => 'voltService'
    )); 
            return $view;
            });

    //setting up assets management of css and javascript

    $di->set('assets',function(){
            $assets = new \Phalcon\Assets\Manager();
            $assets->collection('header')
                    ->addCss('css/bootstrap.css')
                    ->addCss('css/offcanvas.css')
                    ->addCss('css/style.css')
                    ->addCss('css/bootstrap-datetimepicker.css');

      

            return $assets;

    });

    //set up base url so that all generated uri is included /guidance/ folder
        $di->set('url',function(){
            $url = new \Phalcon\Mvc\Url();
            $url->setBaseUri('/guidance/');

            return $url;    
        }); 




    $di->set('session',function(){
        $session = new \Phalcon\Session\Adapter\Files();
        $session->start();

        return $session;

});


//registering flash message using customize css

    $di->set('flash',function(){

    $flash =new  \Phalcon\Flash\Session([
        'error'=>'alert alert-error',
        'warning'=>'alert alert-warning',
        'success'=>'alert alert-success',
        'info'=>'alert alert-info',
        'notice'=>'alert alert-notice'
        ]);
    return $flash;
    })
        /**
         * Handle the request
         */
        $application = new \Phalcon\Mvc\Application($di);

        echo $application->handle()->getContent();



} catch (\Exception $e) {
    echo $e->getMessage();
        }




