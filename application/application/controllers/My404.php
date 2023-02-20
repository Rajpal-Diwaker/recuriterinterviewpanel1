  <?php 
class My404 extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct(); 
    } 

    public function index() 
    { 
        header("HTTP/1.1 404 Not Found");
        $this->load->view('templates/header1');
        $this->load->view('pages/error_404');//loading in my template 
        $this->load->view('templates/footer');
        //header("Location: https://www.techugo.com/");
    } 


  
} 
   
   ?>
