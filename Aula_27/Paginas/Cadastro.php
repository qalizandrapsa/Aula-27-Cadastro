<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body bgcolor="#9fbbce">
	<h1 align="center">Cadastrar</h1>
	<form action="Cadastrorealizado.php" method="">
	<table border="0" align="center" width="500" height="200" cellspacing="6">
	    <tr>
		<td align="right"><label>Nome:</label></td>
		<td><input type="text" name="nome" size="30"></td>
	    </tr>
	    <tr>
		<td align="right"><label>Login:</label></td>
		<td><input type="text" name="Login" size="30"></td>
	    </tr>
	    <tr>
		<td align="right"><label>CPF:</label></td>
		<td><input type="text" name="cpf" size="30"></td>
	    </tr>
	    <tr>
		<td align="right"><label>Senha:</label></td>
		<td><input type="password" name="senha" size="30"></td>
	    </tr>
	    <tr>
		<td align="right"><label>Confirmar Senha:</label></td>
		<td><input type="password" name="csenha" size="30"></td>
	    </tr>
	    <tr>
		<td align="center"><input type="submit" value="Cadastrar"></td>
		<td align="center"><a href="Cancelar.php"><input type="button" value="Cancelar"></a></td>
	    </tr>
	</table>
	</form>
    </body>
</html>
