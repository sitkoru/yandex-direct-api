# PHP-обёртка над API Яндекс.Директ v5

Набор классов для удобной работы с API Яндекс.Директ. 

## Установка

```bash
composer require sitkoru/yandex-direct-api
```

## Использование

1. Необходимо инициировать аннотации. Замените

```php
require __DIR__ . '/vendor/autoload.php';
```

На

```php
$loader = require __DIR__ . '/vendor/autoload.php';
AnnotationRegistry::registerLoader([$loader, 'loadClass']);
```

2. Можно начинать делать вызовы. Например, получим список активный кампаний аккаунта

```php
$directApiService = new DirectApiService("ваш токен", "ваш логин");
$criteria = new CampaignsSelectionCriteria();
$criteria->States = [CampaignStateEnum::ON];
$campaigns = $directApiService->getCampaignsService()->get($criteria, CampaignFieldEnum::getValues());
```