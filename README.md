
  
# Yii advance input  
Using this library, You can add widgets which have, on/off button, label, description, icon and unit.  
  
![help](https://dl.dropboxusercontent.com/s/km0q4rg559n5nz9/help.jpg?dl=0)  
## Widgets  
There are 4 widget. There are common and specific options that widgets can use them that we will see them in future.  
* [Text](#textinput)  
* [Checkbox](#checkbox)  
* [Dropdown](#dropdown)  
* [Textarea](#textarea)  
  
## Text  
This widget will provide a `HTML` `input` tag with `type` of `text`.  
#### usage  
```php  
<?php
echo Text::widget([
    "name" => "test-name"
]);
?>
```  
  
## Checkbox  
This widget will provide a `HTML` `input` tag with `type` of `checkbox`.  
```php  
<?php
echo Checkbox::widget([
    "name" => "test-name"
]);
?>  
```  
  
## Dropdown  
This widget will provide a `HTML` `select` tag.  
This widget needs another required option which is called `items`. The `items` array is a map for `select` `datalist`. In another word, `key` of `array` elements will be `value` of `option` tag and `value` of  `array` elements will be `option` tag `value`. See bellow:  
```php  
<?php
echo Dropdown::widget([
    "name"  => "test-name",
    "items" => [
        "option1" => "value1",
        "option2" => "value2"
    ]
]);
?>
```  
will produce:  
```html  
<select id="test-name" name="test-name">
    <option value="option1">value1</option>
    <option value="option2">value2</option>
</select>  
```  
  
## Textarea  
This widget will provide a `HTML` `textarea` tag.  
```php  
<?php  
echo Textarea::widget([  
  "name" => "test-name"  
]);  
?>
```  
  
## General options list  
Main common options that all widgets can use is listed below.  
* [name](#name)  
* [icon](#icon)  
* [unit](#unit)  
* [checkbox](#checkbox)  
* [lablel](#label)  
* [description](#description)  
* [wrapperOptions](#wrapper-options)  
* [inputOptions](#input-options)  
* [checkboxOptions](#checkbox-options)  
* [model and form](#model-and-form)
* [rtl](#rtl)
  
## Dropdown options  
  
* [items](#items)  
  
## Options  
  
### name  
The main name of input which will place into *`name`* attribute of input.  
  
###### PHP  
```php  
<?php  
echo Text::widget([  
  "name" => "test-name"  
]);  
?>
```  
  
###### Preview  
![Just input](https://dl.dropboxusercontent.com/s/2vbkx5v44p617qi/just-input.jpg)  
___  
  
### icon  
optional  
The icon class which will appear in a box right before input. This is a *`class`* attribute which will add to a *`i`* element.  
  
##### PHP  
```php  
<?php  
echo Text::widget([  
  "name" => "test-name",  
  "icon" => "fas fa-key"  
]);  
?>
```  
    
##### Preview  
![Input with icon](https://dl.dropboxusercontent.com/s/rl6s5n3x0w2mdc5/input-with-icon.jpg)  
___  
  
### unit  
Every input will accept specific values. Using this option, a unit box will append to input.  
  
##### PHP  
```php  
<?php  
echo Text::widget([  
  "name" => "test-name",  
  "icon" => "fas fa-key",  
  "unit" => "$"  
]);  
?>
```  
  
##### Preview  
![with unit](https://dl.dropboxusercontent.com/s/pkcncsi4f6o0jar/with-unit.jpg)  
___  
  
### checkbox  
Using this option, you provide an option which allows users to not filling input. If checkbox is not checked, an `disabled` attribute will add to `input`.  
  
    
***Notice***  
`unit` options will not work on this type of widget.

##### PHP  
```php  
<?php
echo Text::widget([
    "name"     => "test-name",
    "icon"     => "fas fa-key",
    "unit"     => "$",
    "checkbox" => true
]);
?>
```  
  
##### Preview  
![with checkbox](https://dl.dropboxusercontent.com/s/doomg3e39s9fzci/with-checkbox.jpg)  
___  
  
### label  
A label for input.  
  
##### PHP  
```php  
<?php
echo Text::widget([
    "name"     => "test-name",
    "icon"     => "fas fa-key",
    "unit"     => "$",
    "checkbox" => true,
    "label"    => "Price"
]);
?>
```  
    
##### Preview  
![with label](https://dl.dropboxusercontent.com/s/pn69aq26bxoagjq/with-label.jpg)  
___  
  
### description  
If you want to describe what the field is for, you can use this option. Using this option, an `div` will add after label.  
  
##### PHP  
```php  
<?php
echo Text::widget([
    "name"        => "test-name",
    "icon"        => "fas fa-key",
    "unit"        => "$",
    "checkbox"    => true,
    "label"       => "Price",
    "description" => "How much does it cost?"
]);
?>
```  
  
##### Preview  
![with description](https://dl.dropboxusercontent.com/s/c7lb1ceivwzg308/with-description.jpg)  
___  
  
### wrapperOptions  
A map of attributes and their values for wrapper.  
  
##### PHP  
```php  
<?php
echo Text::widget([
    "name"           => "test-name",
    "icon"           => "fas fa-key",
    "unit"           => "$",
    "checkbox"       => true,
    "label"          => "Price",
    "description"    => "How much does it cost?",
    "wrapperOptions" => ["style" => "border: 2px dashed red; padding : 10px;"]
]);
?>
```  
  
##### Preview  
![with wrapperOptions](https://dl.dropboxusercontent.com/s/o6d0w8y6ctutxi0/with-wrapper-option.jpg)  
___  
  
### inputOptions  
A map of attributes and their values for input.  
  
##### PHP  
```php  
<?php
echo Text::widget([
    "name"           => "test-name",
    "icon"           => "fas fa-key",
    "unit"           => "$",
    "checkbox"       => true,
    "label"          => "Price",
    "description"    => "How much does it cost?",
    "wrapperOptions" => ["style" => "border: 2px dashed red; padding : 10px;"],
    "inputOptions"   => ["style" => "border: 2px dashed green; background: yellow;"]
]);
?>  
```  

##### Preview  
![with inputOptions](https://dl.dropboxusercontent.com/s/rxk4fcmx4rkq1n7/with-input-options.jpg)      
___

### checkboxOptions  
A map of attributes and their values for checkbox input.  
  
***Notice***  
Checkbox use bootstrap toggle. All options of **Bootstrap Toggle** is supported. Visit [Bootstrap Toggle](http://www.bootstraptoggle.com/).  
  
##### PHP  
```php  
<?php
echo Text::widget([
    "name"            => "test-name",
    "icon"            => "fas fa-key",
    "unit"            => "$",
    "checkbox"        => true,
    "label"           => "Price",
    "description"     => "How much does it cost?",
    "checkboxOptions" => ["data-on" => "enabled", "data-off" => "disabled"]
]);
?>  
```  
  
##### Preview  
![with checkboxOptions](https://dl.dropboxusercontent.com/s/rvxhwijqkgdg8f1/with-checkboxOptions.jpg)
___

### model and form
These widgets can also receive `Yii2` `models`. By passing your `model` into this option, elements will generate using `form` option that you provided. `form` option must be an instance of  `ActiveForm` of `Yii2`. For more information visit: [ActiveForm](https://www.yiiframework.com/doc/api/2.0/yii-widgets-activeform)

***Notice***
By using `model` option, `label` will generate automatically. It use `attributeLabel` of `property` of `model`. If there is no label, label box will not generate. Also to prevent of label generation even if `attributeLabel` in model exists, set `label` option to `false`.

##### PHP  
```php
<?php
$form = ActiveForm::begin();
$user = new User();
$user->username = "john.smith";
echo Text::widget([
    "name"  => "username",
    "icon"  => "fas fa-user",
    "model" => $user,
    "form"  => $form
]);
?>
```  
  
##### Preview  
![With model](https://dl.dropboxusercontent.com/s/b64zlwo5juev5l8/with-model.jpg)
___

### rtl
This widgets, also support `rtl` pages. To use these as a `rtl` `widget`, just set `rtl` option `true`;

##### PHP  
```php
<?php
echo Text::widget([
    "name"            => "test-name",
    "icon"            => "fas fa-key",
    "unit"            => "$",
    "checkbox"        => true,
    "label"           => "Price",
    "description"     => "How much does it cost?",
    "checkboxOptions" => ["data-on" => "enabled", "data-off" => "disabled"],
    "rtl"             => true
]);
?>
```  
  
##### Preview  
![With model](https://dl.dropboxusercontent.com/s/b64zlwo5juev5l8/with-model.jpg)
___

### items  
The `items` array is a map for `select` `datalist`. In another word, `key` of `array` elements will be `value` of `option` tag and `value` of  `array` elements will be `option` tag `value`  
  
***Notice***  
Checkbox use bootstrap toggle. All options of **Bootstrap Toggle** is supported. Visit [Bootstrap Toggle](http://www.bootstraptoggle.com/).  
  
##### PHP  
```php  
<?php
echo Dropdown::widget([
    "name"            => "test-name",
    "icon"            => "fas fa-key",
    "unit"            => "$",
    "checkbox"        => true,
    "label"           => "Price",
    "description"     => "How much does it cost?",
    "checkboxOptions" => ["data-on" => "enabled", "data-off" => "disabled"],
    "items"           => ["option1" => "value1", "option2" => "value2"]
]);
?>  
```  
  
##### Preview  
![Right to left](https://dl.dropboxusercontent.com/s/lybrzh1oe49cc81/with-rtl.jpg)
