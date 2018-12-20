# TOPS Project

This is a project of Children's Hospital. TOPS is an LMS tool which is meant to help in the recovery of teens with critical brain injuries.

## Setup
Follow these steps for your local setup of this project.

* You probably will want to have [MAMP][https://www.mamp.info/en/downloads/] setup and running on your localhost. I also have mySQL running as a service via Homebrew. That's not required, but if you have that, MAMP will connect to that so you only have MySQL running.

* Fire up MAMP and use the phpMyAdmin it provides to create your database and user. Use the database name should be that of what is working on the live site. The database should use [the utf8mb4 character set][https://dev.mysql.com/doc/refman/5.5/en/charset-unicode-utf8mb4.html]. The tables need to be prefixed with 'tops_'. The user account does not need to match since your wp-config.php file will not get pushed to the repo, but the database and table prefix must match.

* Now clone the repo into a local directory and set the values in the wp-config to match what you set up for the database and the user account.  

* You are now ready to fire up your local copy of the site, minus the live data. Go ahead and fire it up and do the WordPress install.

* To get the live data, the normal process is to use Migrate DB Pro plugin to create a zip file of the live data to be pulled into your local database. You should see what this plugin says for your local host and path values, as you will need to input these into the live site when you do the pull. That is, you want the live site to pull a copy of itself and swap the live site values with your local site values in the extract. Go ahead an make the extract and save the profile so you can use it again later.

* Now go into the phpMyAdmin for your local site and select your WordPress database. Select all of the tables and then delete them. With the tables gone, you can go to the Import tab. You want to import the zip file you created from the live site. Select the extracted zip file and click "Go" to start the import. When this is done, your site should match the live site and you are good to make changes.

* If there are no users in the live system, this can be done in reverse to initially populate its database as well.
