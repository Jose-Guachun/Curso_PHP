<?php

//**************SINTAXIS BASICA****************

/**
 * Declaracion de Variables
 * no se necesita mencionar el tipo de datos.
 * PHP Reconoce el dato que se lo coloque
 */

//Imprimir En pantalla
var_dump("permite imprimir infromacion");
echo "permite imprimir informacion";

//TIPOS DE VARIABLES

//int
$intvar=1;
var_dump($intvar);

//float
$floatvar=1.2;
var_dump($floatvar);

//string
$stringVar='Texto';
var_dump($stringVar);

//bool
$boolVar = false;
var_dump($boolVar);

//null
$nullVar=null;
var_dump($nullVar);

//array o areglos
$arrayVar1=['Valor1',12,1.3,'el mundo'];
var_dump($arrayVar);

$arrayVar2=[
    'Color1' => 'red',
    'color2'=> 'blue',
    3=> 'black'
    ];
    echo $arrayVar[3], $arrayVar['Color1'], $arrayVar['color2'];

// CONCATENACION
$stringVar="hola $intVar"; //muestra contenido de variable entera con comillas dobles
$stringVar="hola ". $intVar;// concatena con un  entero
echo $stringVar;

//ASIGNACION
$a=1;
$lang=[
    'es'=>'español',
    'en'=>'ingles',
];

//ARIMETICAS
echo "Suma 2+2" . ((int)2+(int)2);
echo "Resta 2-2" . ((int)2-(int)2);
echo "Multiplica 2*2" . (2*2);
echo "Divide 2/2" . (2/2);
echo "Modulo 2/2" . (2%2);
echo "Exponencial 2**2" . (2**2);

//COMPARACION
/**
 * Igual a nivel de valor ==, valor'9'== 9
 * Igual a nivel de tipo ===, valor - tipo 9 === 9
 * Diferencias a nivel de valor !=, valor
 * Diferencias a nivel de tipo !==, valor - tipo
 * <,>,<=,>=
 */
$result=$v1==$v2;
var_dump($result);
$resul=$v1===$v2;//este operador si permite diferenciar entre caracteres y enteros
var_dump($resul);
$resu=$v1!=$v2;//este operador diferente que 
var_dump($resu);
$res=$v1<=>$v2;//operador speashi 3 opciones de resultado 0 si son iguales -1 el primer elemento sea menor y 1 si el primer elemento es mayor
echo $res;

// VARIABLES VAIABLES
$app='name';
$name='platzi';

echo $app; //me asigna name como tal
echo $$app;// me muestra platzi debido que subasigna la variable $name
