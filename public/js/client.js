$( function() {
 
    $( "#nom" ).autocomplete({
      source: function( request, response ) {
        $.ajax( {
          url: "/?action=searchClients",
          dataType: "json",
          data: {
            term: request.term
          },
          success: function( data ) {
           
            response($.map(data, function (value, key) {
              
                return {
                    label: value['nom']  + ' ' +   value['prenom'],
                    value: value['nom'],
                    info: value

                }
            }));
          }
        } );
      },

      minLength: 1,
      select: function( event, ui ) {
        console.log(ui.item);
        $('#numeroClient').val(ui.item.info.id);
        $('#prenom').val(ui.item.info.prenom);
        $('#nom').val(ui.item.info.nom);
        $('#addresse').val(ui.item.info.addresse);
        $('#mail').val(ui.item.info.mail);
        $('#zip').val(ui.item.info.zip);
        $('#ville').val(ui.item.info.ville);
        $('#contact').val(ui.item.info.contact)
      }
    } );
  } );

