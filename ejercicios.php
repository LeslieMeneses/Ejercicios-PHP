<?php

	/* 
		================================================================================================================
			BREAK
		================================================================================================================
		
		$arr = array('one', 'two', 'three', 'four', 'stop', 'five');
		
		while (list(, $val) = each($arr)) {
		    if ($val == 'stop') {
		        break;   Se puede también escribir 'break 1;' aquí, segun el numero de estructuras q debe salir
		    }
		    echo "$val<br />\n";
		}

		Break termina la ejecución de la estructura actual for, foreach, while, do-while o switch.
		break acepta un argumento numérico opcional el cual indica de cuantas estructuras anidadas encerradas se debe salir.

		-- While El significado de una sentencia while es simple. Le dice a PHP que ejecute las sentencias anidadas, tanto
			como la expresión while se evalúe como TRUE. 

		-- ++$i Hace una preincremenrtacion.
			$prefix = 1;
			$postfix = 1;
			echo ++$prefix;   // 2
			echo $postfix++;  // 1
	*/

		$i = 0;
		while (++$i) {
		    switch ($i) {
		    case 5:
		        echo "En 5<br />\n";
		        break 1;  /* Sólo sale del switch. */
		    case 10:
		        echo "En 10; saliendo<br />\n";
		        break 2;  /* Sale del switch y del while. */
		    default:
		        break;
		    }
		}

	/* 
		================================================================================================================
			DIFERENCIA ENTRE CONTINUE Y BREAK
		================================================================================================================

		Diferencia entre Break y Continue: Break termina la el bucle(lppo) completo y continue solo en la actual iteraccion
			y se mueve a la siguiente iteraccion.

			while ($foo) { <--------------------┐
		    continue;    --- goes back here --┘
		    break;       ----- jumps here ----┐
			}                                   |
		                 <--------------------┘
			--incrementa en la siguiente instruccion
			$i=1;
			$x = $i++;
			//$x=1;


			--incrementa inmediatamente
			$i=1;
			$x = ++$i;
			//$x=2;

			$i=$i+1;
			$i+=1;

	*/


		$x=array(1,2,3,4,5);
		$x=[1,2,3,4,5];

		foreach($x as $y){

			if( $y==3 ){
				break; //rompe el ciclo y se sale	
			}
			

			continue; //ir al princpio del for en el siguiente ciclo
			$x=1;
		}

		//el break continua aqui


	/* 
		================================================================================================================
			FOR 
		================================================================================================================

		for (expr1; expr2; expr3)
    	sentencia

		La primera expresión (expr1) es evaluada (ejecutada) una vez incondicionalmente al comienzo del bucle.
		En el comienzo de cada iteración, se evalúa (expr2). Si se evalúa como TRUE, el bucle(loop) continúa y se ejecutan
		nested statement(s) are executed. Si se evalúa como FALSE, finaliza la ejecución del bucle.
		Al final de cada iteración, se evalúa (ejecuta) (expr3).
	*/


		for ($i=0; $i<=10; $i++){
			echo $i . "_";
		}

	/* 
		================================================================================================================
			FOREACH
		================================================================================================================
	*/


		// Foreach con key y value

		$x=["a"=>1,"b"=>2,"c"=>3];

		foreach($x as $k=>$v){
			//$k=a,b,c
			//$v=1,2,3

		}

		// Foreach $r obtiene el key y el value
		$x=[ ["codigo"=>1],["codigo"=>2],["codigo"=>3]  ];

		foreach($x as $r){

			$r["codigo"];

		}



	/* 
		================================================================================================================
			ARRAY
		================================================================================================================
	*/

		$prueba=[
			"codigos"=>[54,24,455,23,5454]
		];

		$prueba["codigos"][3];

		$array = [1,2,3];
		$array = ["a","b","c"];
		$array = ["a"=>1,"b"=>2];
		$array["a"] = 1;

	/* 
		================================================================================================================
			OBJETO
			Siempre debe de tener un key y un value
		================================================================================================================
	*/
		

		$objeto=(object)[1,2,3];
		$objeto=(object)["a"=>1,"b"=>2];
		$objeto->a = 1;

		$objeto=new stdClass();
		$objeto->a = 1;
		$objeto->b = 2;

		

		$prueba=(object)[
			"codigos"=>[54,24,455,23,5454]
		];
		
		echo "<br/>" . "OBJETOS:";
		// Acceder al objeto

		echo $prueba->codigos[3]; //= 23
		// == Comparacion
		// = Asigna el valor

		foreach ($prueba as $key => $value) {
			if($value==3){
				echo $value;	
			}
			
		}

	/* 
		================================================================================================================
			DIFERENCIA ENTRE OBJETO Y ARRAY
		================================================================================================================
	*/
		// Array
		$prueba=[
			"codigos"=>[54,24,455,23,5454]
		];
		// Acceder
		$prueba["codigos"][3];

		// Objeto
		$prueba=(object)[
			"codigos"=>[54,24,455,23,5454]
		];
		// Acceder 
		$prueba->codigos[3]; //= 23

	/* 
		================================================================================================================
			CONVERTIRLOS
		================================================================================================================
	*/

		$array = (array) $objeto;
		$objeto = (object) $array;

	/* 
		================================================================================================================
			ARRAY CON OBJETOS 
		================================================================================================================
	*/
		echo "<br/>" . "ARRAY CON OBJETOS: " ;

		// Array con objetos
		$empleados=[
			(object)[
				"codigo"=>1,
				"nombre"=>"Juan"
			],
			(object)[
				"codigo"=>2,
				"nombre"=>"Jose"
			]
		];


		// Acceder a ellos 
		$empleados[0]->codigo;
		$empleados[1]->nombre;

		foreach($empleados as $r){

			$r->codigo;
			$r->nombre;

			if( $r->codigo==2){
				//estoy en el registro de jose
				echo $empleados[1]->codigo . "-";
				echo $empleados[1]->nombre;
			}
		}

	/* 
		================================================================================================================
			LIST
		================================================================================================================
	*/

		list($a,$b) =  array(1,20);
		$a=1;
		$b=20;
	
?>
