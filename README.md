# Silfer Bots set custom field value 
Function to set silfer bots custom fields values using PHP.

## How to Use

1) Include the file setcustom.pp
```PHP
include('setcustom.php');
```
2) Create the Autorization header **using your Silfer Bots Token**
```PHP
//create only one time
$token = 'yourtoken';
$authorization = "X-SILFER-ACCESS-TOKEN: ".$token;  
```
3) Call the function
```PHP
//Set your variables
$userid = 'Facebook User ID';
$fieldid = 'Silfer Bots Field ID';
$value = 'anything';

setcustomfield($userid, $fieldid, $value, $authorization);
```
## Author
German Conejo
