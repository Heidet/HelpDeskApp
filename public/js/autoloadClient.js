

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
            $('#nom').val(this.nom);
            $('#prenom').val(this.prenom);
            $('#mail').val(this.mail);
            $('#zip').val(this.zip);
            $('#ville').val(this.ville);
            $('#contact').val(this.contact);
    }
}