## PHP PDO (PHP Data Object)

PHP PDO is a database access layer that provides a uniform interface for working with multiple databases.

PDO simplifies the common database operations including:

Creating database connections
Executing queries using prepared statements
Calling stored procedures
Performing transactions
And handling errors
PDO allows you to work with any database that has a PDO driver available. PDO relies on database-specific drivers, e.g., PDO_MYSQL for MySQL, PDO_PGSQL for PostgreSQL, PDO_OCI for Oracle database, etc., to function properly. 

Therefore, to use PDO for a specific database, you need to have a corresponding database driver available.

## Connecting to MySQL
## Creating New Tables
## PHP Prepared Statement
A prepared statement is a template for executing one or more SQL statements with different values. A prepared statement is highly efficient and helps protect the application against SQL injections.

When a database server executes a query, it goes through two main stages: preparation and execution.

* Preparation – the database server checks the syntax of the SQL statement and initializes internal server resources for the execution stage.
* Execution – the application binds the values and sends the SQL statement to the database server. The database server executes the statement with the bound values using the internal server resource allocated in the preparation stage.
