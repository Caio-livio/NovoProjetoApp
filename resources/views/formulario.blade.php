<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	
</head>
<div class="container">
<form action="" method="get" enctype="multipart/form-data" target="">
	<fieldset>
		<center>
		<h1>Cadastro</h1>
		<h2>Formulário</h2>
	
		</center>
		<fieldset>
			<h3>Dados Pessoais:</h3>
			<center>
			<table>
			    <tr>
			    	<td align="right">Nome:</td>
			    	<td><input type="text" required name="name" size="20" maxlength="40" id="fname" placeholder="Caio"></td>
			    </tr>
			     <tr>
			    	<td align="right">CPF:</td>
			    	<td><input type="text" required name="cpf" size="11" maxlength="40" id="cpf" placeholder="xxxxxxxxx-xx"></td>
			    </tr>
			    <tr>
			    	<td>Nascimento (dd/mm/aaaa):</td>
			    	<td><input type="data" required name="dia" size="1" maxlength="2" id="dia" placeholder="dia">/
				<input type="data" required name="mes" size="1" maxlength="2" id="mes" placeholder="mês">/
				<input type="data" required name="ano" size="1" maxlength="4" id="ano" placeholder="ano"></td>
			    </tr>
				<tr>
					<td align="right">Nome da Mãe:</td>
					<td><input type="text" required name="mae" size="20" maxlength="40" id="mae" placeholder="Nome da mãe"></td>
				</tr>
				<tr>
					<td align="right">Nome do Pai:</td>
					<td><input type="text" required name="pai" size="20" maxlength="40" id="pai" placeholder="Nome do pai"></td>
				</tr>
                <tr>
					<td align="right">Endereço:</td>
					<td><input type="text" required name="Endereco" size="20" maxlength="80" id="Endereco" placeholder="Rua xxxxxxx"></td>
				</tr>
				<tr>
					<td align="right">Cidade:</td>
					<td><input type="text" required name="cidade" size="20" maxlength="80" id="cidade" placeholder="Maceió"></td>
				</tr>
				<tr>
					<td align="right">Estado:</td>
					<td><input type="text" required name="estado" size="20" maxlength="80" id="estado" placeholder="Alagoas"></td>
				</tr>					
				<tr>
					<td align="right">Telefone: DDD (</td>
					<td><input type="tel" required name="ddd" size="1" maxlength="3" id="ddd"placeholder="DDD"> )
					Tel:<input type="tel" required name="telefone" size="5" maxlength="9" id="tel" placeholder="telefone">
					</td>
				</tr>
				<tr>
					<td align="right">E-mail:</td>
					<td><input type="email" required name="email" size="20" maxlength="40" id="email" placeholder="xxxxx@xxxx.com" ></td>
				</tr>
			</table>
			</center>
			</fieldset>
	<input type="submit" name="enviar" value="Enviar">
	<input type="reset" name="resetar" value="Apagar">
	
	</fieldset>
</form> 
</div>
</html>