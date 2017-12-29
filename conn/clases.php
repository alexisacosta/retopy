<?php
class dbEspanto{
	private $host = "localhost";
	private $user = "root";
	private $pass = "3806153";
	private $db = "espanto";
	private $conn;


	public function __construct(){
		$this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
		if (mysqli_connect_error()) {
			printf("Error en la conexión: %d", mysqli_connect_error());
			exit;
		}else{}
	}

	public function query($q){
		$data = array();
		if ($q != "") {
			if ($r=mysqli_query($this->conn, $q)) {
				$data = mysqli_fetch_row($r);
			}
		}
		return $data;
	}

	public function query2($q){
		$data = array();
		if ($q != "") {
			if ($r=mysqli_query($this->conn, $q)) {
				$i=0;
				while ($row = mysqli_fetch_assoc($r)) {
					$data[$i] = $row;
					$i++;
				}
			}
		}
		return $data;
	}

	public function close(){
		mysqli_close($this->conn);
	}
}

class Session{
	private $login = false;
	private $userForm;
	private $passForm;
	private $userBD;
	private $passBD;

	public function __construct(){
		session_start();
		$this->verificaLogin();
		if ($this->login) {
			// echo("<script>console.log('PHP: ".$_SESSION['usuario']."');</script>");
		}else{
			// echo("<script>console.log('PHP: ".$_SESSION['usuario']."No estamos logueado"."');</script>");
		}
	}

	private function verificaLogin(){
		if (isset($_SESSION["usuario"])) {
			$this->login = true;
		}else{
			$this->login = false;
		}
	}

	public function inicioLogin($user, $pass){
		$conn = new dbEspanto();
		$this->userForm = $user;
		$this->passForm = $pass;

		$q = "SELECT * FROM usuario WHERE usuario = '".$user."'";

		$r = $conn->query($q);

		$userBD = $r[2];
		$passBD = $r[3];
		
		if ($this->userForm == $userBD and $this->passForm == $passBD) {
			session_start();
			$_SESSION['usuario'] = $userBD;
			$_SESSION['idpersona'] = $r[1];
			$_SESSION['estado'] = 'Autenticado';
			$this->login = true;
			echo "Login";
		}else{
			die('Error');
			$this->login = false;
		};
		$conn->close();
		unset($conn);
	}

	public function finLogin(){
		unset($_SESSION["usuario"]);
		unset($_SESSION["idpersona"]);
		unset($_SESSION["estado"]);
		session_unset();
		session_destroy();
		session_start();
		$this->login = false;
		echo "correct";
	}

	public function estadoLogin(){
		return $this->login;
	}
}

class Persona{
	private $id;
	private $primer_nombre;
	private $segundo_nombre;
	private $primer_apellido;
	private $segundo_apellido;
	private $fecha_nacimiento;
	private $id_pais_nacimiento;
	private $id_sexo;
	private $id_estado_civil;
	private $id_tipo_documento;
	private $documento;
	private $ruc;
	private $id_pais_residencia;
	private $id_dpto_pais;
	private $id_localidad_pais;
	private $barrio;
	private $calle;
	private $numero_casa;
	private $entre_calles;
	private $observaciones;
	private $email;
	private $telefono_1;
	private $telefono_2;
	private $telefono_3;
	private $fecha_carga;
	private $id_usuario_carga;
	private $fecha_ult_modificacion;
	private $id_usuario_modificacion;

	function __construct(){}

	function __destruct(){}

	public static function nombrePersona($id){
		$db = new dbEspanto();
		$data = $db->query("SELECT primer_nombre, primer_apellido FROM persona WHERE id='".$id."'");
		$db->close();
		unset($db);
		return $data[0]." ".$data[1];	
	}
}

class Usuario{
	private $id;
	private $id_persona;
	private $usuario;
	private $contrasena;
	private $fecha_carga;
	private $fecha_ult_modificacion;

	function __construct(){}
	function __destruct(){}

	public static function cambioContrasena($id, $c, $d){
		$db = new dbEspanto();
		$q = "UPDATE usuario SET ";
		$q .= "contrasena = '".$c."', ";
		$q .= "fecha_ult_modificacion = '".$d."' ";
		$q .= "WHERE id_persona = ".$id;
		$db->query($q);
		$db->close();
		unset($db);
	}
}

class Departamento{
	private $id;
	private $departamento;

	function __construct(){}

	function __destruct(){}

