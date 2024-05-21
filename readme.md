# Editor.js для Laravel

Преобразует JSON полученный с фронтенда от [Editor.js](https://editorjs.io) в HTML
используя Laravel blade компоненты.

## Установка
Для установки используйте `composer`:

```shell
composer required mahlenko/editorjs-laravel
```

Laravel автоматически подключит пакет `editorjs-laravel`.

## Инструкция
Подключите библиотеку в вашей скрипте, например для модели `Page`:

```php
use Mahlenko\EditorJS\Render;
```

Добавьте в вашу модель метод `getHtmlAttribute()`,
```php
use Mahlenko\EditorJS\Render;
use Illuminate\Database\Eloquent\Model;

class Page extends Model {
    // ...
    
    public function getHtmlAttribute(): string {
        return Render::make($this->body);
    }
}
```

## Пример использования
```php
    $page = \App\Model\Page::findOrFail(1);
    
    return view('{your_template}')
        ->with('body', $page->html);
```

## Ручная установка

Для Laravel выше 11 версии, добавьте в `bootstrap/providers.php`
провайдер:
```php
<?php

return [
    App\Providers\AppServiceProvider::class,
    // other packages ...
    
    \Mahlenko\EditorJS\Kernel::class, // <- append row
];
```

Для Laravel ниже 11 версии, добавьте в файл `config/app.php`:
```php
/*
 * Application Service Providers...
 */
 
// other packages ...

\Mahlenko\EditorJS\Kernel::class, // <- append row
```

## Настройка
Вы можете изменить отображение элементов, или добавить собственные типы,
после публикации ресурсов:

```bash
php artisan vendor:publish --tag=editor.js
```

При использовании `Laravel Sail`

```bash
./vendor/bin/sail artisan vendor:publish --tag=editor.js
```
