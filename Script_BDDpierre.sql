#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Utilisateurs
#------------------------------------------------------------

CREATE TABLE Utilisateurs(
        ID               int (11) Auto_increment  NOT NULL ,
        Nom              Varchar (50) NOT NULL ,
        Prenom           Varchar (50) NOT NULL ,
        Image            Varchar (50) ,
        Mail             Varchar (100) NOT NULL ,
        Admin            Int NOT NULL ,
        Date_Inscription Date NOT NULL ,
        PRIMARY KEY (ID )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Boite_idees
#------------------------------------------------------------

CREATE TABLE Boite_idees(
        ID              int (11) Auto_increment  NOT NULL ,
        Objet           Varchar (50) NOT NULL ,
        Description     Varchar (500) ,
        Date_Soumission Date NOT NULL ,
        PRIMARY KEY (ID )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Like
#------------------------------------------------------------

CREATE TABLE Like(
        ID              int (11) Auto_increment  NOT NULL ,
        ID_Utilisateurs Int NOT NULL ,
        ID_Boite_idees  Int NOT NULL ,
        PRIMARY KEY (ID )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Evenement 
#------------------------------------------------------------

CREATE TABLE Evenement(
        ID              int (11) Auto_increment  NOT NULL ,
        Objet           Varchar (25) NOT NULL ,
        Description     Varchar (500) ,
        Date_Soumission Date NOT NULL ,
        PRIMARY KEY (ID )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Commentaire_Evenement
#------------------------------------------------------------

CREATE TABLE Commentaire_Evenement(
        ID              int (11) Auto_increment  NOT NULL ,
        Commentaire     Varchar (500) ,
        ID_Evenement    Int ,
        ID_Utilisateurs Int NOT NULL ,
        PRIMARY KEY (ID )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Like_Evenement
#------------------------------------------------------------

CREATE TABLE Like_Evenement(
        ID              int (11) Auto_increment  NOT NULL ,
        ID_Evenement    Int ,
        ID_Utilisateurs Int NOT NULL ,
        PRIMARY KEY (ID )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Article
#------------------------------------------------------------

CREATE TABLE Article(
        ID      int (11) Auto_increment  NOT NULL ,
        Article Varchar (25) ,
        Prix    Float ,
        PRIMARY KEY (ID )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Commande
#------------------------------------------------------------

CREATE TABLE Commande(
        ID              int (11) Auto_increment  ,
        Quantite        Int ,
        ID_Article      Int NOT NULL ,
        ID_Utilisateurs Int NOT NULL ,
        PRIMARY KEY (ID_Article ,ID_Utilisateurs )
)ENGINE=InnoDB;

ALTER TABLE Like ADD CONSTRAINT FK_Like_ID_Utilisateurs FOREIGN KEY (ID_Utilisateurs) REFERENCES Utilisateurs(ID);
ALTER TABLE Like ADD CONSTRAINT FK_Like_ID_Boite_idees FOREIGN KEY (ID_Boite_idees) REFERENCES Boite_idees(ID);
ALTER TABLE Commentaire_Evenement ADD CONSTRAINT FK_Commentaire_Evenement_ID_Evenement FOREIGN KEY (ID_Evenement) REFERENCES Evenement(ID);
ALTER TABLE Commentaire_Evenement ADD CONSTRAINT FK_Commentaire_Evenement_ID_Utilisateurs FOREIGN KEY (ID_Utilisateurs) REFERENCES Utilisateurs(ID);
ALTER TABLE Like_Evenement ADD CONSTRAINT FK_Like_Evenement_ID_Evenement FOREIGN KEY (ID_Evenement) REFERENCES Evenement(ID);
ALTER TABLE Like_Evenement ADD CONSTRAINT FK_Like_Evenement_ID_Utilisateurs FOREIGN KEY (ID_Utilisateurs) REFERENCES Utilisateurs(ID);
ALTER TABLE Commande ADD CONSTRAINT FK_Commande_ID_Article FOREIGN KEY (ID_Article) REFERENCES Article(ID);
ALTER TABLE Commande ADD CONSTRAINT FK_Commande_ID_Utilisateurs FOREIGN KEY (ID_Utilisateurs) REFERENCES Utilisateurs(ID);
