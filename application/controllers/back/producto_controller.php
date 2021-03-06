<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Producto_controller extends CI_Controller{
		
		function __construct() 
		{
			parent::__construct();
			$this ->load->model('producto_model');
			
		}

		private function _veri_log()
    	{
	    	if ($this->session->userdata('logged_in')) 
	    	{
	    		return TRUE;
	    	} else {
	    		return FALSE;
	    	}
    	}
		
		/**
	    * Muestra todos los productos en tabla */
		function index()
		{
			if($this->_veri_log()){
			$data = array('titulo' => 'Productos');
		
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$dat = array('productos' => $this->producto_model->get_productos() );

			$this->load->view('Front/head',$data);
			$this->load->view('Front/Navbar');
			$this->load->view('back/productos/muestraproductos',$dat);
			$this->load->view('Front/Footer');
			}else{
			redirect('login', 'refresh'); }
		}

		function muestraproductos()
		{
			if($this->_veri_log()){
			$data = array('titulo' => 'Productos');
		
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$dat = array('productos' => $this->producto_model->get_productos() );

			$this->load->view('Front/head',$data);
			$this->load->view('Front/Navbar');
			$this->load->view('back/productos/muestratodo',$dat);
			$this->load->view('Front/Footer');
			}else{
			redirect('login', 'refresh'); }
		}


		/**
	    * Muestra todos los electrodomesticos en tabla
	    */
		function muestra_remeras()
		{
			if($this->_veri_log()){
			$data = array('titulo' => 'Remeras');
		
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$dat = array('productos' => $this->producto_model->get_remeras() );

			$this->load->view('Front/head', $data);
			$this->load->view('Front/Navbar', $data);
		
			$this->load->view('back/productos/muestraremeras', $dat);
			$this->load->view('Front/Footer');
			}else{
			redirect('login', 'refresh'); }
		}

		/**
	    * Muestra todos los muebles en tabla
	    */
		function muestra_gorras()
		{
			if($this->_veri_log()){
			$data = array('titulo' => 'Gorras');
		
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$dat = array('productos' => $this->producto_model->get_gorras() );

			$this->load->view('Front/head', $data);
			$this->load->view('Front/Navbar');
			$this->load->view('back/productos/muestragorras', $dat);
			$this->load->view('Front/footer');
			}else{
			redirect('login', 'refresh'); }
		}
		
		/**
	    * Muestra formulario para agregar producto
	    */
		function form_agrega_producto()  	//Si se modifica, modificar (agrega_producto) tambien
		{
			if($this->_veri_log()){
			$data = array('titulo' => 'Agregar Producto');
		
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$this->load->view('Front/head', $data);
			$this->load->view('Front/Navbar');
			$this->load->view('back/productos/agregaproducto');
			$this->load->view('Front/Footer');
			}else{
			redirect('muestraproducto', 'refresh'); }
		}

		/**
	    * Verifica datos ingresados en el formulario para agregar producto
	    */
		function agrega_producto()
		{
			//Genero las reglas de validacion
			$this->form_validation->set_rules('descripcion', 'Descripcion', 'required|is_unique[productos.descripcion]');
			$this->form_validation->set_rules('tipo', 'tipo', 'required');
			$this->form_validation->set_rules('precio', 'Precio Venta', 'required|numeric');
			$this->form_validation->set_rules('stock', 'Stock', 'required|numeric');
			$this->form_validation->set_rules('filename', 'Imagen', 'required|callback__image_upload');

			//Mensaje de error si no pasan las reglas
			$this->form_validation->set_message('required',
										'<div class="alert alert-danger">El campo %s es obligatorio</div>');

			$this->form_validation->set_message('is_unique',
										'<div class="alert alert-danger">El campo %s ya existe</div>');

			$this->form_validation->set_message('numeric',
							'<div class="alert alert-danger">El campo %s debe contener un valor num??rico</div>');


			if (!$this->form_validation->run())
			{
				$data = array('titulo' => 'Error de formulario');
		
				$session_data = $this->session->userdata('logged_in');
				$data['perfil_id'] = $session_data['perfil_id'];
				$data['nombre'] = $session_data['nombre'];


				$this->load->view('Front/head', $data);
				$this->load->view('Front/Navbar');
				$this->load->view('back/productos/agregaproducto');
				$this->load->view('Front/footer');
			}
			else
			{
				$this->_image_upload();			
			}
		}
		
		/**
		* Obtiene los datos del archivo imagen.
		* Permite archivos gif, jpg, png
		* Verifica si los datos son correcto en conjunto con la imagen y lo inserta en la tabla correspondiente
		* En la tabla guarda la URL de donde se encuentra la imagen.
		*/
		function _image_upload()
		{
			$this->load->library('upload');
	 
            //Comprueba si hay un archivo cargado
            if (!empty($_FILES['filename']['name']))
            {
                // Especifica la configuraci??n para el archivo
                $config['upload_path'] = 'assets/img/productos/';
                $config['allowed_types'] = 'gif|jpg|JPEG|png';

                $config['max_size'] = '2048';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';       
 
                // Inicializa la configuraci??n para el archivo 
                $this->upload->initialize($config);
 
                if ($this->upload->do_upload('filename'))
                {
                	// Mueve archivo a la carpeta indicada en la variable $data
                    $data = $this->upload->data();

                    // Path donde guarda el archivo..
                    $url ="assets/img/productos/".$_FILES['filename']['name'];

                    // Array de datos para insertar en productos
                    $data = array(
						'descripcion'=>$this->input->post('descripcion',true),
						'tipo'=>$this->input->post('tipo',true),
						'imagen'=>$url,
						'precio'=>$this->input->post('precio',true),
						'stock'=>$this->input->post('stock',true),
						'eliminado'=>'NO',
					);

					$productos = $this->producto_model->add_producto($data);

					redirect('muestraproducto', 'refresh');

					return TRUE;
                }
                else
                {
                	//Mensaje de error si no existe imagen correcta
                    $imageerrors = '<div class="alert alert-danger">El campo %s es incorrecta, extenci??n incorrecto o excede el tama??o permitido que es de: 2MB </div>';//$this->upload->display_errors();
					$this->form_validation->set_message('_image_upload',$imageerrors );
					
					return false;
                }
 
            }
            else
            {
            	redirect('verifico_nuevoproducto');
		        	
            }
		}

		/**
	    * Muestra para modificar un producto
	    */
		function muestra_modificar()
		{
			$id = $this->uri->segment(2);
			$datos_producto = $this->producto_model->edit_producto($id);

			if ($datos_producto != FALSE) {
				foreach ($datos_producto->result() as $row) 
				{
					$descripcion = $row->descripcion;
					$Tipo = $row->Tipo;
					$imagen = $row->imagen;
					$precio= $row->precio;
					$stock = $row->stock;	
				}

				$dat = array('producto' =>$datos_producto,
					'id'=>$id,
					'descripcion'=>$descripcion,
					'tipo'=>$Tipo,
					'imagen'=>$imagen,
					'precio'=>$precio,
					'stock'=>$stock,
				);
			} 
			else 
			{
				return FALSE;
			}
			if($this->_veri_log()){
			$data = array('titulo' => 'Modificar Producto');
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$this->load->view('Front/head', $data);
			$this->load->view('Front/Navbar');
			$this->load->view('back/productos/modificaproducto', $dat);
			$this->load->view('Front/Footer');
			}else{
			redirect('login', 'refresh');}
		}

		/**
	    * Verifica datos para modificar un producto
	    */
		function modificar_producto()
		{
			//Validaci??n del formulario
			$this->form_validation->set_rules('descripcion', 'Descripcion', 'required');
			$this->form_validation->set_rules('tipo', 'tipo', 'required');
			$this->form_validation->set_rules('precio', 'Precio', 'required|numeric');
			$this->form_validation->set_rules('stock', 'Stock', 'required|numeric');
			

			//Mensaje del form_validation
			$this->form_validation->set_message('required','<div class="alert alert-danger">El campo %s es obligatorio, al intentar modificar estaba vacio</div>');

			$this->form_validation->set_message('numeric','<div class="alert alert-danger">El campo %s debe contener un valor num??rico, al intentar modificar estaba vacio</div>'); 

			$id = $this->uri->segment(2);
			$datos_producto = $this->producto_model->edit_producto($id);

			foreach ($datos_producto->result() as $row) 
			{
				$imagen = $row->imagen;
			}

			$dat = array(
				'id'=>$id,
				'descripcion'=>$this->input->post('descripcion',true),
				'tipo'=>$this->input->post('tipo',true),
				'imagen'=>$imagen,
				'precio'=>$this->input->post('precio',true),
				'stock'=>$this->input->post('stock',true),
			);

			if ($this->form_validation->run()==FALSE)
			{
				$data = array('titulo' => 'Error de formulario');
				$session_data = $this->session->userdata('logged_in');
				$data['perfil_id'] = $session_data['perfil_id'];
				$data['nombre'] = $session_data['nombre'];

				$this->load->view('Front/head', $data);
				$this->load->view('Front/Navbar');
				$this->load->view('back/productos/modificaproducto', $dat);
				$this->load->view('Front/Footer');
			}
			else
			{
				$this->_image_modif();		
			}
			
		}

		/**
		* Obtiene los datos del archivo imagen.
		* Permite archivos gif, jpg, png
		* Verifica si los datos son correcto en conjunto con la imagen y lo inserta en la tabla correspondiente
		* Si el campo imagen se encuentra vacio asume que la imagen no fue moficado.
		* En la tabla guarda la URL de donde se encuentra la imagen.
		*/
		
	    function _image_modif()
	    {
			//Cargo la libreria para subir archivos
	    	$this->load->library('upload');

			// Obtengo el id del libro
	    	$id = $this->uri->segment(2);

	        // Array de datos para obtener datos de libros sin la imagen 
	    	$dat = array(
				'id'=>$id,
				'descripcion'=>$this->input->post('descripcion',true),
				'tipo'=>$this->input->post('tipo',true),
				'precio'=>$this->input->post('precio',true),
				'stock'=>$this->input->post('stock',true),
			);

			// Si la iamgen esta vacia se asume que no se modifica
	    	if (!empty($_FILES['filename']['name']))
	    	{            
	            // Especifica la configuraci??n para el archivo
	    		$config['upload_path'] = 'assets/img/productos/';
	    		$config['allowed_types'] = 'gif|jpg|jpeg|png';

	    		$config['max_size'] = '2048';
	    		$config['max_width']  = '1024';
	    		$config['max_height']  = '768';       

	            // Inicializa la configuraci??n para el archivo 
	    		$this->upload->initialize($config);

	    		if ($this->upload->do_upload('filename'))
	    		{
	                	// Mueve archivo a la carpeta indicada en la variable $data
	    			$data = $this->upload->data();

	                    // Path donde guarda el archivo..
	    			$url ="assets/img/productos/".$_FILES['filename']['name'];

	                 	// Agrego la imagen si se modifico.  
	    			$dat['imagen']=$url;

						// Actualiza datos del libro
	    			$this->producto_model->update_producto($id, $dat);
	    			redirect('muestraproducto', 'refresh');
	    		}
	    		else
	    		{
	                	//Mensaje de error si no existe imagen correcta
	    			$imageerrors = '<div class="alert alert-danger">El campo %s es incorrecta, extenci??n incorrecto o excede el tama??o permitido que es de: 2MB </div>';
	    			$this->form_validation->set_message('_image_modif',$imageerrors );
	    			return false;
	    		} 
	    	}
	    	else
	    	{
	    		$this->producto_model->update_producto($id, $dat);
	    		redirect('muestraproducto', 'refresh');
	    	}
	    }


	    /**
		* Obtiene los datos del producto a eliminar
		$ this-> uri-> segment (n)

		Permite recuperar un segmento espec??fico. Donde n es el n??mero de segmento que desea recuperar. Los segmentos est??n numerados de izquierda a derecha. 

		*/
	    function eliminar_producto(){
	    	$id = $this->uri->segment(2); 
	    	$data = array(
	    		'eliminado'=>'SI'
	    	);

	    	$this->producto_model->estado_producto($id, $data);
	    	redirect('muestraproducto', 'refresh');
	    }

	    /**
		* Obtiene los datos del producto a activar
		*/
	    function activar_producto(){
	    	$id = $this->uri->segment(2);
	    	$data = array(
	    		'eliminado'=>'NO'
	    	);

	    	$this->producto_model->estado_producto($id, $data);
	    	redirect('muestraproducto', 'refresh');
	    }

	    /**
		* Productos eliminados logicamente
		*/
	    function muestra_eliminados()
	    {    	
	    	if($this->_veri_log()){
	    	$data = array('titulo' => 'Productos eliminados');
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			
			$dat = array(
		        'productos' => $this->producto_model->not_active_productos()
			);

			$this->load->view('Front/head', $data);
			$this->load->view('Front/Navbar');
			$this->load->view('back/productos/muestraeliminado', $dat);
			$this->load->view('Front/footer');
			}else{
			redirect('login', 'refresh');}
		}
	    
 	function listar_ventas()
	    { 
             if($this->_veri_log()){
			$data = array('titulo' => 'Ventas');
		
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];


			$dat = array('venta_cabecera' => $this->producto_model->get_ventas_cabecera());

			$this->load->view('Front/head',$data);
			$this->load->view('Front/Navbar',$data);
			$this->load->view('back/usuarios/muestraventas',$dat);
			$this->load->view('Front/footer');
            }else{
			redirect('login', 'refresh');
            }
         }
        
        
        function muestra_detalle($id)
		{
             if($this->_veri_log()){
			$data = array('titulo' => 'Detalle');
		
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
                 
			$dat = array('ventas_detalle' => $this->producto_model->get_ventas_detalle($id));

			$this->load->view('Front/head', $data);
			$this->load->view('Front/Navbar', $data);
			$this->load->view('back/usuarios/muestradetalle', $dat);
			$this->load->view('Front/footer');
            }else{
			redirect('login', 'refresh');
            }
        }
          
		

		
	}
/* End of file
*/