----------------------------------------------------
--Création des éditeurs
create table editeurs(id int primary key auto_increment, prenom varchar(255), nom varchar(255), email varchar(255), telephone varchar(15), adresse varchar(255));

insert into editeurs(prenom, nom, email, telephone, adresse) values("Fatou", "Diop", "fatou.diop@gmail.com", "782938338", "Parcelles Assainies U. 4");
insert into editeurs(prenom, nom, email, telephone, adresse) values("Samba", "Gueye", "samba.gueye@gmail.com", "772733737", "Keur Massar");
insert into editeurs(prenom, nom, email, telephone, adresse) values("Aminata", "Sall", "aminata.sall@gmail.com", "783309080", "Ouakam");
insert into editeurs(prenom, nom, email, telephone, adresse) values("Abdoulaye", "Sidibé", "abdoulaye.sidibe@gmail.com", "782263625", "Cité Aliou Sow");