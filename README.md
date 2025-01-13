
## Установка

1. composer require laravel/sail --dev
2. php artisan sail:install 
3. npm install 
4. переключиться на консоль ubuntu(WSL)
5. ./vendor/bin/sail up -d
6. ./vendor/bin/sail artisan key:generate

### Чтобы вместо ./vendor/bin/sail писать просто sail (всегда)

1. В терминале Ubuntu :
```nano ~/.bash_profile```
2. Вставляем туда следущий скрипт :
```if [ -r ~/.bashrc ]; then source ~/.bashrc fi```
3. Снова в терминале Ubuntu :
```nano ~/.bashrc```
4. Вставляем туда следущий скрипт :
```alias sail='bash vendor/bin/sail'```

### Чтобы вместо ./vendor/bin/sail писать просто sail (до выключения контейнера)
```alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'```


