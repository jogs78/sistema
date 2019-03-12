<?php
namespace Users\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Users\Form\RegisterForm;
use Zend\Db\Adapter\Adapter;
use Zend\Crypt\BlockCipher;
 

class RegisterController extends AbstractActionController
{
    public $dbAdapter, $datos, $dato;
    
    public function indexAction()
        {
            $form = new RegisterForm();
            $viewModel = new ViewModel(array('form' =>
            $form));
            return $viewModel;
        }
    public function confirmAction()
        {	
        }
    public function processAction()
        {
            $this->dbAdapter=$this->getServiceLocator()->get('Zend\Db\Adapter');
            $result=$this->dbAdapter->query("select * from Usuario order by id_usr desc",Adapter::QUERY_MODE_EXECUTE);
            $this->datos=$result->toArray();
        
            if (!$this->request->isPost()) {
                return $this->redirect()->toRoute(NULL ,
                array( 'controller' => 'register','action' => 'index'));
            }
            $post = $this->request->getPost();
            $form = new RegisterForm();
            $form->setData($post);
            if (!$form->isValid()) {
                $model = new ViewModel(array( 'error' => true,'form' => $form,
                ));
                $model->setTemplate('users/register/index');
                    return $model;
            }
            $dataform = $form->getData();
	    $cipher = BlockCipher::factory('mcrypt', array('algorithm'=>'aes'));
	    $cipher->setKey('mensaje de emmanuel');
            foreach($this->datos as $data)
            {
                if($data["nombre"]==$dataform["usuario"])
                {
                    if($cipher->decrypt($data["pwd"])==$dataform["pwd"])
                    {
			$this->dato = $data["nivel"];
			if($data["nivel"]=="Administrador")
			return $this->redirect()->toRoute('modulo1');
			if($data["nivel"]=="Gerente")
			return $this->redirect()->toRoute('modulo1');
			if($data["nivel"]=="Vendedor")
			return $this->redirect()->toRoute('vendedor');
			if($data["nivel"]=="Supervisor")
			return $this->redirect()->toRoute('vendedor');
			if($data["nivel"]=="Comprador")
			return $this->redirect()->toRoute('almacenista');
			if($data["nivel"]=="Surtidor")
			return $this->redirect()->toRoute('almacenista');                    }
                    else
                    {
                        $model = new ViewModel(array( 'error' => true,'form' => $form,
                ));
                $model->setTemplate('users/register/index');
                    return $model;
                    }
                }
            }
    }
}
?>
