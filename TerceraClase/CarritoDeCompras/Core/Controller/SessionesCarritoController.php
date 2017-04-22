<?php 
session_start();

class Carrito{
	/*
		productos
		agregarProducto
		quitarProducto
		validar compra
		borrar carrito
		actualizar carrito

[
		total productos
		precio total
	*/
	public $carrito=array();
	public $total=0;
	public $cantidad_productos=0;
	public function __construct(){
		if(!isset($_SESSION['carrito'])){
			$_SESSION['carrito']=null;
		}else{
			$this->carrito=$_SESSION['carrito'];
			$this->actualizarTotales();
		}
	}
	public function add($producto=array()){

		$producto['total']=$producto['cantidad']*$producto['precio'];
		$this->carrito[$producto['id']]=$producto;
		$this->actualizarTotales();


	}
	public function deleteItem($id){
		unset($this->carrito[$id]);
		$this->actualizarTotales();
	}

	protected function actualizarTotales(){
		$cantidad_productos=0;
		$total=0;
		if(!empty($this->carrito)){
			foreach ($this->carrito as $key => $producto) {
				$cantidad_productos+=$producto['cantidad'];
				$total+=($producto['cantidad']*$producto['precio']);
		
			}
		}	
		$this->total=$total;
		$this->cantidad_productos=$cantidad_productos;
		$_SESSION['carrito']=$this->carrito;
		}
	public function destroy(){
		unset($_SESSION['carrito']);
		$this->carrito=null;
		$this->total=null;
		$this->cantidad_productos=null;
	}
	
}
/*$carrito=new Carrito();
//$carrito->cantidad_productos=0;
//$carrito->total=0;
//$carrito->destroy();

/*echo $carrito->cantidad_productos.' total : '.$carrito->total;
return ;*/
/*$producto=array(
	'id'=>1,
	'precio'=>123.12,
	'cantidad'=>3,
	'nombre'=>'Pantalon',
	'descripcion'=>'Pantalon negro con bordes blancos para norteños'
	);

$carrito->add($producto);*/
/*
carrito= array('1'=>array(
	'id'=>1,
	'precio'=>123.12,
	'cantidad'=>3,
	'nombre'=>'Pantalon',
	'descripcion'=>'Pantalon negro con bordes blancos para norteños',
	'total'=>369.63
	);)
	*/
/*

$producto2=array(
	'id'=>11,
	'precio'=>1233.00,
	'cantidad'=>6,
	'nombre'=>'Tenis',
	'descripcion'=>'Tenis de uso rudo para deportistas o escaladores'
	);
$carrito->add($producto2);
/*
carrito= array('1'=>array(
	'id'=>1,
	'precio'=>123.12,
	'cantidad'=>3,
	'nombre'=>'Pantalon',
	'descripcion'=>'Pantalon negro con bordes blancos para norteños',
	'total'=>369.63
	),
	'2'=>array(
	'id'=>11,
	'precio'=>1233.00,
	'cantidad'=>6,
	'nombre'=>'Tenis',
	'descripcion'=>'Tenis de uso rudo para deportistas o escaladores',
	'total'=>
	))
	*//*
$producto=array(
	'id'=>1,
	'precio'=>123.12,
	'cantidad'=>9,
	'nombre'=>'Pantalon',
	'descripcion'=>'Pantalon negro con bordes blancos para norteños'
	);


$carrito->add($producto);
/*
carrito= array('1'=>array(
	'id'=>1,
	'precio'=>123.12,
	'cantidad'=>9,
	'nombre'=>'Pantalon',
	'descripcion'=>'Pantalon negro con bordes blancos para norteños',
	'total'=>1108.08
	),
	'2'=>array(
	'id'=>11,
	'precio'=>1233.00,
	'cantidad'=>6,
	'nombre'=>'Tenis',
	'descripcion'=>'Tenis de uso rudo para deportistas o escaladores',
	'total'=>7398
	))
	*/
//$carrito->deleteItem(11);
/*
echo $carrito->cantidad_productos.' total : '.$carrito->total;;


print_r($_SESSION['carrito']);
//print_r($carrito->carrito);
return  ;
*/
return new Carrito();
?>