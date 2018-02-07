Hello Database!
Now, let’s use PHP to do exactly the same thing. You could use PHP
to set up the database from the start, but as ours already exists
we’ll simply fire a SELECT query at the database
‘testdb’, and display the results in an HTML page:

```php
<html>

<head>

<basefont face="Arial">

</head>

<body>

<?php

// set database server access variables:

$host = "localhost";

$user = "test";

$pass = "test";

$db = "testdb";

// open connection

$connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!");

// select database

mysql_select_db($db) or die ("Unable to select database!");

// create query

$query = "SELECT * FROM symbols";

// execute query

$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());

// see if any rows were returned

if (mysql_num_rows($result) > 0) {

    // yes

    // print them one after another

    echo "<table cellpadding=10 border=1>";

    while($row = mysql_fetch_row($result)) {

        echo "<tr>";

        echo "<td>".$row[0]."</td>";

        echo "<td>" . $row[1]."</td>";

        echo "<td>".$row[2]."</td>";

        echo "</tr>";

    }

    echo "</table>";

}

else {

    // no

    // print status message

    echo "No rows found!";

}

// free result set memory

mysql_free_result($result);

// close connection

mysql_close($connection);

?>


</body>

</html>
```



As you can see, using PHP to get data from a database involves
several steps, each of which is actually a pre-defined PHP function.
Let’s dissect each step:

The first thing to do is specify some important information needed
to establish a connection to the database server. This information
includes the server name, the username and password required to gain
access to it, and the name of the database to query. These values are
all set up in regular PHP variables.

```php
<?php

$host = "localhost";

$user = "test";

$pass = "test";

$db = "testdb";

?>
```

To begin communication with a MySQL database server, you need to
open a connection to that server. All communication between PHP and
the database server takes place through this connection.
In order to initialize this connection, PHP offers the
mysql_connect() function:

```php
<?php

$connection = mysql_connect($server, $user, $pass);

?>
```

All the parameters in mysql_connect()are optional, but there
are three you will generally need to use anywhere beyond your own machine:
the database server name, username and password. If the database server
and the Web server are running on the same physical machine, you can use
localhost as the database server name this is in fact the
default value supplied by PHP.

mysql_connect() returns a “link identifier”, which is stored
in the variable $connection. This identifier is used when
communicating with the database.

Once you have a connection to the database, you must select
a database for use with the mysql_select_db() function:

```php
<?php

mysql_select_db($db) or die ("Unable to select database!");

?>
```


This function must be passed the name of the database to be used for
all subsequent queries. An optional second argument here is the link
identifier; if no identifier is specified, the last opened link is
assumed. If you have two or more database connections open
simultaneously, it’s a good idea to specify the link identifier as the
second argument to mysql_select_db() – and indeed to all other
mysql_* functions in the script, so that PHP doesn’t get confused about
which connection to use where.

The next step is to create the query and execute it. This
is accomplished with the mysql_query() function.

```php
<?php

$query = "SELECT * FROM symbols";

$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());

?>
```

This function also needs two parameters: the query string and the
link identifier for the connection. Again, if no link identifier is
specified, the last opened link is used. Depending on whether or not
the query was successful, the function returns true or false; a failure
can be caught via the ...or die() clause of the statement,
and the mysql_error() function can be used to display the
corresponding error message.

If mysql_query() is successful, the result set returned
by the query is stored in the variable $result. This result set may
contain one or more rows or columns of data, depending on your query. You can
retrieve specific subsets of the result set with different PHP functions,
including the one used here – the mysql_fetch_row() function –
which fetches a single row of data as an array called $row. Fields
in that row can then be accessed using standard PHP array notation.
Each time you call mysql_fetch_row(), the next record in the result
set is returned. This makes mysql_fetch_row() very suitable for
use in a while() or for() loop.

```php
<?php

if (mysql_num_rows($result) > 0) {

    while($row = mysql_fetch_row($result)) {

        echo "<td>".$row[0]."</td>";

        echo "<td>".$row[1]."</td>";

        echo "<td>".$row[2]."</td>";

    }

}

?>
```

Notice that the call to mysql_fetch_row() is wrapped in a
conditional test, which first checks to see if any rows were returned
at all. This information is provided by the mysql_num_rows()
function, which contains the number of rows returned by the query. Obviously,
you can only use this function with queries that return data, like
SELECT or SHOW.It is not appropriate for use with

INSERT, UPDATE, DELETE or similar queries.

