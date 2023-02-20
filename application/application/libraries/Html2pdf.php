<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
error_reporting(E_ALL);
// reference the Dompdf namespace
use Dompdf\Dompdf;
ini_set('allow_url_fopen', 1);

class Html2pdf {

    var $html;
    var $path;
    var $filename;
    var $paper_size;
    var $orientation;
    
    /**
     * Constructor
     *
     * @access	public
     * @param	array	initialization parameters
     */	
    function __construct($params = array())
    {
        $this->CI =& get_instance();
        
        if (count($params) > 0)
        {
            $this->initialize($params);
        }
    	
        log_message('debug', 'PDF Class Initialized');
    
    }

	// --------------------------------------------------------------------

	/**
	 * Initialize Preferences
	 *
	 * @access	public
	 * @param	array	initialization parameters
	 * @return	void
	 */	
    function initialize($params)
	{
        $this->clear();
		if (count($params) > 0)
        {
            foreach ($params as $key => $value)
            {
                if (isset($this->$key))
                {
                    $this->$key = $value;
                }
            }
        }
	}
	
	// --------------------------------------------------------------------

	/**
	 * Set html
	 *
	 * @access	public
	 * @return	void
	 */	
	function html($html = NULL)
	{
        $this->html = $html;
	}
	
	// --------------------------------------------------------------------

	/**
	 * Set path
	 *
	 * @access	public
	 * @return	void
	 */	
	function folder($path)
	{
        $this->path = $path;
	}
	
	// --------------------------------------------------------------------

	/**
	 * Set path
	 *
	 * @access	public
	 * @return	void
	 */	
	function filename($filename)
	{
        $this->filename = $filename;
	}
	
	// --------------------------------------------------------------------


	/**
	 * Set paper
	 *
	 * @access	public
	 * @return	void
	 */	
	function paper($paper_size = NULL, $orientation = NULL)
	{
        $this->paper_size = $paper_size;
        $this->orientation = $orientation;
	}
	
	// --------------------------------------------------------------------


	/**
	 * Create PDF
	 *
	 * @access	public
	 * @return	void
	 */	
	function create($mode = 'download') 
	{
	    
   		if (is_null($this->html)) {
			show_error("HTML is not set");
		}
	    
   		if (is_null($this->path)) {
			show_error("Path is not set");
		}
	    
   		if (is_null($this->paper_size)) {
			show_error("Paper size not set");
		}
		
		if (is_null($this->orientation)) {
			show_error("Orientation not set");
		}
	    
	    //Load the DOMPDF libary
//require_once(dirname(__FILE__) . '/dompdf/dompdf_config.inc.php');
require_once 'dompdf/autoload.inc.php';

	    //use Dompdf\Dompdf;
	    $dompdf = new Dompdf();
	    //~ var_dump($this->html);
	    //~ die;
	    //$dompdf 	= new Dompdf(array('enable_remote' => true));
	    $dompdf->load_html($this->html);
	    $dompdf->set_paper($this->paper_size, $this->orientation);
	    $dompdf->render();
	   // $dompdf->stream('invoice.pdf',array('Attachment'=>0));
	    
	    if($mode == 'save') {
    	    $this->CI->load->helper('file');
    	 //print_r($this->path);die;
		    if(write_file($this->path.$this->filename, $dompdf->output())) {
		    	return $this->path.$this->filename;
		    } else {
				show_error("PDF could not be written to the path");
		    }
		} else {
			
			if($dompdf->stream($this->filename)) {
				return TRUE;
			} else {
				show_error("PDF could not be streamed");
			}
	    }
	}
	
}

/* End of file Html2pdf.php */
