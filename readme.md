# Editor.js для Laravel

Преобразует JSON полученный с фронтенда от [Editor.js](https://editorjs.io) в HTML
используя Laravel blade компоненты.

![Cover](/resources/cover.png)


## Установка
Для установки используйте `composer`:

```shell
composer require mahlenko/editor-js-laravel
```

Laravel автоматически подключит пакет `editor-js-laravell`.

## Инструкция
Подключите библиотеку в вашей скрипте, например для модели `Page`:

```php
use Mahlenko\EditorJS\Render;
```

Добавьте в вашу модель метод `getHtmlAttribute()`,
```php
use Mahlenko\EditorJS\Render;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;

class Page extends Model {
    // ...
    
    public function getHtmlAttribute(): View {
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

## ✨ Благодарности

![TonBlockchainLogo](/resources/ton_logo_dark_background.svg#gh-dark-mode-only)
![TonBlockchainLogo](/resources/ton_logo_light_background.svg#gh-light-mode-only)

Вы всегда можете отправить благодарность на чашку кофе или больше 😉 с помощью TON на мой кошелек
`appto-wallet.ton`