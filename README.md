# reglistener

### Description
Package of project listens the user authorization event and send welcome email to registered user email trough job and queue.

### Project setup
  
- Dependencies / Used
    - PHP >= 8.2.0
    - MySql >= 8.0.31
    - Laravel 11
    - Npm 10.4.0
    
- Instalation and initialization on dev environment
    - ``` git clone https://github.com/range396/notification ```
    - ``` composer install ```
    - ``` php artisan migrate ```
    - ``` npm run dev ```
    - ``` php artisan queue:listen --queue=emails```
    
### Package Setup

- Instalation from repository 
    - ``` composer require range396/reglistener ``` 
- Setup Into project
    - add provider ``` Range396\RegListener\RegListenerProvider::class ``` into providers list. Laravel 11 (bootstrap/providers.php), Laravel's (config/app.php) 
    - after ``` composer dump-autoload ``` 

### For Custom setup on different laravel projects

- Should be implemented into package.json of project
    ```
    "repositories": [
            {
                "type": "vcs",
                "url": "https://github.com/range396/reglistener"
            }
        ],     
    ```


