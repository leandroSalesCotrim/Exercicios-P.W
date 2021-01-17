<html>
    <head>
        <title>Matricula Aluno</title>
    </head>
    <body>
        <h1>Matricula</h1>
        <form method="$_GET" action="verificar.php">
            <label>Insira o nome do aluno:</label>
            <input type="text" name="txtNome" id="txtNome" placeholder="Nome do aluno">
            <br>
            <br>
            <label>Insira a data de nascimento do aluno:</label>
            <input type="date" name="txtData" id="txtData">
            <br>
            <br>
            <label>Insira o CPF do aluno:</label>
            <input type="text" name="txtCpf" id="txtCpf" placeholder="CPF do aluno">
            <br>
            <br>
            <label>Insira o RG do aluno:</label>
            <input type="text" name="txtRg" id="txtRg" placeholder="RG do aluno">
            <br>
            <br>
            <label>Insira a turma em que deseja cadastrar o aluno:</label>
            <input type="text" name="txtTurma" id="txtTurma" placeholder="Turma do aluno">
            <br>
            <br>
            <input type="submit" value="Matricular">
        </form>
    
    </body>
</html>