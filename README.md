# 基于docker使用nginx+phpfpm+typecho搭建一个自己博客

## 使用的软件及操作系统

* [CentOS][centos] 7.2 - Linux 操作系统
* [docker][docker] v18.06.1-ce - 容器
* [docker-compose][docker-compose] - 快速定义和运行多个容器
* [docker-nginx][docker-nginx] v1.15.9 - nginx的docker官方镜像
* [docker-mysql][docker-mysql] v5.7.25 - MySQL的docker官方镜像。配置低，就选用这个版本吧
* [docker-php-fpm][docker-php-fpm] v7.3.3 - php的docker官方镜像，php有cli、apache和fpm三个镜像，这里选用fpm
* [typecho][typecho] v1.1(17.10.30) - 基于php的博客系统，比较轻量级
* [acme.sh][acme.sh] - 用来生成 [Let's Encrypt][letsencrypt] 证书

[centos]: https://www.centos.org/
[docker]: https://www.docker.com/
[docker-compose]: https://docs.docker.com/compose/overview/
[docker-nginx]: https://hub.docker.com/_/nginx
[docker-mysql]: https://hub.docker.com/_/mysql
[docker-php-fpm]: https://hub.docker.com/_/php
[typecho]: http://typecho.org/
[acme.sh]: https://github.com/Neilpang/acme.sh
[letsencrypt]: https://letsencrypt.org/