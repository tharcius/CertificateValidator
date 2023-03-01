# Tarefas:

- Configurar autenticação e autorização no Laravel para permitir o login de administradores.

- Criar as páginas de login, registro e gerenciamento de administradores no painel administrativo.

- Criar uma API para gerenciar os certificados, incluindo as rotas para adicionar, editar e excluir certificados.

- Implementar a rota pública /validate para receber e verificar o código de certificado.

- Configurar a observabilidade usando o ELK stack.
        
- - Escolha uma solução de observabilidade: Existem várias ferramentas disponíveis no mercado, como o Elastic Stack (ELK), Prometheus, Grafana, Datadog, entre outras. Para este caso, vamos utilizar o Elastic Stack (ELK).

- - Instale e configure o Elastic Stack (ELK): O Elastic Stack é composto por três produtos: Elasticsearch, Logstash e Kibana. O Elasticsearch é um mecanismo de busca e análise de dados, o Logstash é responsável por coletar, transformar e enviar dados para o Elasticsearch, e o Kibana é uma interface gráfica para visualizar e explorar dados. Para instalar e configurar o ELK, siga as instruções disponíveis na documentação oficial.

- - Adicione o pacote "monolog/monolog": O Laravel usa o Monolog como biblioteca de registro padrão. Para enviar logs para o Elasticsearch, é necessário adicionar o pacote "monolog/monolog" ao projeto. Para fazer isso, execute o seguinte comando no terminal: composer require monolog/monolog

- - Configure o Monolog para enviar logs para o Elasticsearch: Para enviar logs para o Elasticsearch, é necessário adicionar um novo manipulador de registro (handler) no arquivo de configuração do Monolog. Crie um novo arquivo chamado "elasticstack.php" em "config/logging"


- Configurar o ambiente de desenvolvimento usando Docker.

- Configurar o ambiente de produção usando Docker Compose.

- Configurar o processo de implantação contínua usando GitHub Actions ou outro serviço semelhante.
