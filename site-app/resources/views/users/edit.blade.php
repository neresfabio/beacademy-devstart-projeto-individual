<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Atualizar dados do usuário</title>
</head>

<body>

    <div class="container p-2">
        <a href="{{ route('users.index') }}"class=" btn btn-outline-dark">
            cancelar
        </a>
        @if ($errors->any())
            <div class="alert alert-danger mt-2" role="alert">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif
        <form action="{{ route('users.update', $user->id) }}"
            class="form-signin border border-secondary m-1 p-2 mb-5 rounded" style="background-color: #c2c1c1"
            method="POST">
            @method('PUT')
            @csrf
            <div class="text-center mb-4">
                <h1 class="h3 mb-3 font-weight-normal">Atualizar dados do usuário {{ $user->name }}</h1>
                <p>Laravel & PHP</p>
            </div>
            <div class="form-label-group row mb-2">
                <!-- nome -->
                <div class="col-md-4">
                    <label for="name" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <!-- cpf -->
                <div class="col-md-4">
                    <label for="cpf" class="form-label">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf">
                </div>
                <!-- rg -->
                <div class="col-4">
                    <label for="rg" class="form-label">RG:</label>
                    <input type="text" class="form-control" id="rg" name="rg">
                </div>
            </div>
            <div class="form-label-group row mb-2">
                <!-- contato -->
                <div class="col-md-4">
                    <label for="contato" class="form-label">Contato:</label>
                    <input type="tel" class="form-control" id="contato" name="contato">
                </div>
                <!-- email -->
                <div class="col-md-4">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <!-- password -->
                <div class="col-md-4">
                    <label for="password" class="form-label">Password:</label>
                    <input type="text" class="form-control" id="password" name="password">
                </div>
            </div>
            <div class="form-label-group row mb-2">
                <!-- cep -->
                <div class="col-md-4">
                    <label for="cep" class="form-label">CEP:</label>
                    <input type="text" class="form-control" id="cep" name="cep">
                </div>
                <!-- bairro -->
                <div class="col-4">
                    <label for="bairro" class="form-label">Bairro:</label>
                    <input type="text" class="form-control" id="bairro" name="bairro">
                </div>
                <!-- logradouro -->
                <div class="col-md-4">
                    <label for="logradouro" class="form-label">Logradouro:</label>
                    <input type="text" class="form-control" id="logradouro" name="logradouro">
                </div>
            </div>
            <div class="form-label-group row mb-2">
                <!-- localidade -->
                <div class="col-6">
                    <label for="localidade" class="form-label">Localidade:</label>
                    <input type="text" class="form-control" id="localidade" name="localidade">
                </div>
                <!-- uf -->
                <div class="col-3">
                    <label for="uf" class="form-label">UF:</label>
                    <input type="text" class="form-control" id="uf" name="uf">
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-4 btn-group" role="group" aria-label="Basic outlined example">
                    <button type="submit" class="btn btn-outline-primary">Atualizar</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>
