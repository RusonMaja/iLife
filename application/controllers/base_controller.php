<?php

class Base_Controller extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
	}
	
	// escape str for array or string
	public function escape_args( $args )
	{
		if( $args != null )
		{
			if(is_array($args))//args is an array
			{
				while( list($key, $value) = each($args))
				{
					if(is_string($args[$key]))
						$args[$key] = $this->db->escape_str(trim($args[$key]));
				}
			}else if(is_string($args))
			{	
				$args = $this->db->escape_str(trim($args));
			}
		}
		
		return $args;
	}
	
	public function  get_get()
	{
		$args = $this->input->get();
		//escape str
		$args = $this->escape_args($args);
		return $args;
	}
	
	public function get_post()
	{
		$args = $this->input->post();
		//escape str
		$args = $this->escape_args($args);
		return $args;
	}
}
