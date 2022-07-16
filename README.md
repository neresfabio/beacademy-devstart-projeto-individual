# Projeto Individual Com Laravel

O Laravel que é o framework PHP e open-souce criado por Taylor B. Otwell para desenvolvimento de sistemas Web. Totalmente FREE!

<details>
    <summary>
        Criar um CRUD em PHP, utilizando Laravel
    </summary>
<hr>

## CRUD (Create, Read, Update, Delete) é um acrônimo para as maneiras de se operar em informação armazenada.

Quando falamos de Darta Base, a primeria coisa que vem a mente é que iremos usar algum framework para criarmos nosso banco e suas tabelas, que iremos ter que fazer tudo a mão, digitando os primeiros comandos e ou tudo do gênero que envolve a manipulação do banco de dados.

Para quem é inicante já pensa, "mas não sei nada sobre banco de dados, vou ter que estudar como fazer para depois voltar a usar o Laravel?".

O Laravel nos ajuda em quase tudo, quando se trata de banco de dados, umas das coisa que precisamos para começar é definir qual framework iremos tratar ou visualizar nosso banco quando for criado.

Neste projeto faço uso do MySQL Workbench.

## Frameworks

- VScode-IDE
- MySQL Workbench
- Laravel
- PHP-8.1
- composer
- SO-Ubuntu 21.10

Criando o projeto Laravel usando o terminal integrado do VSCode.
```bash
composer create-project laravel/laravel crud-app
```
Se tudo ocorreu bem na instalação o projeto deverá abrir no navegador. Para isso deve está dentro do diretorio do projeto criado "crud-app".
```bash
php artisan serve
```
![Tela de bem vindo do Laravel](image/interfaceLaravel.png)

</details>
<br>
<details>
    <summary>
        Utilizar o banco de dados Mysql para criar uma tabela - de sua preferência, com 10 atributos
    </summary>
<hr>

## Tabela

| user         | Description   |
| -----------  | -----------   |
| name         | Taina         |
| phone        | 11-00000000   |
| cpf          | 12345678900   |
| age          | 27            |
| rg           | 1001001       |
| email        | taina@mail.com|
| sex          | feminino      |
| civil_status | solteira      |
| postal_code  | 68000123      |
| profession   | estudante     |
<hr>
 
## Migrations

Segundo a documentação do Laravel:
>As migrações são como controle de versão para seu banco de dados, permitindo que sua equipe defina e compartilhe a definição do esquema de banco de dados do aplicativo. Se você já teve que dizer a um colega de equipe para adicionar manualmente uma coluna ao esquema de banco de dados local depois de obter suas alterações do controle de origem, você enfrentou o problema que as migrações de banco de dados resolvem.

Para dar start na criação do banco precisamos primeiramente fazer as configurações nescessárias.

- Ter um SGBD
- Saber sua credencial de acesso ao banco como nome_usuario e senha

Com o Workbench crio a minha base dados para guardar minha informações que viram do APP.

```sql
CREATE DATABASE myBank;
```
Precisamos somente de ter o banco criado, os proximos passos como criação de tabelas será feito atraves do Laravel.

**Arquivo .env**
Por padrão no laravel já vem pré configurado para fazer nosso app se comunicar com o banco, apenas será nescessário passar nossa credêncial de acesso ao banco.

```laravel
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= "nome_do_banco"
DB_USERNAME= "nome_usuario"
DB_PASSWORD= "senha_de_acesso"
```
Com os campos devidamente preenchido, o Laravel tera acesso ao banco.

Perceba que o Laravel como citado antes nos ajuda bastante no desenvolvimento pois é um framework que ajuda o desenvolvedor a se dedicar apenas com o modelo de negócio.

Na raiz do projeto existe um diretório que é bem sugestivo /database, esse diretorió ou repositorio é onde esta as ferramentas que nescessitamos para digamos gerenciar os dados.

Abrindo o /database encontamos outros diretorios e para esse momento temos o /migrations com outros arquivos.

**2014_10_12_000000_create_users_table.php** esse arquivo tambem é bastante sujestivo ele cria a tabela usuarios em nosso banco simples e fácil. 

Basta rodarmos o seguinte comando no terminal do VSCode:

```bash
php artisan migrate
```
Após o comando, como temos outros arquivos ele criara tambem outras tabelas em nosso banco:
```bash
Migration table created successfully.
Migrating: 2014_10_12_000000_create_users_table <---
Migrated:  2014_10_12_000000_create_users_table (2,163.51ms)
Migrating: 2014_10_12_100000_create_password_resets_table
Migrated:  2014_10_12_100000_create_password_resets_table (1,787.09ms)
Migrating: 2019_08_19_000000_create_failed_jobs_table
Migrated:  2019_08_19_000000_create_failed_jobs_table (2,010.34ms)
Migrating: 2019_12_14_000001_create_personal_access_tokens_table
Migrated:  2019_12_14_000001_create_personal_access_tokens_table (2,644.20ms)
```
![Tabelas criadas](/image/tabelas_criadas.png)