	public static function departamento(){
		$db = new dbEspanto();

		$data = $db->query2("SELECT * FROM dpto_pais");

		$db->close();
		unset($db);
		return $data;
	}
}

class Suscripciones{
	private $id;
	private $nombre;
	private $apellido;
	private $email;
	private $telefono;
	private $comentario;
	private $departamento;
	private $ciudad;
	private $edad;
	private $genero;
	private $encuesta;
	private $interes;
	private $fecha;

	function __construct(){}

	function __destruct(){}

	public static function ingreso($n, $a, $e, $t, $c, $d, $ciu, $edad, $g, $enc, $i, $f){
		$db = new dbEspanto();
		$q = "INSERT INTO suscripciones(id, nombre, apellido, email, telefono, comentario, departamento, ciudad, edad, genero, encuesta, interes, fecha) VALUES('','".$n."','".$a."','".$e."','".$t."','".$c."',".$d.",'".$ciu."','".$edad."','".$g."','".$enc."',".$i.",'".$f."')";
		$data = $db->query($q);
		$db->close();
		unset($db);
	}

	public static function suscTodos(){
		$db = new dbEspanto();
		$q = "SELECT s.id, s.nombre, s.apellido, s.email, s.telefono, s.comentario, d.departamento, s.ciudad, s.edad, s.genero, s.encuesta, i.interes, s.fecha FROM suscripciones s left join dpto_pais d on s.departamento = d.id left join interes i on s.interes = i.id";
		$data = $db->query2($q);
		$db->close();
		unset($db);
		return $data;
	}

	public static function suscId($id){
		$db = new dbEspanto();
		$q = "SELECT s.id, s.nombre, s.apellido, s.email, s.telefono, s.comentario, d.departamento, s.ciudad, s.edad, s.genero, s.encuesta, i.interes, s.fecha FROM suscripciones s left join dpto_pais d on s.departamento = d.id left join interes i on s.interes = i.id where s.interes = ".$id;
		$data = $db->query2($q);
		$db->close();
		unset($db);
		return $data;
	}

	public static function suscIdFec($id, $fecha){
		$db = new dbEspanto();
		$q = "SELECT s.id, s.nombre, s.apellido, s.email, s.telefono, s.comentario, d.departamento, s.ciudad, s.edad, s.genero, s.encuesta, i.interes, s.fecha FROM suscripciones s left join dpto_pais d on s.departamento = d.id left join interes i on s.interes = i.id where s.interes = ".$id." and s.fecha = '".$fecha."'";
		$data = $db->query2($q);
		$db->close();
		unset($db);
		return $data;
	}

	public static function suscFec($fecha){
		$db = new dbEspanto();
		$q = "SELECT s.id, s.nombre, s.apellido, s.email, s.telefono, s.comentario, d.departamento, s.ciudad, s.edad, s.genero, s.encuesta, i.interes, s.fecha FROM suscripciones s left join dpto_pais d on s.departamento = d.id left join interes i on s.interes = i.id where s.fecha = '".$fecha."'";
		$data = $db->query2($q);
		$db->close();
		unset($db);
		return $data;
	}

}

class Interes{
	private $id;
	private $interes;

	function __construct(){}
	function __destruct(){}

	public static function interes(){
		$db = new dbEspanto();
		$data = $db->query2("SELECT * FROM interes");
		$db->close();
		unset($db);
		return $data;
	}
}

class DatosPagina{
	private $id;
	private $nombre_negocio;
	private $slogan;
	private $email_primario;
	private $email_secundario;
	private $telefono_primario;
	private $telefono_secundario;
	private $facebook;
	private $twitter;
	private $instagran;
	private $descargo;

	function __construct(){}
	function __destruct(){}

	public static function datos(){
		$db = new dbEspanto();
		$data = $db->query("SELECT * FROM datos_pagina WHERE id = 1");
		$db->close();
		unset($db);
		return $data;
	}

	public static function datosUpdate($n, $s, $e1, $e2, $t1, $t2, $f, $t, $i, $d){
		$q = "UPDATE datos_pagina ";
		$q .= "SET ";
		$q .= "nombre_negocio = '".$n."', ";
		$q .= "slogan = '".$s."', ";
		$q .= "email_primario = '".$e1."', ";
		$q .= "email_secundario = '".$e2."', ";
		$q .= "telefono_primario = '".$t1."', ";
		$q .= "telefono_secundario = '".$t2."', ";
		$q .= "facebook = '".$f."', ";
		$q .= "twitter = '".$t."', ";
		$q .= "instagran = '".$i."', ";
		$q .= "descargo = '".$d."' ";
		$q .= "WHERE id = 1";
		$db = new dbEspanto();
		$db->query($q);
		$db->close();
		unset($db);
	}
}

