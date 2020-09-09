# Backend

## Project setup
```
composer install
```

## Configurar o env
- renomear o arquivo .env.example para .env

## Criar o banco
```sql
CREATE DATABASE quiznaf;
```

## Popular o banco
```
php artisan migrate --seed
```

### Runs for development
```
php artisan serve
```