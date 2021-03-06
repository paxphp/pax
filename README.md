# PHP Ajax Extension
Please see PAX-Sandbox for info and examples
https://github.com/paxphp/pax-sandbox

## About

PAX provides easy interacting between PHP and AJAX while it reduces at the same time written code in Javascript and improves the way of managing and manipulating DOM elements from the backend in an object oriented style.

Although PAX was inspired by the awesome xajax-project it is using a slightly different approach. PAX is a way more simple but still flexible while it makes use of abstractions and object extensions. With that approach it doesn't offer a plugin technology but makes it fairly easy to give you the power of creating your own Responder. That furthermore lowers the number of code and makes sure you include only code you really need.

## Installation

**via composer**
```
composer require pax/pax:dev-master
```

if you're already using the composer asset plugin you can require below to install the java script 
```
"require" : {
 "bower-asset/jquery-pax": "dev-master"
}
```

**via archive (latest)**

https://github.com/paxphp/pax/archive/master.zip

## Usage

*index.html*
```html
<script type="text/javascript" src="vendor/pax/pax/jquery.pax.js"></script>

<script type="text/javascript">
<!--
	//init pax
	var pax = $(document).pax();
	
	//trigger ajax request to response.php
	$.ajax({url:'response.php', data:{content:'This should be shown in the alert box!'}});
//-->
</script>

```

*response.php*
```php
// when using composer
//require_once "vendor/autoload.php";

// Init the response
$oPAX = new Pax\Response();

// Define actions to perform on the frontend
$oPAX->alert($_GET['content']);

// Send the response back for processing on the front end
$oPAX->answer();
```

## Requirements

Although PAX was developed with below requirements it's fairly easy to amend the code to meet the requirements of your development environment.

* PHP 5.4+
* jQuery 1.7+
* AJAX enabled browser
* 
Enjoy!

## License

PAX is released under "The MIT License" and is free and open source. Please feel free to download, modify and extend the code.
