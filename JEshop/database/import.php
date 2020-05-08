<?php

# Import dump database (migrer vers la base de donnees)
shell_exec('mysql -uroot -p jeshop < source/jeshop.sql');


/*
# mysqldump jeshop > jeshop.sql
To dump a database into an SQL file use the following command.

mysqldump -u username -p database_name > database_name.sql
To import an SQL file into a database (make sure you are in the same directory as the SQL file or supply the full path to the file), do:

mysql -u username -p database_name < database_name.sql
*/