class BlogCategoria{
	private $id;
	private $categoria;
	private $id_estado;

	function __construct(){}
	function __destruct(){}

	public static function categoria(){
		$db = new dbEspanto();
		$data = $db->query2("SELECT a.*, b.estado FROM blog_categoria a JOIN blog_estado b on a.id_estado = b.id");
		$db->close();
		unset($db);
		return $data;
	}

	public static function newCategoria($c){
		$db = new dbEspanto();
		$q = "INSERT INTO blog_categoria(id, categoria, id_estado) VALUES('','".$c."',1)";
		$db->query($q);
		$db->close();
		unset($db);
	}

	public static function chanCategoria($id, $idEdo){
		$db = new dbEspanto();
		$q = "UPDATE blog_categoria ";
		$q .= "SET "; 
		$q .= "id_estado = ".$idEdo." ";
		$q .= "WHERE id = ".$id; 
		$db->query($q);
		$db->close();
		unset($db);	
	}
}

class BlogArticulo{
	private $id;
	private $articulo;
	private $texto;
	private $fecha;
	private $id_categoria;
	private $id_usuario;
	private $id_estado;

	function __construct(){}
	function __destruct(){}

	public static function articuloNew($bc, $bt, $ba, $bd, $texto){
		$db = new dbEspanto();
		$q = "INSERT INTO blog_articulo(id, articulo, texto, fecha, id_categoria, id_usuario, id_estado) VALUES('','".$bt."','".$texto."','".$bd."','".$bc."','".$ba."',1)";
		$db->query($q);
		$data = $db->query("SELECT max(id) as id_blog FROM blog_articulo WHERE articulo = '".$bt."'");
		$db->close();
		unset($db);
		return $data[0];
	}

	public static function notasBlog(){
		$db = new dbEspanto();
		$q = "SELECT a.id, a.articulo, a.texto, a.fecha, b.categoria, concat(c.primer_nombre,' ',c.primer_apellido) as usuario, d.estado as estado_nota, a.id_estado as id_edo_nota, b.id_estado as id_edo_categoria   FROM blog_articulo a ";
		$q .= "JOIN blog_categoria b ON a.id_categoria = b.id ";
		$q .= "JOIN persona c ON a.id_usuario = c.id ";
		$q .= "JOIN blog_estado d ON a.id_estado = d.id";
		$data = $db->query2($q);
		$db->close();
		unset($db);
		return $data;
	}

	public static function chanEdoNota($id, $idEdo){
		$db = new dbEspanto();
		$q = "UPDATE blog_articulo ";
		$q .= "SET "; 
		$q .= "id_estado = ".$idEdo." ";
		$q .= "WHERE id = ".$id; 
		$db->query($q);
		$db->close();
		unset($db);	
	}
}

class BlogImage{
	private $id;
	private $url;
	private $id_blog_articulo;

	function __construct(){}
	function __destruct(){}

	public static function urlNew($url, $idBlog){
		$db = new dbEspanto();
		$q = "INSERT INTO blog_image(id, url, id_blog_articulo) VALUES('','".$url."',".$idBlog.")";
		$db->query($q);
		$db->close();
		unset($db);
	}
}

class landingTitular{
	private $id;
	private $titulo_fuerte;
	private $texto_apoyo;
	private $calltoaction;
	private $video_trailer;

	function __construct(){}
	function __destruct(){}

	public static function nuevo($t, $t2, $v, $b){
		$db = new dbEspanto();
		$q = "INSERT INTO landing_titular(id, titulo_fuerte, texto_apoyo, calltoaction, video_trailer) ";
		$q .= "VALUES('','".$t."', '".$t2."', '".$b."', '".$v."')";
		$db->query($q);
		$db->close();
		unset($db);
	}

	public static function registros(){
		$db = new dbEspanto();
		$data = $db->query2("SELECT * FROM landing_titular");
		$db->close();
		unset($db);
		return $data;	
	}

	public static function ult_registro(){
		$db = new dbEspanto();
		$data = $db->query("SELECT MAX(id) registro FROM landing_titular");
		$db->close();
		unset($db);	
		return $data[0];
	}
}
class landingBtn{
	private $id;
	private $id_landing_titular;
	private $nombre;
	private $id_estado;

