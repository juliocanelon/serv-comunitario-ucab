<?php class Localidad_model extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

        
        $this->load->database();


    }


public function listar(){

            $query = $this->db->query('SELECT id_localidad,nombre_localidad  FROM localidad ORDER BY coordenadas ASC' );


            $data ="";

                if ($query->num_rows() > 0)
                {
                             
                    return $data;
            
                }else{

                    return -1;
                }
                    
        
        }

    

}