nom de la base à créer : miage_site
table des sessions a créer: 

CREATE TABLE IF NOT EXISTS `ci_sessions` (
	session_id      varchar(40)    DEFAULT '0' NOT NULL,
	ip_address      varchar(16)    DEFAULT '0' NOT NULL,
	user_agent      varchar(120)   NOT NULL,
	last_activity   int(10)        unsigned DEFAULT 0 NOT NULL,
	user_data       text           NOT NULL,

	PRIMARY KEY (session_id),

	KEY `last_activity_idx` (`last_activity`)
);

----------------------------------------------------------------------------------------------------------------------------
		modifier --> connexion config/database.php
		
		modifier --> congig/config.php -> congig[base_url]


github

D'abord il faut s'inscrire sur github. =)

https://github.com/hugo13/miage.git

Avant de push ou de pull TOUJOURS FAIRE UN COMMIT!
NE JAMAIS COMMIT L'ENSELBLE DU REPERTOIRE SOURCE MAIS SEULEMENT LES FICHIERS MODIFIES

Pull (festch + merge voir plus bas): permet de recuperer le code du serveur et de le fusionner à votre branche locale
fetch : un peu comme pull = recupe les fichiers manquants MAIS!!! --> ne fusionne pas àla branche locale 
        --> à utiliser si vous avez peur de recupérer le code des copains pensant qu'il pourrait bousiller votre travail (comme la fusion n'ai pas instantanée)
        merge --> après avoir fetch (si il n'y a pas de conflits) il faut merge (fusionner): cela fusionne à votre branche locale
push : permet d'envoyer au serveur



