<?php
header("Content-type: text/html;charset=utf-8");


abstract class figure{
	public $length = null;
	public $radius = null;
	const pi=3.1415926;

	public function __construct($length,$radius){
		if( $radius == null){
			$this->length = $length;

		}else if($length == null ){
			$this->radius = $radius;
		}

}
	abstract function countSs($length);
	abstract function s($length);
	abstract function countSr($radius);

    public function __destruct(){}


}
class count extends figure{
	public function countSs($length){
		echo "正方形的面积为",$length* $length,"<br/>";
	} 
	public function countSr($radius){
		echo "圆形的面积为",$radius* $radius*self::pi,"<br/>";
	}
public function s($length){
		echo "正方体的体积为",$length* $length*$length,"<br/>";
	echo "正方体的表面积为",$length* $length*6,"<br/>";	
}
}

class s implements count1 {

	public function s($length){
	echo "正方体的体积为",$length* $length*$length,"<br/>";
	echo "正方体的表面积为",$length* $length*6,"<br/>";		
}

}


class square extends count {
	public function square($length){
	echo "正方体的侧面的面积为",$length* $length,"<br/>";
	echo "正方体的侧面的周长为",$length*4,"<br/>";
}

}

class r extends count implements count2 {
	public function r($radius){
	echo "球体的体积为",4/3*self::pi*$radius*$radius*$radius,"<br/>";
	echo "球体的表面积为",4*self::pi*$radius*$radius,"<br/>";
}
}
class round extends count {	
	public function round($radius){
	echo "球体的半球切面的面积为",$radius* $radius*self::pi,"<br/>";
	echo "球体的半球切面的周长为",2*$radius*self::pi,"<br/>";
}
}
interface count1{
	public function s($length);
}
interface count2{
	public function r($radius);
}
$length = $_POST["length"];
$radius = $_POST["radius"];
$test = new count($length,$radius);

if($length == null && $radius == null){
			echo "你没有输入任何数据<br/>";
		}else if( $radius == null){
			
			echo "正方形的边长  ",$length,"  <br/>";
			$test->countSs($length);
			
			$test = new square($length);
			$test = new s($length);
		}else if($length == null ){
			
			echo "园形的半径  ",$radius,"  <br/>";
			$test->countSr($radius);
			$test = new r($radius);
			$test = new round($radius);
			
		}else{
			echo "不能同时求两个数据<br/>";
		}
