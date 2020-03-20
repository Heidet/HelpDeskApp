


ajaxGet("http://localhost:8888/public/js/numeroClient.json", function (reponse) {
    // Transforme la réponse en tableau d'objets JavaScript
    var numeroClient = JSON.parse(reponse);
    // Affiche le titre de chaque film
    numeroClient.forEach(function (client) {
        console.log(client.nom);
    })
});
