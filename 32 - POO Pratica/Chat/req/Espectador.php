<?php

class Espectador  {

	protected $id;
	protected $email;
	protected $senha;
	protected $bloqueado;
	protected $logado;

	public function __construct($id,$email,$senha,$bloqueado){
		$this->id = $id;
		$this->email = $email;
		$this->senha = $senha;
		$this->bloqueado = $bloqueado;
		$this->logado = false;
	}

	public function logar($emailDigitado,$senhaDigitada){

		 // Comparar o email digitado com o email da base
		if($this->email != $emailDigitado){
			return false;
		}

		 // Comparar a senha digitada com a senha guardada
		// if(!password_verify($senhaDigitada, $this->$senha)){

		// 	// a senha não bate return FALSO
		// 	return false;
		// }

		 // Mudar atributo de logado para true
		$this->logado = true;

		 // Return true
		 return true;
	}

	public function lerMensagens(){

		// Conexao Banco
		$db = new DB();

		// Prepara consulta
		$query = $db->prepare("SELECT 
									m.id,
									m.hora,
									u.email,
									m.texto
								FROM usuarios u 
								INNER JOIN mensagens m ON u.id=m.id_usuario
								ORDER BY m.hora");
		// Executando consulta
		$query->execute();

		// Recupera consulta
		$mensagens = $query->fetchALL(PDO::FETCH_ASSOC);

		// Retorna o array de mensagens
		return $mensagens;

		
	}

	public function getEmail(){
		return $this->email;
	}
}