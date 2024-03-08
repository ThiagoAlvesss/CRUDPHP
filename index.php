<!DOCTYPE html>
<html lang="en">
<head>
    <!-- c:\\xamp\php\php.exe -S localhost:8000 -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
    <div class = "navbar navbar-light bg-light menu">
        <a class = "navbar-brand" href="" class="navbar">CRUD PHP</a>
    </div>
    <div>
        <form action="">
            <div>
                <label for="">Nome</label>
                <input type="text" name="nome" autofocus value="" class="form-control" require>
            </div>
            <div>
                <label for="">Sobrenome</label>
                <input type="text" name="nome" autofocus value="" class="form-control" require>
            </div>
            <div>
                <label for="">Data de nascimento</label>
                <input type="text" name="nome" autofocus value="" class="form-control" require>
            </div>
            <div>
                <label for="">Sexo</label>
                <select name="sexo" id="" value="" class="form-control">
                    <option value="mas">Feminino</option>
                    <option value="fem">Masculino</option>
                </select>
            </div>
            <div><br>
                <div>
                <button type="button" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>