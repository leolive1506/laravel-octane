- Install octana
```shell
composer require laravel/octane
php artisan octane:install
```

- Instalar a extensão Swoole PHP
    - [Github](https://github.com/swoole/swoole-docs/blob/master/get-started/installation.md)
```shell
sudo pecl install swoole
# Pgts feitas na instalação marcadas como não, até o momento sem problemas
# add php.ini
extension=swoole.so
```

- Start app
    -  --watch reiniciar automaticamente o servidor em qualquer alteração de arquivo em seu aplicativo
        - Par usar essa opção, instalar chokidar
```shell
npm install --save-dev chokidar &&
php artisan octane:start --watch
```

- Executar operações simultaneamente
```php
[$users, $servers] = Octane::concurrently([
    fn () => User::all(),
    fn () => Server::all(),
]);
```

- Executar uma operação a cada x tempo
    - Em AppServiceProvider boot
    ```php
    Octane::tick('simple-ticker', fn () => \Log::debug('Ticking...'))
        ->seconds(10);
    ```

# Config clound google

```shell
composer require google/cloud
```
