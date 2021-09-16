<html>
     <header>
   	    </header>
	    <body>
	           <p align=center> cpf </p>
			<?php
			
			/* Criando Interface para Exceptions */
						interface ExceptionInterface {
						}

						/* Criando Exception exclusiva para CPF. Ajuda muito a descobrir o tipo da Exception */
						class InvalidCpfException extends \InvalidArgumentException implements ExceptionInterface
						{

						}

						class Cpf
						{
						    private $cpf;

						    /**
						     * Cpf constructor.
						     * @param string $cpf
						     */
						    public function __construct($cpf)
						    {
						        if ($this->validate($cpf) === false) {
						            throw new InvalidCpfException;
						        }
						        return $this->cpf = $cpf;
						    }

						    public function __toString()
						    {
						        return $this->cpf;
						    }

						    private function validate($cpf)
						    {

						        // Extrair somente os números
						        $cpf = preg_replace('/[^0-9]/is', '', $cpf);

						        // Verifica se foi informado todos os digitos corretamente
						        if (strlen($cpf) != 11) {
						            return false;
						        }
						        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
						        if (preg_match('/(\d)\1{10}/', $cpf)) {
						            return false;
						        }
						        // Faz o calculo para validar o CPF
						        for ($t = 9; $t < 11; $t++) {
						            for ($d = 0, $c = 0; $c < $t; $c++) {
						                $d += $cpf{$c} * (($t + 1) - $c);
						            }
						            $d = ((10 * $d) % 11) % 10;
						            if ($cpf{$c} != $d) {
						                return false;
						            }
						        }
						        return true;
						    }
						}

						//chamada de exemplo:

						try{
						    $cpf = new Cpf('123.456.789-10');
						    //$cpf = new Cpf('157.203.058-58');

						echo $cpf;
						} catch(InvalidCpfException $e){
						echo "cpf invalido";
						} catch (Exception $e){
						echo "Erro Inesperado";
						}





			?>
		    </body>
</html> 
