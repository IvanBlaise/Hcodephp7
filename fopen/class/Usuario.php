<?php 

class Usuario{

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	public function __construct($login = "", $senha = ""){ // coloca "" para que não se torne obrigatorio passar o valor na instanciação

		$this->setDeslogin($login);
		$this->setDessenha($senha);


	}

	public function getIdusuario(){

		return $this->idusuario;
	}

	public function setIdusuario($id){

		$this->idusuario = $id;

	}

	public function getDeslogin(){

		return $this->deslogin;
	}

	public function setDeslogin($login){

		$this->deslogin = $login;

	}

	public function getDessenha(){

		return $this->dessenha;
	}

	public function setDessenha($senha){

		$this->dessenha = $senha;

	}

	public function getDtcadastro(){

		return $this->dtcadastro;
	}

	public function setDtcadastro($dtcadastro){

		$this->dtcadastro = $dtcadastro;

	}

	public function loadById($id){

		$sql = new Sql();
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
			":ID"=>$id
		));

		if (isset($results[0])){//pode ser tb if(count($results)>0)

			$this->setData($results[0]);
			
			

		}

	}

	
	public static function getList(){

		$sql = new Sql();

		return $sql->select("select * from tb_usuarios order by idusuario");
	}


	public static function search($login){

		$sql = new Sql();

		return $sql->select("select * from tb_usuarios where deslogin like :SEARCH order by deslogin", array(

			':SEARCH'=>"%".$login."%"

		));

	}

	public function login($login, $senha){

		$sql = new Sql();
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE  deslogin = :LOGIN and dessenha = :SENHA", array(
			":LOGIN"=>$login,
			":SENHA"=>$senha
		));

		if (isset($results[0])){//pode ser tb if(count($results)>0)

			
			$this->setData($results[0]);

		} else {

			Throw new Exception("Login e/ou senha invalidos");
		}



	}

	public function setData($data){

		$this->setIdusuario($data['idusuario']);
		$this->setDeslogin($data['deslogin']);
		$this->setDessenha($data['dessenha']);
		$this->setDtcadastro(new DateTime($data['dtcadastro']));
	}

	public function insert(){

		$sql = new Sql();

		$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :SENHA)", array(
			":LOGIN"=>$this->getDeslogin(),
			":SENHA"=>$this->getDessenha()
		));

		if(count($results)>0){

			$this->setData($results[0]);

		}
	}

	public function update($login, $senha){

		$this->setDeslogin($login);
		$this->setDessenha($senha);
		$sql = new Sql();
		$sql->query("update tb_usuarios set deslogin= :LOGIN, dessenha= :SENHA where idusuario= :ID", array(

			":LOGIN"=>$this->getDeslogin(),
			":SENHA"=>$this->getDessenha(),
			":ID"=>$this->getIdusuario()

		));


	}

	public function delete(){

		$sql = new Sql();
		$sql->query("delete from tb_usuarios where idusuario= :ID", array(
			":ID"=>$this->getIdusuario()
		));

		$this->setIdusuario(0);
		$this->setDeslogin("");
		$this->setDessenha("");
		$this->setDtcadastro(new DateTime());

	}



	public function __toString(){

		return json_encode(array(
			"idusuario" => $this->getIdusuario(),
			"deslogin" => $this->getDeslogin(),
			"dessenha"=> $this-> getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/y H:i:s")
		));
	}

}





 ?>