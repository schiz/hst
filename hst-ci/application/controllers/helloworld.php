<?php   
    class Helloworld extends Controller{   
        function index()   
        {   
		//загружаем модель helloworld_model 
            $this->load->model('helloworld_model');   
 
            $data['content'] = $this->helloworld_model->getData();   
            $data['page_title'] = "CI Hello World App!";   
 
            $this->load->view('helloworld_view',$data);   
        }   
    }   
?>