# aprender-graphql-lumen



php artisan make:graphql:type FooType 
php artisan make:graphql:query FooQueryi 
php artisan make:graphql:mutation FooMutationi 

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