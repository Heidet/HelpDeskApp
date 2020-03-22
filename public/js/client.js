


ajaxGet("http://localhost:8888/public/js/numeroClient.json", function (reponse) {
    // Transforme la réponse en tableau d'objets JavaScript
    var numeroClients = JSON.parse(reponse);
    // Affiche le titre de chaque film
    numeroClients.forEach(function (client) {
        console.log(client.nom);
    })
});

/*$( function() {
    function log( message ) {
      $( "<input>" ).text( message ).prependTo( "#prenom" );
      $( "#prenom" ).scrollTop( 0 );
    }
 
    $( "#nom" ).autocomplete({
      source: function( request, response ) {
        $.ajax( {
          url: "http://localhost:8888/index.php?action=listClients",
          dataType: "json",
          data: {
            term: request.term
          },
          success: function( data ) {
            response( data );
            document.getElementById("nom").innerHTML = data.nom;
          }
        } );
      },
      minLength: 2,
      select: function( event, ui ) {
        log( "Selected: " + ui.item.nom + " aka " + ui.item.prenom);
      }
    } );
  } );*/