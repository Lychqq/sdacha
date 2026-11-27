# Практические работы по Laravel (задания 11 и 12)

Учебный проект на Laravel с выполненными практическими работами по маршрутизации и контроллерам.

## Выполненные задания

- **Практическая работа №11 — Маршрутизация в Laravel**
  - Настроены маршруты в [`routes/web.php`](routes/web.php) (статические маршруты, обязательные и необязательные параметры, ограничения `whereNumber`, именованные маршруты `home`, `hello`, `posts.show`).
  - Отчет со скриншотами: [`reports/отчет_11.docx`](reports/отчет_11.docx)

- **Практическая работа №12 — Контроллеры в Laravel**
  - Создан контроллер [`app/Http/Controllers/PageController.php`](app/Http/Controllers/PageController.php) с методами `home`, `about`, `show`, `hello`, `comment`, `postShow`.
  - Логика перенесена из замыканий в методы контроллера, маршруты в [`routes/web.php`](routes/web.php) привязаны к `PageController`.
  - Отчет со скриншотами: [`reports/отчет_12.docx`](reports/отчет_12.docx)

## Проверка маршрутов

```bash
php artisan route:list
```
