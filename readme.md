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

## Пример использования

Используйте Blade directive `@editorJs`, чтобы показать контент созданный используя Editor.js  

```bladehtml
@editorJs($page->body)
```

Для использования в коде:
```php
echo \Mahlenko\EditorJS\Render::make($page->body);
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