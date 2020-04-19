<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tienda1 extends CI_Controller {


	public function index()
	{
		$this->load->view('tienda_virtual1');
	}
	public function Carrito()
	{
		$this->load->view('view_Carrito');
	}
	public function tecno()
	{
		$this->load->view('tecnologia');
	}
	public function moda()
	{
		$this->load->view('moda');
	}
	public function sam()
	{
		$this->load->view('samnsuug');
	}
	public function servicios()
	{
		$this->load->view('contactenos');
	}
	public function electrodomesticos()
	{
		$this->load->view('electro');
	}
	public function TV()
	{
		$this->load->view('electros1');
	}
	public function nevera()
	{
		$this->load->view('electros2');
	}
	public function iphon()
	{
		$this->load->view('IPHON11');
	}
	public function ropa()
	{
		$this->load->view('ropa');
	}
	public function productosdelhogar()
	{
		$this->load->view('productos_del_hogar');
	}
	public function productos1()
	{
		$this->load->view('productos1');
	}
	public function productos2()
	{
		$this->load->view('productos2');
	}
	public function productos3()
	{
		$this->load->view('productos3');
	}
	public function productos4()
	{
		$this->load->view('productos4');
	}
	public function productos5()
	{
		$this->load->view('productos5');
	}
	public function productos6()
	{
		$this->load->view('productos6');
	}
	public function nitro_5()
	{
		$this->load->view('nitro');
	}
	public function compu2()
	{
		$this->load->view('compu2');
	
	 }
	public function apple()

	{
		$this->load->view('apple');
	}
	public function tablet()

	{
		$this->load->view('tablet');
	}
	public function ropa1()
	{
		$this->load->view('ropa1');
	}
	public function ropa2()
	{
		$this->load->view('ropa2');
	}
	public function ropa3()
	{
		$this->load->view('ropa3');
	}
	public function ropa4()
	{
		$this->load->view('ropa4');
	}
	public function ropa5()
	{
		$this->load->view('ropa5');
	}
	public function ropa6()
	{
		$this->load->view('ropa6');
	}
	
	
	


}