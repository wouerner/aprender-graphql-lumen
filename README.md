# Aprender GraphQL + Lumen Micro Framework
## Objetivo

Este projeto tem como objetivo criar um passo-a-passo de como usar GraphQL + Lumen

## Pré-requisito
 * PHP nivel básico
 * Ter usado algum framework (Ruby on Rails, Django ou Lumen)
 * Docker/Docker Compose nivel basico

## Instalação
Dependencias:
 * Linux (não fiz testes em outros ambientes.(OSX e Windows)
 * git
 * Composer 
 * Docker
 * Docker-compose

```sh
git clone https://github.com/wouerner/aprender-graphql-lumen.git # metodo https, prefira ssh
cd ~/caminho/aprender-graphql-lumen
php composer.phar install -vvv # mode de debug ativado, sempre e bom ver o que esta acontecento.
cp .env.example .env # arquivo de configuração
cd docker/
docker-compose up

```

Acesse a URL gerado pelo container, como por exemplo: http://172.19.0.2 (pode variar de acordo com os container docker que usa.)  
Você deve ver a versão do Lumen em questão.  
Acesse: http://[ip]/graphiql  --> plugin para fazer consultas em graphql.  

Exemplos de consultas(querys):
```graphql
{
  pais(id: 1) {
    nome
    regioes(id: 2) {
      nome
      comidas {
        nome
      }
    }
  }
}
```

Exemplo de modificaçes(mutation):

```graphql
mutation {
  createPais (
  nome: "Chile"
  ) {
    id
  }
}

```
Esse projeto usou esses comando para gerar os arquivos:

```sh
php artisan make:graphql:type FooType  
php artisan make:graphql:query FooQuery  
php artisan make:graphql:mutation FooMutation  
```

Profundamente inspirado nesse video:
https://www.youtube.com/watch?v=KaxB8wPeTkI

Link uteis para estudos:  
https://github.com/chentsulin/awesome-graphql
