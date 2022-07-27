<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Projeto individual</title>
</head>

<body>
    <div class="container">
        <div class="row  row-cols-2gx-5 m-5">
            <div class="col-sm-6 p-4 border-end bg-info">
                <h1 class="mb-4">Cadastrar-se</h1>
                <form class="row g-2 border border-primary rounded">
                    <!-- nome -->
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <!-- cpf -->
                    <div class="col-md-6">
                        <label for="cpf" class="form-label">CPF:</label>
                        <input type="text" class="form-control" id="cpf" name="cpf">
                    </div>
                    <!-- rg -->
                    <div class="col-6">
                        <label for="rg" class="form-label">RG:</label>
                        <input type="text" class="form-control" id="rg" name="rg">
                    </div>
                    <!-- contato -->
                    <div class="col-md-6">
                        <label for="contato" class="form-label">Contato:</label>
                        <input type="tel" class="form-control" id="contato" name="contato">
                    </div>
                    <!-- email -->
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <!-- password -->
                    <div class="col-md-6">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <!-- cep -->
                    <div class="col-md-6">
                        <label for="cep" class="form-label">CEP:</label>
                        <input type="text" class="form-control" id="cep" placeholder="68005-120">
                    </div>
                    <!-- logradouro -->
                    <div class="col-md-6">
                        <label for="logradouro" class="form-label">Logradouro:</label>
                        <input type="text" class="form-control" id="logradouro" name="logradouro">
                    </div>
                    <!-- bairro -->
                    <div class="col-6">
                        <label for="bairro" class="form-label">Bairro:</label>
                        <input type="text" class="form-control" id="bairro" name="bairro">
                    </div>
                    <!-- localidade -->
                    <div class="col-4">
                        <label for="localidade" class="form-label">Localidade:</label>
                        <input type="text" class="form-control" id="localidade" name="localidade">
                    </div>
                    <!-- uf -->
                    <div class="col-2">
                        <label for="uf" class="form-label">UF:</label>
                        <input type="text" class="form-control" id="uf" name="uf">
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary mb-2">Confirmar</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-6 p-4">
                <h1 class="mb-4">Login</h1>
                <form class="row g-3 border border-secondary rounded">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox ms-4" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-outline-secondary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>
