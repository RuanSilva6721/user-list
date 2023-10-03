# Use uma imagem base do PHP
FROM php:7.4-fpm

# Atualize e instale as dependências
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Define o diretório de trabalho
WORKDIR /var/www/html

# Copia os arquivos do projeto para o contêiner
COPY . /var/www/html

# Instala as dependências do Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Executa o comando 'composer install' para instalar as dependências do projeto
RUN composer install

# Expõe a porta 9003
EXPOSE 9003

CMD bash -c "composer install && php artisan serve --host 0.0.0.0 --port 9003"
