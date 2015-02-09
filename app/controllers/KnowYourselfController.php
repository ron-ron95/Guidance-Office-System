<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class KnowYourselfController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for know_yourself
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "KnowYourself", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "id";

        $know_yourself = KnowYourself::find($parameters);
        if (count($know_yourself) == 0) {
            $this->flash->notice("The search did not find any know_yourself");

            return $this->dispatcher->forward(array(
                "controller" => "know_yourself",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $know_yourself,
            "limit"=> 10,
            "page" => $numberPage
        ));

        $this->view->page = $paginator->getPaginate();
    }

    /**
     * Displayes the creation form
     */
    public function newAction()
    {

    }

    /**
     * Edits a know_yourself
     *
     * @param string $id
     */
    public function editAction($id)
    {

        if (!$this->request->isPost()) {

            $know_yourself = KnowYourself::findFirstByid($id);
            if (!$know_yourself) {
                $this->flash->error("know_yourself was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "know_yourself",
                    "action" => "index"
                ));
            }

            $this->view->id = $know_yourself->id;

            $this->tag->setDefault("id", $know_yourself->id);
            $this->tag->setDefault("describe_yourself", $know_yourself->describe_yourself);
            $this->tag->setDefault("strengths", $know_yourself->strengths);
            $this->tag->setDefault("areas_improved", $know_yourself->areas_improved);
            $this->tag->setDefault("skills", $know_yourself->skills);
            $this->tag->setDefault("hobbies", $know_yourself->hobbies);
            $this->tag->setDefault("subject_easy", $know_yourself->subject_easy);
            $this->tag->setDefault("subject_hard", $know_yourself->subject_hard);
            $this->tag->setDefault("studentId", $know_yourself->studentId);
            
        }
    }

    /**
     * Creates a new know_yourself
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "know_yourself",
                "action" => "index"
            ));
        }

        $know_yourself = new KnowYourself();

        $know_yourself->describe_yourself = $this->request->getPost("describe_yourself");
        $know_yourself->strengths = $this->request->getPost("strengths");
        $know_yourself->areas_improved = $this->request->getPost("areas_improved");
        $know_yourself->skills = $this->request->getPost("skills");
        $know_yourself->hobbies = $this->request->getPost("hobbies");
        $know_yourself->subject_easy = $this->request->getPost("subject_easy");
        $know_yourself->subject_hard = $this->request->getPost("subject_hard");
        $know_yourself->studentId = $this->request->getPost("studentId");
        

        if (!$know_yourself->save()) {
            foreach ($know_yourself->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "know_yourself",
                "action" => "new"
            ));
        }

        $this->flash->success("know_yourself was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "know_yourself",
            "action" => "index"
        ));

    }

    /**
     * Saves a know_yourself edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "know_yourself",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");

        $know_yourself = KnowYourself::findFirstByid($id);
        if (!$know_yourself) {
            $this->flash->error("know_yourself does not exist " . $id);

            return $this->dispatcher->forward(array(
                "controller" => "know_yourself",
                "action" => "index"
            ));
        }

        $know_yourself->describe_yourself = $this->request->getPost("describe_yourself");
        $know_yourself->strengths = $this->request->getPost("strengths");
        $know_yourself->areas_improved = $this->request->getPost("areas_improved");
        $know_yourself->skills = $this->request->getPost("skills");
        $know_yourself->hobbies = $this->request->getPost("hobbies");
        $know_yourself->subject_easy = $this->request->getPost("subject_easy");
        $know_yourself->subject_hard = $this->request->getPost("subject_hard");
        $know_yourself->studentId = $this->request->getPost("studentId");
        

        if (!$know_yourself->save()) {

            foreach ($know_yourself->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "know_yourself",
                "action" => "edit",
                "params" => array($know_yourself->id)
            ));
        }

        $this->flash->success("know_yourself was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "know_yourself",
            "action" => "index"
        ));

    }

    

}
