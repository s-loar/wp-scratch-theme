# TOPS Project

TOPS is an LMS tool in the recovery of teens with critical brain injuries.

## Setup
Follow these steps for your local setup of this project.

* You probably will want to have MAMP setup and running on your localhost. I also have mySQL running as a service via Homebrew. That's not required, but if you have that, MAMP will connect to that so you only have MySQL running.

* Fire up MAMP and use the phpmyadmin it provides to create your database and user. Use what is working on the site for what these should be. The database should have utf8mb4 character encoding. The tables should be prefixed with 'tops_'. The user account does not need to match since your wp-config file will not get pushed to the repo, but the database and table prefix must match.

* Now clone the repo into a directory and set the values in the wp-config to match what you set up.  

* You are now ready to fire up your local copy of the site, minus the live data. Go ahead and fire it up and do the WordPress install. But do not do anything further on the site, as you will want to pull nd use the live site's data.

* The normal process is to use wp-migrate-db to create zip files or the live data to be pulled into your local copy.
You should see what this plugin says for your host and path values, as you will need to input these into the live site when you do the pull.