Veja que maneiro, o Laravel se encarregou de criar as primeiras tabelas com suas colunas padronizadas para começarmos a dar os primeiros passos na manipulação.

Mas ai vem uma pergunta, como preenchemos a tabela?, para quem já conhece como trabalhar com banco de dados poderia fazer tudo na mão, mas para os iniciantes o framework ja vem com funcionalidades que nos ajudam a praticar o desenvolvimento até pegarmos a pratica, pensando nisto e respondendo a pergunta ele tambem já pensou nisso.

## Seeders

Para nos ajudar a ser mais produtivo para ter um dominio sobre a ferramenta, temos como tambem popular as tabelas.

**/database/seeders** ao acessar essa rota na raiz do projeto, temos o arquivo que cria dados fakes para popular o banco, assim facilitando nosso estudo sobre a ferramenta.

No arquivo DatabaseSeeder.php terá uma class com o seu conteudo comentado é só descomentar e rodar o comando:

```laravel
   public function run()
    {
       // \App\Models\User::factory(10)->create();

      //  \App\Models\User::factory()->create([
      //      'name' => 'Test User',
      //      'email' => 'test@example.com',
        ]);
    }
```
Comando:

```bash
php artisan db:seed
```
![Tela dos dados fake criado](/image/insert_dados_fake.png)

**Esses passos foram essências até aqui pois podemos confirmar que nossa aplicação está se comunicando com nosso banco de dados que está hospedado em nossa maquina local.** 

Para dar continuidade, precisamos visualizar em nosso projeto como os dados estão armazenados em nosso banco para isso criamos uma pagina web para melhor visualizar e podemos alterar de forma mais compreencivel.

## Controller, Routers e View

Para termos certeza que nosso APP está conversando com o banco vamos fazer um teste mostrando os dados em uma pagina web.

Na View criamos nossa rota para chamar a nossa página web. Na raiz do projeto /routes encontraremos o nosso arquivo **web.php**, nele criamos uma rota:

```php
Router::get('/users',[UserController::class,'index'])->name('users.index');
```
## Contrroller
O Laravel Controller é onde manipulamos a lógica de tratamento das requisições recebendo os dados do model e transmitindo-os para a view.

Veja que ao definirmos um *UserController* ele ainda não existe em nosso projeto para isso precisamos crialo atraves da linha de comando:

```bash
php artisan make:controller **U**ser**C**ontroller
```
Sempre criamos usando os padroes do Laravel primeira letra maiuscula das palavras compostas.

Para saber se ela foi criada você tera uma mensagem como esta em seu terminal apos rodar o comando:

```bash
Controller created successfully.
```
Tambem pode navegar pela raiz do projeto /app/Http/Controllers nesse diretorio você verá seu controller criado.

Agora na view.php basta selecionar *UserController* em seu teclado **Ctrl + espaço** que ele importar automaticamente para a view.

## UserController.php

**Teste**

Vamos testar se conseguimos ter acesso aos dados via Laravel.

Com o rota criada na **/View/web.php** Route::get('/users',[UserController::class,'index'])->name('user.index'); e com o o controlador tambem criado app/Http/Controllers/UserController.php vamos fazer nosso primeiro teste.

Crinado essa função podemos visualizar os dados na do nosso banco de dados na web.

```php
    public function index()
    {
        $users = User::all();

        dd($users);
    }
```
Basta adiciona-la na nossa Controller criada.

![Testando UserController](/image/teste_01.png)

Esse pequeno codigo ou função, armazena em uma variavel **$users** o retorno do **User** ou seja da chamada de todos os usuários listados em nosso banco e é mostrado em tela o array criado na variavel atraves do *dd($users);*.

![Resultado na tela.](/image/resultado_01.png)

Agora que os dados estão chegando na Controller, podemos criar um layout para aprensentar melhor esses dados.





</details>
<br>
<details>
    <summary>
        O sistema deverá possuir autenticação
    </summary>

</details>
<br>
<details>
    <summary>
        O CRUD deve conter os métodos de Insert, Update, Delete e Read dessa tabela
    </summary>
</details>
<br>
<details>
    <summary>
        As ações deverão ser realizadas através de uma página web, portanto o sistema deverá conter um frontend que se comunique com o backend
    </summary>
</details>
<br>
<details>
    <summary>
        A solução deve ter pelo menos 30% de testes unitários 
    </summary>
</details>
<br>
<details>
    <summary>
        O projeto deverá ser armazenado no repositório do github
    </summary>
</details>
<br>

## Um quadro de empregos

Uma breve descrição sobre o que esse projeto faz e para quem ele é

Qualquer projeto que te force a permitir que as pessoas usuárias insiram como vários tipos de usuários, adiciona um aspecto interessante do design.

Como você garantirá que a maneira como os/as empregadores/as utilizam o site atenda às suas necessidades em relação à prospecção de empregos?

Como a maioria dos outros projetos, você não precisa se concentrar em tudo de uma só vez. Comece tentando criar a capacidade de criar um anúncio de emprego.

Então, você pode se concentrar nas pessoas que buscam emprego e em como elas respondem.

Habilidades: banco de dados, desenvolvimento web e programação geral.
