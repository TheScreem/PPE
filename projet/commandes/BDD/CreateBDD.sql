CREATE DATABASE bdd;
USE bdd;

CREATE TABLE CLIENT
(
        codeCLI   int (11) Auto_increment  NOT NULL ,
        nomCLI    Varchar (40) NOT NULL ,
        prenomCLI Varchar (40) NOT NULL ,
        paysCLI   Varchar (40) ,
        cpCLI     Int ,
        villeCLI  Varchar (40) ,
        rueCLI    Varchar (40) ,
        rue2CLI   Varchar (40) ,
        numRueCLI Int ,
        mailCLI   Varchar (50) ,
        telCLI    Int ,
        mobileCLI Int ,
        faxCLI    Varchar (40) ,
        CONSTRAINT PK_CLIENT_codeCLI PRIMARY KEY (codeCLI)
);

CREATE TABLE FACTURE
(
        numFAC      int (11) Auto_increment  NOT NULL ,
        dateFAC     Date NOT NULL ,
        rsFAC       Varchar (40) ,
        echeanceFAC Date NOT NULL ,
        termeRegFAC Varchar (25) NOT NULL ,
        modeReglFAC Varchar (25) ,
        payeFAC     Varchar (10) ,
        etatFAC     Varchar (25) ,
        mtFAC       Float ,
        fpFAC       Float ,
        codeCLI     Int NOT NULL ,
        CONSTRAINT PK_FACTURE_numFAC PRIMARY KEY (numFAC ),
		CONSTRAINT FK_FACTURE_codeCLI FOREIGN KEY (codeCLI)
		REFERENCES CLIENT(codeCLI)
);

CREATE TABLE FOURNISSEUR
(
        codeFOUR int (11) Auto_increment  NOT NULL ,
        libFOUR  Varchar (40) ,
        CONSTRAINT PK_FOURNISSEUR_codeFOUR PRIMARY KEY (codeFOUR)
);

CREATE TABLE PRODUIT
(
        codePRO Varchar (30) NOT NULL ,
        CONSTRAINT PK_PRODUIT_codePRO PRIMARY KEY (codePRO)
);

CREATE TABLE FACTURE_ACHAT
(
        numFACA  Int NOT NULL ,
        dateFACA Date ,
        mtFACA   Float ,
        etatFACa     Varchar (25) ,
        codeFOUR Int NOT NULL ,
        CONSTRAINT FACTURE_ACHAT_numFACA PRIMARY KEY (numFACA ),
		CONSTRAINT FK_FACTURE_ACHAT_codeFOUR FOREIGN KEY (codeFOUR)
		REFERENCES FOURNISSEUR(codeFOUR)
);

CREATE TABLE LIGNE_FACTURE
(
        qteFAC Int ,
        codePRO Varchar (30) NOT NULL ,
        numFAC Int NOT NULL ,
        CONSTRAINT LIGNE_FACTURE_numPRO_numFAC PRIMARY KEY (codePRO ,numFAC ),
		CONSTRAINT FK_LIGNE_FACTURE_codePRO FOREIGN KEY (codePRO)
		REFERENCES PRODUIT(codePRO),
		CONSTRAINT FK_LIGNE_FACTURE_numFAC FOREIGN KEY (numFAC)
		REFERENCES FACTURE(numFAC)
);

CREATE TABLE LIGNE_ACHAT
(
        qteACH  Int ,
        codePRO  Varchar (30) NOT NULL ,
        numFACA Int NOT NULL ,
        CONSTRAINT LIGNE_ACHAT_nurmPRO_numFACA PRIMARY KEY (codePRO ,numFACA ),
		CONSTRAINT FK_LIGNE_ACHAT_codePRO FOREIGN KEY (codePRO)
		REFERENCES PRODUIT(codePRO),
		CONSTRAINT FK_LIGNE_ACHAT_numFACA FOREIGN KEY (numFACA)
		REFERENCES FACTURE_ACHAT(numFACA)
);
