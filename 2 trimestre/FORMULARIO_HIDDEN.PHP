<html>
     <header>
   	    </header>
	    <body>
	           <p align=center> FORMULÁRIO</p>
 			<?php 
 				// DESCRIÇÃO:
				//NAME: INFORMA QUAL É O NOME DO CAMPO
 				//SIZE: INFORMA UM VALOR PADRÃO PARA O CAMPO
 				//MAXLENGTH: INFORMA O TAMANHO DO CAMPO EXIBIDO NA TELA
 				//TYPE: INFORMA QUAL É O TIPO DO CAMPO DE ENTRADA DE DADOS
 				

 				//VALOR:
 				//TEXT: MOSTRA UMA CAIXA DE TEXTO
 				//PASSWORD: UTILIZADO PARA SENHAS
 				//HIDDEN: É UM CAMPO ESCONDIDO NÃO APARECE NA TELA PODE SER USADO PARA PASSAR INFORMAÇÕES AOS PROGRAMAS QUE RECEBEM OS DADOS.
 				//SELECT: MOSTRA UMA LISTA DE SELEÇÃO
 				//CHECBOX: EXIBE UMA CAIXA DE SELEÇÃO
 				// RADIO: SÃO BOTÕES DE SELEÇÃO
 				// TEXTAREAS: CAIXA DE TEXTO COM VÁRIAS LINHAS
 				//FILE: PERMITE O ENVIO DE ARQUIVOS
 				// SUBMIT: BOTÃO QUE ADICIONA O ENVIO DOS DADOS DO FORMULÁRIO
 				// IMAGE: TEM A MESMA FUNÇÃO DO SUBMIT MAS UTILIZA UMA IMAGEM EM VEZ DO BOTÃO TRADICIONAL DO FORMULÁRIO
 				// RESET: LIMPA TODO OS CAMPOS
			?>

			<form action="hidden.php" method="post">
				<input type=hidden name=escondido value="valor do escondido">
	  			<input type=hidden name=id value="111">
				<input type=submit>
			</form>


		    </body>
</html> 
