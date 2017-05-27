<?php 
$url = $_SERVER['PHP_SELF'];  

function remove_querystring_var($url, $key) {
        $url = preg_replace('/(.*)(\?|&)' . $key . '=[^&]+?(&)(.*)/i', '$1$2$4', $url . '&');
        $url = substr($url, 0, -1);
        return ($url);
}

$msg_logout = "Vous êtes déconnecté";
$arrow = "<img src=images/arrow.png />";
$yes = 'OUI';
$no ='NON';
$print = 'Imprimer';
$rights="Tous droits réservés.";
$del='supprimer';
//controls
$btn= array(
        "add" => "Ajouter",
        "cancel" => "Annuler",
        "reset" => "Reset",
        "search" => "Recherche",
        "send" => "Envoyer",
        "update" => "Modifier"
);

//BUDGET VARIABLES
$cols_budget_title=array("Produits", "1 Sem","2 Sem","Mensuel","6 Mois","Année", "MODIFIER", "SUPPRIMER");
$cols_mobile_budget_title=array("Date", "Produits", "1 Sem","2 Sem","Mensuel","6 Mois","Année");
$tot_pay_title="Paiement Total";
$tot_rev_title="Revenu Total";
$rev_after_pay_title="Revenu Restant";

$taxe_title = "Calculer Taxe";
$calcul_tx__btn = "aller";

//Aide
$help_bar = 'Aide';
$help_title = 'Comment utiliser le gestionnaire de temps?';
$admin_help_title = 'Comment utiliser l\'Administration du gestionnaire de temps?';
$help_send_mail = 'Envoyez';
$help_mail_msg = 'Pour toutes informations et détails concernant le gestionnaire de temps<br />
                                sentez-vous libre de soummettre vos questions a notre équipe.';
$msg_submit_mail = "<br/>{$arrow}<font color='#FF0000'><em>Courriel Envoyez avec Succès.</em></font>";
$msg_submit_mail_fail = "<br/>{$arrow}<font color='#FF0000'><em>Désoler, L'envoi du Courriel à Échoué.</em></font>";
$help_mail_subject = "Aide - Gestionnaire de Temps";
$from = 'De: ';

//javascript
$js_edit = 'Modifier cette tache?';
$js_del = 'Supprimer cette tache?';
$js_req_dte = 'La Date est Requise';
$js_req_client_name = 'Le Nom du Client est Requis';
$js_req_usrnme = 'utilisateur requis';
$js_req_pswd = 'mot de passe requis';
$js_req_full_name = 'Le Nom est Requis';
$js_req_mail = 'Le Courriel est Requis';
$js_req_empl_num = "Le # Employé est Requis";
$js_req_empl_name = "Le Nom Employé est Requis";
$js_req_mail_format = "Addresse de Courriel Incorrecte";
$js_req_novalue = ' ne possède aucune Valeur';
$js_req_notavaluetype = ' est dans un format invalide';
 ?>