There are several other alternatives to mysql_fetch_row(),
which will be explained a little later.

Finally, since each result set returned after a query
occupies memory, it’s a good idea to use the mysql_free_result()
function to free up the used memory. After the result set is freed, if no
further queries are to be run, you can close the connection to the MySQL
server with mysql_close().

```php
<?php

mysql_free_result($result);

mysql_close($connection);

?>
```


Different Strokes…
You can also use PHP’s mysql_fetch_row() and list()
functions to obtain a simple array of values, and then assign these values to
different variables – a variation of the technique in the previous section.
Take a look (only the while() loop changes):

```php
<html>

<head>

<basefont face="Arial">

</head>

<body>

<?php

// set server access variables

$host = "localhost";

$user = "test";

$pass = "test";

$db = "testdb";

// open connection

$connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!");

// select database

mysql_select_db($db) or die ("Unable to select database!");

// create query

$query = "SELECT * FROM symbols";

// execute query

$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());

// see if any rows were returned

if (mysql_num_rows($result) > 0) {

     // yes

     // print them one after another

     echo "<table cellpadding=10 border=1>";

     while(list($id, $country, $animal)  = mysql_fetch_row($result)) {

          echo "<tr>";

          echo "<td>$id</td>";

          echo "<td>$country</td>";

          echo "<td>$animal</td>";

          echo "</tr>";

     }

     echo "</table>";

}

else {

     // no

     // print status message

     echo "No rows found!";

}

// free result set memory

mysql_free_result($result);

// close connection

mysql_close($connection);

?>


</body>

</html>
```


In this case, the list() function is used to assign different
elements of the result set to PHP variables, which are then used when
rendering the page.

You can use PHP’s mysql_fetch_assoc() function to represent each
row as an associative array of field-value pairs – a minor variation of the
technique used above:

```php
<html>

<head>

<basefont face="Arial">

</head>

<body>

<?php

// set server access variables

$host = "localhost";

$user = "test";

$pass = "test";

$db = "testdb";

// open connection

$connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!");

// select database

mysql_select_db($db) or die ("Unable to select database!");

// create query

$query = "SELECT * FROM symbols";

// execute query

$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());

// see if any rows were returned

if (mysql_num_rows($result) > 0) {

    // yes

    // print them one after another

    echo "<table cellpadding=10 border=1>";

    while($row = mysql_fetch_assoc($result)) {

        echo "<tr>";

        echo "<td>".$row['id']."</td>";

        echo "<td>".$row['country']."</td>";

        echo "<td>".$row['animal']."</td>";

        echo "</tr>";

    }

    echo "</table>";

}

else {

    // no

    // print status message

    echo "No rows found!";

}

// free result set memory

mysql_free_result($result);

// close connection

mysql_close($connection);

?>


</body>

</html>
```

Notice that in this case, field values are accessed using the field
name instead of the index.

Of all the alternatives, however, the function I like the most is
the mysql_fetch_object() function, which returns each
row as an object (remember them from Part Seven?) with properties
corresponding to the field names:

```php
<html>

<head>

<basefont face="Arial">

</head>

<body>

<?php

// set server access variables

$host = "localhost";

$user = "test";

$pass = "test";

$db = "testdb";

// open connection

$connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!");

// select database

mysql_select_db($db) or die ("Unable to select database!");

// create query

$query = "SELECT * FROM symbols";

// execute query

$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());

// see if any rows were returned

if (mysql_num_rows($result) > 0) {

    // yes

    // print them one after another

    echo "<table cellpadding=10 border=1>";

    while($row  = mysql_fetch_object($result)) {

        echo "<tr>";

        echo "<td>".$row->id."</td>";

        echo "<td>".$row->country."</td>";

        echo "<td>".$row->animal."</td>";

        echo "</tr>";

    }

    echo "</table>";

}

else {

    // no

    // print status message

    echo "No rows found!";

}

// free result set memory

mysql_free_result($result);

// close connection

mysql_close($connection);

?>


</body>

</html>
```

Here, each $row object is created with properties
corresponding to the field names in that row. Row values can
thus be accessed using standard object->property
notation.

If you’re the type that likes to have your cake and eat it too, you
will probably enjoy the mysql_fetch_array() function, which
returns both an associative array and a numerically-indexed array, a
combination of the mysql_fetch_row() and
mysql_fetch_assoc() functions. Read about it at
http://www.php.net/manual/en/function.mysql-fetch-array.php.

