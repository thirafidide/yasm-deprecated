# YASM
This is a yet another Slim MVC Framework.
YASM is very simple, let you create quick websites with simple and easy MVC architecture for clean, better, and easier code maintenance.
YASM combine Slim PHP Micro Framework with Laravel's Illumniate Database for Eloquent ORM and Twig for Templating Engine.

## Getting Started

### Configuration 
```bash
# Download composer
curl -s https://getcomposer.org/installer | php

# Install project dependencies
php composer.phar install

# Or
composer install
```

Edit the database configuration in `app/config.php` to match your settings.

Now set your server's document root to the `public/` directory.

### Model
```php
class SomeModel extends Model {
	
	// Use same as Eloquent ORM Model
}
```

### Controller

### View

### Routing

## Credits and Documentation

#### Slim framework
http://docs.slimframework.com

#### Eloquent ORM
http://laravel.com/docs/eloquent

### Slim & Eloquent
https://github.com/kladd/slim-eloquent

#### Twig Template Engine
http://twig.sensiolabs.org/documentation
