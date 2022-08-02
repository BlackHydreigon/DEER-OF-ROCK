<?php
        session_start();//INICIA LAS SESIONES SEGUN EL PERFIL
        include_once "conexion.php";
        //Recibo los datos del formulario de inicio de sesion
            $nom = $_POST['usuario']; 
            $pwd = $_POST['contrasena']; 

            //asigno el valor almacenado en la variable php siempre y cuando sea asignado desde la TABLA DE LA BD
            $_SESSION['usuario'] = $nom; 
            $sql="SELECT * from usuarios where N_usuario='$nom' and contrasena='$pwd'";
            $rec=$con->query($sql);//rec es un objeto de tipo con 
            $count=0;
            
            // Retorna un array que corresponde a la fila obtenida o null si es que no hay más filas 
            //en el resultset representado por el parámetro result.
            while($row = $rec->fetch_array())
            {
            $count++;
            $result = $row;
            }
            //respuesta de la base de datos 
            //reviso si hay registros que coincidan con los datos ingresados, si no hay envia un mensaje de error
            if($count == 0){ 
            //datos de salida
            echo "<script>
                alert('Nombre de Usuario o Contraseña Incorrecto, verifique...');window.location='../../PROYECTO CON CRUD/login.html';
                </script>"; 
                session_destroy();//TERMINA LA SESIONES
            }
            else { //si el registro es valido, verifico si es admin o user
            //datos de proceso
            if($result[1] == 'a'){
                 //datos de salida
                echo "<script>window.location='../../PROYECTO CON CRUD/menuadmin.php';</script>";
                }
                else{
            
                //datos de salida
                    echo "<script>window.location='../../PROYECTO CON CRUD/menuusuario.php';</script>"; 
            }       
        }
?>


