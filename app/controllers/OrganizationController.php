<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class OrganizationController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for organization
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "Organization", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "id";

        $organization = Organization::find($parameters);
        if (count($organization) == 0) {
            $this->flash->notice("The search did not find any organization");

            return $this->dispatcher->forward(array(
                "controller" => "organization",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $organization,
            "limit"=> 2,
            "page" => $numberPage
        ));

        $this->view->page = $paginator->getPaginate();
    }

    /**
     * Displayes the creation form
     */
    public function newAction()
    {
        $this->view->org = new OrganizationForm();
    }

    /**
     * Edits a organization
     *
     * @param string $id
     */
    public function editAction($id)
    {
        $this->view->org = new OrganizationForm();  
        if (!$this->request->isPost()) {
     
            $organization = Organization::findFirstByid($id);
            if (!$organization) {
                $this->flash->error("organization was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "organization",
                    "action" => "search"
                ));
            }

            $this->view->id = $organization->id;

            $this->tag->setDefault("id", $organization->id);
            $this->tag->setDefault("name_org", $organization->name_org);
            $this->tag->setDefault("position", $organization->position);
            $this->tag->setDefault("year", $organization->year);
            $this->tag->setDefault("studentId", $organization->studentId);
            
        }
    }

    /**
     * Creates a new organization
     */
    public function createAction()
    {

       if($this->request->isPost()){

        $validation = new OrganizationForm();
        $organization = new Organization();
     
        if(!$validation->isValid($_POST)){
               
               foreach ($validation->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "organization",
                "action" => "new"
            ));
        }

      
        $organization->id = $this->request->getPost("id");
        $organization->name_org = $this->request->getPost("name_org");
        $organization->position = $this->request->getPost("position");
        $organization->year = $this->request->getPost("year");
        $organization->studentId = $this->request->getPost("studentId");
        

        if (!$organization->save()) {
            foreach ($organization->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "organization",
                "action" => "new"
            ));
        }

        $this->flash->success("organization was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "profile",
            "action" => "index"
        ));

    }
}

    /**
     * Saves a organization edited
     *
     */
    public function saveAction()
    {

        
        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "organization",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");
         

        $organization = Organization::findFirstByid($id);
        if (!$organization) {
            $this->flash->error("organization does not exist " . $id);

            return $this->dispatcher->forward(array(
                "controller" => "profile",
                "action" => "index"
            ));
        }

        $organization->id = $this->request->getPost("id");
        $organization->name_org = $this->request->getPost("name_org");
        $organization->position = $this->request->getPost("position");
        $organization->year = $this->request->getPost("year");
        $organization->studentId = $this->request->getPost("studentId");
        

        if (!$organization->save()) {

            foreach ($organization->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "organization",
                "action" => "edit",
                "params" => array($organization->id)
            ));
        }

        $this->flash->success("organization was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "profile",
            "action" => "index"
        ));

    }

    /**
     * Deletes a organization
     *
     * @param string $id
     */
    public function deleteAction($id)
    {

        $organization = Organization::findFirstByid($id);
        if (!$organization) {
            $this->flash->error("organization was not found");

            return $this->dispatcher->forward(array(
                "controller" => "profile",
                "action" => "index"
            ));
        }

        if (!$organization->delete()) {

            foreach ($organization->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "organization",
                "action" => "search"
            ));
        }

        $this->flash->success("organization was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "profile",
            "action" => "index"
        ));
    }

}
