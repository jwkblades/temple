temple
======

Temple is a quick and easy template engine for PHP which was inspired by MySQLi and PDO.

Installation
------------

Installation guides are determined based on the OS you are using. At the moment we have only released for Intel 32-bit Fedora 18, however if people show interest and let us know other OS/Architectures they would like to see in the future we will do our best to get the popular requests met.

Generally, installation is as simple as dropping the library file in to your extensions (or modules) directory, adding the following line to your php.ini file `extension = temple.so` and restarting the httpd service.

Performance
-----------

When serving web-pages to end-users speed is always a concern. Temple is built from the ground up with speed as a primary point of interest and as a result we are very pleased to say that it runs only marginally closer than `sprintf` over a large number of iterations.

At only about .8 seconds slower over a 5,000,000 (5-million) iteration benchmark (available for you to se and use on your own machine), which is 10,000,000 calls to both `temple_template_fetch` and `sprintf` the difference in running time is quite minimal (coming out to be only around 0.00000008 seconds per call difference).

Usage
-----

### C-style functions

`resource temple_prepare(string $str)` - Prepare a format string to be used as a temple template. As in MySQLi queries, question marks `?` are used to mark variable placement within the resulting strings when a fetch is called. If you wish to have a question mark appear in the final string escape it with a `\`. This function returns a template resource.

`void temple_template_bind_param(resource $template, string $dataTypeString, mixed $parm1[, mixed $parm2[, ...]])` - Bind parameters (PHP variables) for use by the template later on.
The dataTypeString may contain the following data types:

  `h` - An HTML string, all HTML tags will be left in tact.

  `i`, `l` - An integer number.

  `s` - A string in which the greater than and less than characters are replaced by their HTML encoded equivalent.

`string temple_template_fetch(resource $template)` - Fetches the resulting string based on the data types, params and format string used to prepare the template in the first place.

`void temple_template_close(resource $template)` - Free all memory in use by the template.

### PHP Class functions
#### Temple

`Temple::Temple()` - Create a new Temple object.

`Template Temple::prepare(string $str)` - Prepares a template based off of the provided format string and returns the Template object.

`Template Temple::prepare_file(string $filepath)` - Prepares a template based off of the contents of a file and returns the Template object.

#### Template
`Template::Template(string $formatString)` - Sets up the template using the provided format string.

`resource Template::get()` - Returns the raw resource for use with `temple_template_bind_param`.

`string Template::fetch()` - Fetches the resulting string from the template based on the original format string and bound parameters.

`Template::close()` - Close the template and free its memory.

Interested?
-----------

If you are interested in the continued development and potentially making the project open-source let me know!

Feel free to contact me here on github.
