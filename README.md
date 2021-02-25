# Input Values

Search for all input tags with a specific name from all .html files of a directory, and lists its values in a .txt file.

### Objective

Sometimes I need to look for a certain input in all pages of a site, and make a list of its values. But it takes sometime and it's a boring task, so I made this script in PHP to automate the proccess.

### How to use it

On the terminal, inside the directory you want to create the list, execute the inputvalues.php file, passing as arguments the path to your html files, and the name of the input. For example:

> php path/to/inputvalues.php /html/folder input-name

Or make this inputvalues.bat (on Windows) inside a bin/ folder:

@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0../inputvalues/inputvalues
php "%BIN_TARGET%".php %*

Add the path to this bin/ folder into the environment variable PATH. The file tree will be like this:

├───scripts
    │
    ├───bin
    │       inputvalues.bat
    │       otherscripts.bat
    │
    ├───inputvalues
    │   │   autoload.php
    │   │   inputvalues.php
    │   │   README.md
    │   │
    │   └───src
    │           Listing.php
    │           Origin.php
    │
    ├───otherscripts
    .
    .
    .

Then do this way from any directory without php command or .php extension:

> inputvalues /html/folder input-name