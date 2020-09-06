<?php
if(Permission::getInstance()->verifPerm("connect")){

    if(Permission::getInstance()->verifPerm('PermsForum', 'general', 'addForum') OR Permission::getInstance()->verifPerm('PermsForum', 'general', 'addCategorie') OR $_Joueur_['rang'] == 1){

        $fofo = $_Forum_->affichageForum();
        if($_GET['page'] == "forum"){

            if(!$_SESSION['mode']){
                echo '
                <style>
                .d-none{
                    display: none !important;
                }
                .d-block{
                    display: block !important;
                    transition: 0.8s;
                }
                .modal{
                    margin-top: 50px !important;
                }
                </style>
                ';
                include('theme/'.$_Serveur_['General']['theme'].'/plugins/forum/entete.php');
            }

        }

    }

}
?>