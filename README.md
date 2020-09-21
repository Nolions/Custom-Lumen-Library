# Custom Lumen Library

## Creator Package

建立套件資料夾

在lumen/laravel專案下建立以下目錄/packages/<vander>/<package Name>/src

`/packages/<vander>/<package Name>` 為套件跟目錄，也是做版本控制用目錄

`/packages/<vander>/<package Name>/src` 所有套件程式碼放置於此目錄下

composer init

透過`composer init`指令產生composer.json檔案

產生`composer.json`內容如下：

```
{
    "name": "vendor/package_name",
    "description": "package describe",
    "authors": [
        {
            "name": "author name",
            "email": "authors mail"
        }
    ],
    "minimum-stability": "dev",
    "require": {}
}
```

## use

在要使用該套件目錄下的`composer.json`中新增 PSR-4 autoload程式碼

```
...
"autoload": {
    ...
    "psr-4": {
        "App\\": "app/",
        "<Vendor>\\<Package_Name>\\": "<package path on local>"
    }
},
...
```

> 如果Package有`ServiceProvider`，則需要差專案目錄下的`bootstrap\app.php`中註冊Package的ServiceProvider

ex:

```
...
$app->register(<Vendor>\<Package_Name>\<Your_ServiceProvider::class>);
...
```

## REFERENCE

[How to create a Laravel Package](https://devdojo.com/devdojo/how-to-create-a-laravel-package)
