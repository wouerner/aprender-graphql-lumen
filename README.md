# aprender-graphql-lumen



php artisan make:graphql:type FooType
php artisan make:graphql:query FooQuery
php artisan make:graphql:mutation FooMutation

```graphql
{
  carro(id: 1) {
    id
    nome
    modelo
  }
}
```
```graphql
mutation{
  createCarro(
    id: 1
    nome: "teste"
  ) {
    nome
  }
}
```