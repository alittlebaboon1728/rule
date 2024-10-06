# 使用 PHP-Apache 基础镜像
FROM php:7.4-apache

# 安装 MySQL 扩展
RUN docker-php-ext-install mysqli pdo pdo_mysql

# 将你的项目文件复制到容器中的 Apache 目录
COPY . /var/www/html/

# 设置 Apache 权限，确保正确访问项目文件
RUN chown -R www-data:www-data /var/www/html/ \
    && a2enmod rewrite

# 暴露80端口
EXPOSE 80
