<?php 

class Home extends Controller{

    public function index()
    {   
       $data['profile'] = $this->model('PortofolioModel')->getProfile();
       $data['about'] = $this->model('PortofolioModel')->getAbout();
       $data['project'] = $this->model('PortofolioModel')->getProject();
       $data['contact'] = $this->model('PortofolioModel')->getContact();



       $this->view('user/index',$data);
    }

}