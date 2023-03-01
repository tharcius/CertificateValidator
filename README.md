<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre o projeto
Sisitema simples para fazer a validação online de certificados emitidos por qualquer curso livre.


## Responsabilidades

### Rodando o projeto
Caso for a primera execução, execute o comando:
```shell
docker-compose up -d --build
```

Se ja tiver executado o projeto antes, execute o comando:
```shell
docker-compose up -d
```

### Testes/QA

Para rodar os testes:

```shell
docker exec -it certval.laravel php artisan test
```

### Roadmap
- Idealização do projeto e desenho do diagrama de banco de dados.
- Preparando o ambiente de desenvolvimento instalando plugins uteis:
Artisan Pint, PHPInsights.
- Refatoração do diagrama de banco de dados.
- Criação das migrations, models, factories e testes de banco de dados.
- Criação do ambiente Docker para fazer o deploy tendo como servidor web NGINX e utilizando tanto o MariaDB quanto o Postgres para testes.
- Criação do CRUD de Cursos.
- Criação dos testes, rotas, request form, resource para o CRUD de Cursos.
- Ajustes na migration de Cursos.
- Criação dos testes, rotas, request form, resource para o CRUD de Escolas.
- Implementando o OpenAPI para fazer a documentação da API utilizando o https://github.com/rakutentech/laravel-request-docs.
- Implementando camada de repositórios em Cursos e Escolas.
- Implementando Estudantes com repositories.
- Algumas correções no projeto e nos testes automatizados.
- Implementando Certificados com repositories.
- Refatorando e limpando as classes
- Melhorando o README e criando novos artefatos de docs

### TODO
- Criar testes completos para o banco de dados.
- Implementar o auth no projeto.
- Criar uma rota pública de validação de certificados
- Criar uma rota para a impressão de certificados
- Implementar uma camada de observalidade no projeto
- Implementar CI/CD no projeto

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