	function __construct(){}
	function __destruct(){}

	public static function nuevo($id, $btn){
		$db = new dbEspanto();
		$q = "INSERT INTO landing_btn_gancho(id, id_landing_titular, nombre, id_estado) ";
		$q .= "VALUES('','".$id."', '".$btn."',2)";
		$db->query($q);
		$db->close();
		unset($db);
	}

	public static function datos(){
		$db = new dbEspanto();
		$data = $db->query2("SELECT a.id, a.nombre, a.fecha_publicacion, b.estado FROM landing_btn_gancho a JOIN landing_estado b ON a.id_estado = b.id ORDER BY a.fecha_publicacion DESC");
		$db->close();
		unset($db);
		return $data;	
	}

	public static function chanGralInactivo(){
		$db = new dbEspanto();
		$q = "UPDATE landing_btn_gancho SET ";
		$q .= "id_estado = 2 ";
		$db->query($q);
		$db->close();
		unset($db);	
	}	

	public static function chanEdoActivo($id){
		$db = new dbEspanto();
		$q = "UPDATE landing_btn_gancho SET ";
		$q .= "id_estado = 1 ";
		$q .= "WHERE id = ".$id;
		$db->query($q);
		$db->close();
		unset($db);	
	}
}
class landingScreenShots{
	private $id;
	private $id_landing_titular;
	private $id_tipo;
	private $contenido;
	private $colorfondo;
	private $colortexto;

	function __construct(){}
	function __destruct(){}

	public static function nuevo($id, $tipo, $content, $cf, $ct){
		$db = new dbEspanto();
		$q = "INSERT INTO landing_screenshots(id, id_landing_titular, id_tipo, contenido, colorfondo, colortexto) ";
		$q .= "VALUES('','".$id."', '".$tipo."', '".$content."', '".$cf."', '".$cf."')";
		$db->query($q);
		$db->close();
		unset($db);
	}

	public static function screen_cant_Landing($id_landing){
		$db = new dbEspanto();
		$data = $db->query("SELECT COUNT(*) AS cantidad FROM landing_screenshots WHERE id_landing_titular = ".$id_landing);
		$db->close();
		unset($db);
		return $data[0];	
	}
}

class landingBenefits{
	private $id;
	private $id_landing_titular;
	private $header;
	private $body;

	function __construct(){}
	function __destruct(){}

	public static function nuevo ($id, $h,$b){
		$db = new dbEspanto();
		$q = "INSERT INTO landing_benefits(id, id_landing_titular, header, body) ";
		$q .= "VALUES('','".$id."','".$h."','".$b."')";
		$db->query($q);
		$db->close();
		unset($db);
	}
}

class landingTestimonios{
	private $id;
	private $id_landing_titular;
	private $image;
	private $header;
	private $body;
	private $footer;

	function __construct(){}
	function __destruct(){}

	public static function nuevo($id, $i, $h, $b, $f){
		$db = new dbEspanto();
		$q = "INSERT INTO landing_testimonials(id, id_landing_titular, image, header, body, footer) ";
		$q .= "VALUES('','".$id."','".$i."','".$h."','".$b."','".$f."')";
		$db->query($q);
		$db->close();
		unset($db);	
	}

	public static function datos($id){
		$db = new dbEspanto();
		$data = $db->query2("SELECT * FROM landing_testimonials WHERE id_landing_titular = ".$id);
		$db->close();
		unset($db);		
		return $data;
	}

}

class landingConfiguracion{
	private $id;
	private $bg_primario;
	private $bg_secundario;
	private $font;

	function __construct(){}
	function __destruct(){}

	public static function dato(){
		$db = new dbEspanto();
		$data = $db->query("SELECT * FROM landing_configuracion WHERE id = 1");
		$db->close();
		unset($db);		
		return $data;	
	}

	public static function update($bg_p, $bg_s, $f){
		$db = new dbEspanto();
		$q = "UPDATE landing_configuracion SET ";
		$q .= "bg_primario = '".$bg_p."', ";
		$q .= "bg_secundario = '".$bg_s."', ";
		$q .= "font = '".$f."' ";
		$q .= "WHERE id = 1";
		$db->query($q);
		$db->close();
		unset($db);
	}
}

//var_dump(landingBtn::datos());
?>