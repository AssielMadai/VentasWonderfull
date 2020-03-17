<script src="../Vista/JS/script.js"></script>
<?php
    require('../Modelo/Usuario.php');
    require('../Modelo/Conexion.php');
    require('../Modelo/BDBuscadorUsuario.php');
    $conexion = new Conexion();

    $objetoUsuario = new Usuario();
    $objetoBDBuscadorUsuario = new BDBuscadorUsuario();
   
    if(isset($_REQUEST['usuario']) && isset($_REQUEST['contrasenia'])){

    $objetoUsuario = $objetoBDBuscadorUsuario->verificarUsuario($_REQUEST['usuario'],$_REQUEST['contrasenia']);
    
    //var_dump($objetoUsuario);
    
    if(!is_null($objetoUsuario)){
    	if($objetoUsuario->getIdRol()==1){
    		echo 'Bienvenido Administrador';
                
                ?>                
                <script>
                loadPanelControlUsuario();
                </script>
                <?php
                
    	}else{
    		if($objetoUsuario->getIdRol()==2){
                echo 'Bienvenido Colaborador';
                
    		}else{
                  if($objetoUsuario->getIdRol()==3){
                        echo 'Bienvenido Verificador';
                        
                        }else{
                              echo 'Usuario no tiene acceso al sistema';
                                    ?>                
                                    <script>
                                    loadUsuario();
                                    </script>
                                    <?php
                                }         
                
                }
                
    	}  
    }else{
          echo 'Usuario Invalido';
          ?>                
          <script>
          loadUsuario();
          </script>
          <?php
    }

    }else{
    	echo "Error.....";
    }

?>