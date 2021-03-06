### Quick Intro
There’s one essential concept that you need to get your mind around
before we proceed further. Unlike CGI scripts, which require you to
write code to output HTML, PHP lets you embed PHP code in regular HTML
pages, and execute the embedded PHP code when the page is requested.

These embedded PHP commands are enclosed within special start and
end tags, like this:

```php
<?php


?>
```



Here’s a simple example that demonstrates how PHP and HTML can be
combined:

```php
<html>

<head></head>

<body>

Agent: So who do you think you are, anyhow?

<br />

<?php

// print output

echo 'Neo: I am Neo, but my people call me The One.';

</body>

</html>

?>
```



Not quite your traditional “Hello, World” program… but then
again, I always thought tradition was over-rated.

Save the above script to a location under your Web server document root, with a
.php extension, and browse to it. You’ll see something like this:

###### Go to chrome browser, right click on the page. Select and click View Source Code. 

```php
<html>

<head></head>

<body>

Agent: So who do you think you are, anyhow?

<br />

Neo: I am Neo, but my people call me The One.

</body>

</html>
```

What just happened? When you requested the script above, Apache intercepted
your request and handed it off to PHP. PHP then parsed the script,
executing the code between the <?php...?> marks and
replacing it with the output of the code run. The result was then handed
back to the server and transmitted to the client. Since the output contained
valid HTML, the browser was able to render it for display to the user.

A close look at the script will reveal the basic syntactical rules of PHP.
Every PHP statement ends in a semi-colon. This convention is identical to
that used in Perl, and omitting the semi-colon is one of the most common
mistakes newbies make. That said, it is interesting to note that a semi-colon
is not needed to terminate the last line of a PHP block. The
PHP closing tag includes a semi-colon, therefore the following is perfectly
valid PHP code:


###### Variables 


Here’s a simple example that demonstrates PHP’s variables:
Note that variable names in PHP are case sensitive, so $me is
different from $Me or $ME.

```php
<html>

<head></head>

<body>

Agent: So who do you think you are, anyhow?

<br />

<?php

// define variables

$name = 'Neo';

$rank = 'Anomaly';

$serialNumber = 1;

// print output

echo "Neo: I am <b>$name</b>, the <b>$rank</b>. You can call me by my serial number, <b>$serialNumber</b>.";

?>



</body>

</html>
```


```php
<?php

$age = $dob + 15;

?>
```

Interestingly, you can also perform more than one assignment at a
time. Consider the following example, which assigns three variables the
same value simultaneously:

```php
<?php

$angle1 = $angle2 = $angle3 = 60;

?>
```




### Data types
Every language has different types of variable – and PHP is no
exception. The language supports a wide variety of data types,
including simple numeric, character, string and Boolean types, and more
complex arrays and objects. Here’s a quick list of the basic ones, with
examples:

Boolean: The simplest variable type in PHP, a Boolean
variable, simply specifies a true or false value.

```php
<?php

$auth = true;

?>
```


Integer: An integer is a plain-vanilla whole number like 75, -95, 2000 or 1.

```php
<?php

$age = 99;

?>
```


Floating-point: A floating-point number is typically a fractional
number such as 12.5 or 3.141592653589. Floating point numbers may be
specified using either decimal or scientific notation.

```php
<?php

$temperature = 56.89;

?>
```

### String
String: A string is a sequence of characters, like “hello” or
“abracadabra”. String values may be enclosed in either double quotes
(“”) or single quotes(”). (Quotation marks within the string itself can
be “escaped” with a backslash (\) character.) String values enclosed in
double quotes are automatically parsed for special characters and variable
names; if these are found, they are replaced with the appropriate value.
Here’s an example:

```php
<?php

$identity = 'James Bond';

$car = 'BMW';

// this would contain the string "James Bond drives a BMW"

$sentence = "$identity drives a $car";

echo $sentence;

?>
```



### Market Value
If variables are the building blocks of a programming language,
operators are the glue that let you build something useful with
them. You’ve already seen one example of an operator – the
assignment operator -, which lets you assign a value to a
variable. Since PHP believes in spoiling you, it also comes with
operators for arithmetic, string, comparison and logical operations.

A good way to get familiar with operators is to use them to perform
arithmetic operations on variables, as in the following example:

```php
<html>

<head>

</head>

<body>

<?php

// set quantity

$quantity = 1000;

// set original and current unit price

$origPrice = 100;

$currPrice = 25;

// calculate difference in price

$diffPrice = $currPrice - $origPrice;

// calculate percentage change in price

$diffPricePercent = (($currPrice - $origPrice) * 100)/$origPrice

?>



<table border="1" cellpadding="5" cellspacing="0">

<tr>

<td>Quantity</td>

<td>Cost price</td>

<td>Current price</td>

<td>Absolute change in price</td>

<td>Percent change in price</td>

</tr>

<tr>

<td><?php echo $quantity ?></td>

<td><?php echo $origPrice ?></td>

<td><?php echo $currPrice ?></td>

<td><?php echo $diffPrice ?></td>

<td><?php echo $diffPricePercent ?>%</td>

</tr>

</table>

</body>

</html>
```


Looks complex? Don’t be afraid – it’s actually pretty simple. The
meat of the script is at the top, where I’ve set up variables for the
unit cost and the quantity. Next, I’ve performed a bunch of calculations
using PHP’s various mathematical operators, and stored the results of
those calculations in different variables. The rest of the script is
related to the display of the resulting calculations in a neat table.

If you’d like, you can even perform an arithmetic operation
simultaneously with an assignment, by using the two operators together.
The two code snippets below are equivalent:

```php
<?php

// this...

$a = 5;

$a = $a + 10;

// ... is the same as this

$a = 5;

$a += 10;

?>
```

If you don’t believe me, try echoing them both.


### Stringing Things Along
Why stop with numbers? PHP also allows you to add strings with the string
concatenation operator, represented by a period (.). Take a look:

```php
<?php

// set up some string variables

$a = 'the';

$b = 'games';

$c = 'begin';

$d = 'now';

// combine them using the concatenation operator

// this returns 'the games begin now<br />'

$statement = $a.' '.$b.' '.$c.' '.$d.'<br />';

print $statement;

// and this returns 'begin the games now!'

$command = $c.' '.$a.' '.$b.' '.$d.'!';

print $command;

?>
```

As before, you can concatenate and assign simultaneously, as
below:

```php
<?php

// define string

$str = 'the';

// add and assign

$str .= 'n';

// str now contains "then"

echo $str;

?>
```

