<!DOCTYPE html>
<html>
    <head>
        <title>filtra duplicados</title>
    </head>
    <body>
        <?php
            $datos = explode(',',$_POST["datos"]);

            $tam=count($datos);
            $noDup=array();
            $dup=array();

            for($i=0;$i<$tam;$i++){

                $encontrado=false;
                $cont=0;

                while(!$encontrado){

                    if($i!=$cont && $datos[$i]==$datos[$cont]){
                        $encontrado=true;
                    }

                    $cont++;
                    if($cont==$tam) break;

                }

                if($encontrado){
                    $dup[]=$datos[$i];
                }else{
                    $noDup[]=$datos[$i];
                }
            }


            for($i=0;$i<$tam;$i++){

            }

            echo "duplicados<br />";
            $tam=count($dup);
            for($i=0;$i<$tam;$i++){
                echo $dup[$i]." ";
            }


            echo "<br />";
            echo "no duplicados<br />";
            $tam=count($noDup);
            for($i=0;$i<$tam;$i++){
                echo $noDup[$i]." ";
            }

        ?>
    </body>
</html>