# PHP-обёртка над API Яндекс.Директ v5

Набор классов для удобной работы с [API Яндекс.Директ](https://tech.yandex.ru/direct/doc/dg/concepts/about-docpage/). 

## Установка

```bash
composer require sitkoru/yandex-direct-api
```

## Использование

### Подготовка

Необходимо инициировать аннотации. Замените

```php
require __DIR__ . '/vendor/autoload.php';
```

На

```php
$loader = require __DIR__ . '/vendor/autoload.php';
AnnotationRegistry::registerLoader([$loader, 'loadClass']);
```

### Первый вызов

Для примера, получим список активных кампаний аккаунта 

```php
$directApiService = new DirectApiService("ваш токен", "ваш логин");
$criteria = new CampaignsSelectionCriteria();
$criteria->States = [CampaignStateEnum::ON];
$campaigns = $directApiService->getCampaignsService()->get($criteria, CampaignFieldEnum::getValues());
```