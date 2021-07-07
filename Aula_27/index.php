<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
	<style type="text/css"> 
	    .sombra{
		box-shadow: 3px 3px 0.2cm black;
		border-radius: 10px;
	    }
	</style>
    </head>
   
    <body bgcolor="#9fbbce">
	<h1 align="center">LOGIN</h1>
	<table border="0" class="" sombra="" bgcolor="#e5e5e5" align="center" width="400" height="200">
	    <tr>
		<td>
		    <form action="Paginas/Login.php" method="">
		    <table border="0" width="350" height="150" align="center" cellspacing="8">
			<tr>
			    <td>LOGIN</td>
			    <td><input type="text" name="login" size="30" required=""></td>
			</tr>
			<tr>
			    <td>SENHA</td>
			    <td><input type="password" name="senha" size="30" required=""></td>
			</tr>
			<tr>
			    <td colspan="2"  align="center"><input type="submit" value="LOGAR"></td>
			</tr>
			<tr>
			    <td colspan="2" align="center"><a href="Paginas/Cadastro.php" target="paginas">Cadastre-se</a></td>
			</tr>
			<tr>
			    <td colspan="2" align="center"><a href="Paginas/esqueceusenha.php" target="paginas">Esqueceu a senha?</a></td>
			</tr>
		    </table>
		    </form>
		</td>
	    </tr>
	</table>
	<table border="0" align="center" width="500" height="500">
	    <tr>
		<td><iframe width="100%" height="100%" frameborder="0" name="paginas"></iframe></td>
	    </tr>
	</table>
    </body>
</html>
