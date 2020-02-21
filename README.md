[![Latest Stable Version](https://poser.pugx.org/nickdekruijk/taggable/v/stable)](https://packagist.org/packages/nickdekruijk/taggable)
[![Latest Unstable Version](https://poser.pugx.org/nickdekruijk/taggable/v/unstable)](https://packagist.org/packages/nickdekruijk/taggable)
[![Monthly Downloads](https://poser.pugx.org/nickdekruijk/taggable/d/monthly)](https://packagist.org/packages/nickdekruijk/taggable)
[![Total Downloads](https://poser.pugx.org/nickdekruijk/taggable/downloads)](https://packagist.org/packages/nickdekruijk/taggable)
[![License](https://poser.pugx.org/nickdekruijk/taggable/license)](https://packagist.org/packages/nickdekruijk/taggable)

# Taggable
Make your Laravel models taggable

## Installation
`composer require nickdekruijk/taggable`

### Config
If you don't like the default configuration edit `config/taggable.php` after publishing the config file with:
```bash
php artisan vendor:publish --tag=config --provider="NickDeKruijk\Taggable\ServiceProvider"
```

### Run migration
Then run the migration
```bash
php artisan migrate
```

## Usage
Add the Taggable trait to your model:
```php
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use NickDeKruijk\Taggable\Taggable;

class Product extends Model
{
    use Taggable;
```

## License
Admin is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
