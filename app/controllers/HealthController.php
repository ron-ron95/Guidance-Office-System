<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class HealthController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for health
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "Health", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "id";

        $health = Health::find($parameters);
        if (count($health) == 0) {
            $this->flash->notice("The search did not find any health");

            return $this->dispatcher->forward(array(
                "controller" => "health",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $health,
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
     * Edits a health
     *
     * @param string $id
     */
    public function editAction($id)
    {

        if (!$this->request->isPost()) {

            $health = Health::findFirstByid($id);
            if (!$health) {
                $this->flash->error("health was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "health",
                    "action" => "index"
                ));
            }

            $this->view->id = $health->id;

            $this->tag->setDefault("id", $health->id);
            $this->tag->setDefault("studentId", $health->studentId);
            $this->tag->setDefault("post_illness", $health->post_illness);
            $this->tag->setDefault("present_illness", $health->present_illness);
            $this->tag->setDefault("previous_hospitalization", $health->previous_hospitalization);
            $this->tag->setDefault("physical_disability", $health->physical_disability);
            $this->tag->setDefault("relative_illness", $health->relative_illness);
            
        }
    }

    /**
     * Creates a new health
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "health",
                "action" => "index"
            ));
        }

        $health = new Health();

        $health->id = $this->request->getPost("id");
        $health->studentId = $this->request->getPost("studentId");
        $health->post_illness = $this->request->getPost("post_illness");
        $health->present_illness = $this->request->getPost("present_illness");
        $health->previous_hospitalization = $this->request->getPost("previous_hospitalization");
        $health->physical_disability = $this->request->getPost("physical_disability");
        $health->relative_illness = $this->request->getPost("relative_illness");
        

        if (!$health->save()) {
            foreach ($health->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "health",
                "action" => "new"
            ));
        }

        $this->flash->success("health was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "health",
            "action" => "index"
        ));

    }

    /**
     * Saves a health edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "health",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");

        $health = Health::findFirstByid($id);
        if (!$health) {
            $this->flash->error("health does not exist " . $id);

            return $this->dispatcher->forward(array(
                "controller" => "health",
                "action" => "index"
            ));
        }

        $health->id = $this->request->getPost("id");
        $health->studentId = $this->request->getPost("studentId");
        $health->post_illness = $this->request->getPost("post_illness");
        $health->present_illness = $this->request->getPost("present_illness");
        $health->previous_hospitalization = $this->request->getPost("previous_hospitalization");
        $health->physical_disability = $this->request->getPost("physical_disability");
        $health->relative_illness = $this->request->getPost("relative_illness");
        

        if (!$health->save()) {

            foreach ($health->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "health",
                "action" => "edit",
                "params" => array($health->id)
            ));
        }

        $this->flash->success("health was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "health",
            "action" => "index"
        ));

    }

    /**
     * Deletes a health
     *
     * @param string $id
     */
    public function deleteAction($id)
    {

        $health = Health::findFirstByid($id);
        if (!$health) {
            $this->flash->error("health was not found");

            return $this->dispatcher->forward(array(
                "controller" => "health",
                "action" => "index"
            ));
        }

        if (!$health->delete()) {

            foreach ($health->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "health",
                "action" => "search"
            ));
        }

        $this->flash->success("health was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "health",
            "action" => "index"
        ));
    }

}
