Code Documentation for FM php pages

ISSUES:
	document/documents
	page names: index, search, result
	database vs table: throughout the pages database and table are used interchageable when they are not
		cmsfm is the database
		Tables:
			document
			literature
			patient
			phone
			watch
			estimote
	session
		session isn't working
		(the login works and search kicks back to login if username/password empty or incorrect)
		pages including session.php trip error codes, so all 'include session.php' code has been commented out

TODO: 
	create multi-user setup
		user table, search.php needs to check session variables against user entries against user table entries

Index.php
	Establishes session credentials
	Login form
		Login button forwards to *search.php*
	
***Session.php***[when working]
	Checks if logged in and forwards to index.php if not
	
Search.php
	Starts session
	Contains username and password
	
	If there is a blank in index.php or entries are incorrect, echos appropriate message and includes index.php
		If username and password are correct forwards to *result.php*
		
Result.php [working 100%]
	//Includes session.php
	Includes links to index.php and add.php
	
	Sets search string and table variables
	
	Search form
		Requires a database to be selected and search to be entered
		Search button runs php code from result.php
	
	Column variables and database credentials set for later use
		
	The set of If statements check for search entries, database connection, and determine which database to pull from
	
	For each individual database
		a sql query selects data matching the search string
		foreach statement checks each column of the table for matching data
		html code formats and presents the data
		
	TODO	
Add.php
	Includes session.php
	Includes links to index.php and result.php
	
	Includes directory of databases
		each link goes to the particular database addition page
	
	TODO	
add[table].php
	Includes session.php
	Includes links to index.php, search.php, add.php

	
	Add form
		each add[table] page has the correct text boxes for the specific table
		the Add to [table] button runs the rest of the php code on the add[table] page
		
	If statements check for entries in each text box
		