oppein
======
oppein obs

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist oppeincn/yii2-obs-sdk "*"
```

or add

```
"oppeincn/yii2-obs-sdk": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

       'obssdk' => [
            'class' => 'oppeincn\obssdk\ObsSdk',
            'key' => 'xxx',
            'secret' => 'xxx',
            'endpoint' => 'xxxx'
        ],
