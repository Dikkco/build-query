<h1 align="center"> build query </h1>
<p align="center">:rainbow: use for build query.</p>

[![Total Downloads](https://poser.pugx.org/dikkco/build-query/downloads)](https://packagist.org/packages/dikkco/build-query)
[![GitHub (pre-)release](https://img.shields.io/github/release/dikkco/build-query/all.svg)](https://github.com/dikkco/build-query)

## Environment

- PHP >= 7.1

## Installation

```shell script
$ composer require dikkco/build-query
```

## QuickStart

1. Common filter

```php
use Dikkco\Buildable\Constant;
use Dikkco\Buildable\Buildable;

$this->param($params ?? [])
    ->initial(['initial' => 0])
    ->key('avatar')
    ->key('name', Constant::RIGHT)
    ->key('name', Constant::ALL)
    ->inKey('type')
    ->betweenKey('created_at', ['start' => 'create', 'end' => 'end'])
    ->beforeKey('id')
    ->afterKey('id')
    ->unsetKey('initial')
    ->sort('created_at')
    ->result();
```

2. Get order

```php
use Dikkco\Buildable\Buildable;

$order = $this
   ->param(array_merge(['update_time' => 'desc'], $params)) //默认更新时间排序
   ->sort(['update_time', 'a.update_time']) //更新时间
   ->sort(['id', 'a.id']) //ID
   ->sort('create_time')
   ->order();
```
