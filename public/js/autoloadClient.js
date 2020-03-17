

///** Const liste station, recupération données appel ajax **/
class autoloadClient {
    constructor(nom, prenom, mail, zip, ville, contact) {
        this.nom = nom;
        this.addresse = prenom;
        this.mail = mail;
        this.zip = zip;
        this.ville = ville;
        this.contact = contact;
    }
    showClient() {
            $('#nom').text(this.nom);
            $('#prenom').text(this.prenom);
            $('#mail').text(this.mail);
            $('#zip').text(this.zip);
            $('#ville').text(this.ville);
            $('#contact').text(this.contact);
    }
}