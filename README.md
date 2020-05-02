# Что такое FormGenerator?
Это моя тренировка ООП :) но при этом вы можете его использовать для своих целей.


## Создание Form
```php
    Form::open(['method'=>'POST'])
    ** тут ваш код **
    Form::close();
```
## Создание Input
```php
    Form::input(['type'=>'text'])
    ** <input type="text"> **
    Form::submit(['class'=>'bg-red rounded'])
    ** <input type="submit" class="bg-red rounded"> **
```
** И так далее. Полный список Input ниже **
## Типы Input
  - input
  - submit
  - password
  - textarea
