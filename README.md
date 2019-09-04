# npc-generator
Simple web based character generator for DND 5E. This tool can generate, save, load, and delete characters.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine.

### Prerequisites

```
A local tech stack with PHP and MySQL
A text editor to edit the config.php file for your database configuration
```

### Installing

Download the repository and place it in the root directory of a fresh local stack

Create a new database called 'character_options'

```
CREATE DATABASE character_options;
```

Import the character_options.sql file to your character_options database to load some example content.

```
mysql db_name < backup-file.sql
```

Copy the config-example.php file to config.php and add your own database connection and user information

Access http://localhost/ and experiment with generating, editing, saving, loading, and deleting characters.
