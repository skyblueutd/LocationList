# LocationList

index.php file queries the database to obtain and build a drop-down list of all the countries. When the user selects a country, the page should make an AJAX call to update.php to grab the states from the database and return them to index.php to populate the states drop-down box. Finally, when the user selects a state the page should make an AJAX call to update.php to gram the cities from the database and return them to index.php to populate the cities drop-down box.

update.php connects to the database and selects the correct database entries for the given country, state, or city and returns the entries to index.php. 
