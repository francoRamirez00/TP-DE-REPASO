<?php
/** 
 * arrreglo de vinos
 * @return array
 */


 function vinos() {

         // array $TipoDeVino
        $TipoDeVino = array( );
            $TipoDeVino ['malbec'] = array( 
                                             "variedad" => ["dulce", "semi-dulce", "seco"],
                                            "CantBotellas" =>[5,    7,    3       ],
                                            "añoProduccion" => [2018, 2011, 2016],
                                            "precio" => [1999, 2510, 3000]   ,
         ) ;
                    
         $TipoDeVino ['cabernet Sauvignon'] = array(  
                                            "variedad" => ["dulce", "semi-dulce", "seco"],
                                            "CantBotellas" =>[3,    1,    10       ],
                                            "añoProduccion" => [2010, 2005, 2020],
                                            "precio" => [1800, 2000, 2500]   ,
         );
         $TipoDeVino ['merlot'] = array(  
                                        
                                            "variedad" => ["dulce", "semi-dulce", "seco"],
                                            "CantBotellas" =>[6,    5,    1       ],
                                            "añoProduccion" => [2010, 1999, 2021],
                                            "precio" => [1400, 2700, 1950] ,  
         );
                

        // print_r($TipoDeVino ['malbec']["CantBotellas"][0]) ;
        


           return  ($TipoDeVino );
 }


 /**
  * suma de la cantidad de botellas y promedio de precio
  *@param int $eleccion
  *@return array
  */
  function cantYPromedio($eleccion) {

    // $promedioPrecio float
    // $botellasFinal int
    // $precioSuma int
    $botellasFinal = 0;
    $precioSuma = 0 ;

    if ($eleccion==1 ) {

        for ($i=0; $i <3 ; $i++) { 
            $TotalBotellas = vinos()['malbec']["CantBotellas"][$i] ;
            $botellasFinal = $TotalBotellas + $botellasFinal ;

            $precioUnitario = vinos()['malbec']["precio"][$i];
            $precioSuma = $precioUnitario + $precioSuma ;
            $promedioPrecio = $precioSuma / count(vinos()['malbec']["precio"]) ;

            $informacionFinal = array() ;
            $informacionFinal ['malbec'] =array("Total de botellas " => $botellasFinal, "Promedio" =>  $promedioPrecio) ;
            
     } 
    } elseif ($eleccion==2) {

        for ($i=0; $i <3 ; $i++) { 
            $TotalBotellas = vinos()['cabernet Sauvignon']["CantBotellas"][$i] ;
            $botellasFinal = $TotalBotellas + $botellasFinal ;

            $precioUnitario = vinos()['cabernet Sauvignon']["precio"][$i];
            $precioSuma = $precioUnitario + $precioSuma ;
            $promedioPrecio = $precioSuma / count(vinos()['cabernet Sauvignon']["precio"]) ;

            $informacionFinal = array() ;
            $informacionFinal ['cabernet Sauvignon'] =array("Total de botellas " => $botellasFinal, "Promedio" =>  $promedioPrecio) ;
        }
        
    }elseif ($eleccion==3) {
        for ($i=0; $i <3 ; $i++) { 
            $TotalBotellas = vinos()['merlot']["CantBotellas"][$i] ;
            $botellasFinal = $TotalBotellas + $botellasFinal ;

            $precioUnitario = vinos()['merlot']["precio"][$i];
            $precioSuma = $precioUnitario + $precioSuma ;
            $promedioPrecio = $precioSuma / count(vinos()['merlot']["precio"]) ;

            $informacionFinal = array() ;
            $informacionFinal ['merlot'] =array("Total de botellas " => $botellasFinal, "Promedio" =>  $promedioPrecio) ;
        }
    }

    
    

    return $informacionFinal ;
    }


/**
* funcion que invoca a la funcion cantYPromedio($eleccion) para poder mostrar resultados del total de botellas y el promedio del precio
*/

function main() {

    // $vinoElegido string

   

    do {

        echo "Elija el vino para obtener la informacion de cantidad de botellas y promedio de precio : 1) malbec , 2) cabernet suavignon , 3)merlot  " ;
        $eleccion= trim(fgets(STDIN) ) ;


       if ($eleccion == 1 ) {

       echo "la informacion estara detallada acontinuacion : ". "\n" ;
       echo " La cantidad de botellas son : " . cantYPromedio($eleccion)['malbec']["Total de botellas " ] . "\n" ;
       echo "El promedio de precio es " . cantYPromedio($eleccion)['malbec']["Promedio" ] . "\n" ;
          
       } elseif ($eleccion == 2) {

        echo "la informacion estara detallada acontinuacion : ". "\n" ;
        echo " La cantidad de botellas son : " . cantYPromedio($eleccion)['cabernet Sauvignon']["Total de botellas " ]. "\n"  ;
        echo "El promedio de precio es " . cantYPromedio($eleccion)['cabernet Sauvignon']["Promedio" ] . "\n" ;

       } elseif($eleccion == 3) {

        echo "la informacion estara detallada acontinuacion : ". "\n" ;
        echo " La cantidad de botellas son : " . cantYPromedio($eleccion)['merlot']["Total de botellas " ] . "\n"  ;
        echo "El promedio de precio es " . cantYPromedio($eleccion)['merlot']["Promedio" ] . "\n" ;

       } 
       echo " ¿Desea continuar? : " ;
       $Continuar = trim(fgets(STDIN)) ;





    } while ($Continuar == "si");





    
}

// programa

main() ;

echo "gracias que tenga buen dia " ;


