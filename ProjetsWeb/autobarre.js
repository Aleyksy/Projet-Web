$( function() {
	$('#recherche').autocomplete({
    source : 'listeEvent.php',
    minLength : 2
	});
});