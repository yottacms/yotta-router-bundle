# YottaCMS Router Bundle
Сделайте работу с Symfony Router более простой. Достаточно создать абстрактный и закрытый сервис Router и указать в нем путь к своему файлику с routing.yml

## Installation
```Bash
composer require yottacms/yotta-router-bundle
```
```PHP    
// app/AppKernel.php
use YottaCms\Framework\Component\HttpKernel\Kernel;
// ...

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...
            \YottaCms\Bundle\YottaRouterBundle\YottaRouterBundle::class
        );
        // ...
    }
    // ...
}
```

## Usage
```YAML
# @YourBundle/Resources/config/services.yml
yourbundle.service_router_name:
    public: false
    class: Symfony\Component\Routing\Router
    arguments: ['@routing.loader', '@@YourBundle/Resources/config/routing.yml']
    tags: router
    # OR tags: - { name: router, priority: 10 }
```

## Recommendations

Вы можете продолжать использовать стандартный  app/config/routing.yml для своих настроек мартшрутизации. В том числе и переопределение маршрутов, которые будут подключены с помощью данного бандла.
