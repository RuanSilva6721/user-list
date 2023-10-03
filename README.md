# UserList

Teste em Laravel.

```bash
php: 7.4
laravel: 10
```


## Iniciando

Clone o projeto, usando o comando abaixo (usando HTTPS):

```bash

git clone https://github.com/RuanSilva6721/user-list.git
```



Depois de clonar, acesse o repositório e instale as dependências com os comandos abaixo (para isso, utilize o [Composer](https://getcomposer.org/) ):

```bash

cd api-appliance
composer install
```



Após instalar as dependências, duplique o arquivo `.env.example` e renomeie um deles para `.env`.

Gere uma nova chave da aplicação:

```bash

php artisan key:generate
```


Inicie o servidor da aplicação com o comando:

```bash

php artisan serve
```


Para ver o projeto em execução, acesse [http://localhost:8000](http://localhost:8000/) .



**Caso queira rodar em Docker, utilize o comando:** 

Inicie o Docker em sua máquina e depois execute para subir o container da aplicação:

```bash

cd docker-compose up -d
```

Veja se o container da aplicação está de pé:

```bash

docker ps
```
Caso não, execute:

```bash

docker-compose restart
```

Para ver o projeto em execução, acesse [http://localhost:9003](http://localhost:9003/) .



Para acessar o container da aplicação, execute:

```bash

docker-compose exec -it [container da aplicação] bash
```

## Construído com 
- [Laravel](https://laravel.com/)
