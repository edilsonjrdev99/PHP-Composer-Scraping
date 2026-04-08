# Buscador de cursos da Alura

### Como iniciar o composer no projeto

- composer init
- responder quem está (distribuindo/nome-do-pacote)
- colocar descrição
- responder quem é o autor(es)
- se quer pacote em fase de teste ou estáveis (ex: stable, dev)
- tipo de pacote (geralmente library)
- tipo de licença (ex: mit)

### Entendendo o arquivo composer.json

- `name` é o nome do pacote (vendor/nome)
- `description` descrição do pacote
- `type` tipo do pacote (library, project)
- `autoload` configuração de carregamento automático de classes
- `authors` autor/autores do pacote
- `require` dependências do pacote

```json
{
    "name": "junin/buscador-curso-alura",
    "description": "Projeto teste referente a aula sobre composer da Alura, lib para buscar os cursos de PHP da alura",
    "type": "library",
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    },
    "authors": [
        {
            "name": "edilson junior",
            "email": "edilsonjrdev99@gmail.com"
        }
    ],
    "require": {}
}

```

### Onde buscar dependências

***Atenção***: O `Packagist` é o repositório padrão para buscar dependências para o composer, mas podemos configurar ele para buscar do `github`

Basta acessar: [Packagist](https://packagist.org/)

### O que acontece quando instalamos uma dependência

O composer vai no `Packagist`, vai verificar se o pacote existe, se existir no pacote tem a definição do código fonte, que é de onde ele vai buscar o código, por padrão ele busca do `github`

### Diferença entre comandos

- `composer require pacote` Isso adiciona o pacote na dependência do `composer.json`, instala o pacote e atualiza o `composer.lock` também

- `composer update pacote` Isso vai atualizar o pacote já existente nas dependências do `composer.json`, respeitendo suas restrições `ex: "guzzlehttp/guzzle": "^7.10", vai baixar somente versão acima de 7.10` e atualizar também no `composer.lock`, ***é importante não usar apenas composer update***, isso vai atualizar todas as dependências e causar erro no projeto