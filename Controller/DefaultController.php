<?php
namespace Controller;
use Framework\Request;
use Model\Repository;
use Model\Entity\Films;

class DefaultController{
    public function indexAction(){
        ob_start();

$tests=Repository::findAll();

        require   VIEW_DIR.'Default/films.phtml';


          $content= ob_get_clean();
        return $content;


    }
    public function addAction(Request $request){


            $form=new Films($request->post('id'), $request->post('title'),
                $request->post('release_year'), $request->post('format'), $request->post('stars'));


            Repository::save($form);
            header("Location: '../webroot/index.php'");
            //die;



    }
    public function sortAction(Request $request){
        ob_start();
$tests=Repository::sortedByName();
        require   VIEW_DIR.'Default/films.phtml';
        $content= ob_get_clean();
        return $content;

    }
    public function findAction(Request $request){

        if(empty($request->post('find'))) {
            ob_start();

            $tests=Repository::findAll();

            require   VIEW_DIR.'Default/films.phtml';


            $content= ob_get_clean();
            return $content;
        }
        else {
            $form = $request->post('find');
            ob_start();
            $tests = Repository::findByName($form);
            require VIEW_DIR . 'Default/films.phtml';
            $content = ob_get_clean();
            return $content;
        }

    }
    public function deleteAction(Request $request){
        $form=$request->post('id');
        ob_start();
        $tests=Repository::delete($form);
        require   VIEW_DIR.'Default/films.phtml';
        $content= ob_get_clean();
        return $content;
    }
}
?>