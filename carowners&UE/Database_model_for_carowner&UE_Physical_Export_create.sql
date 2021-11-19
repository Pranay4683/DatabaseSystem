-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2021-11-19 12:32:10.61

-- tables
-- Table: Carowner
CREATE TABLE Carowner (
    country text NOT NULL,
    year text NOT NULL,
    value int NOT NULL,
    id int NOT NULL,
    Unemployed_id int NOT NULL,
    CONSTRAINT Car owner_pk PRIMARY KEY (id)
);

-- Table: Unemployed
CREATE TABLE Unemployed (
    id int NOT NULL,
    year int NOT NULL,
    sex text NOT NULL,
    source text NOT NULL,
    value int NOT NULL,
    CONSTRAINT Unemployed_pk PRIMARY KEY (id)
);

-- foreign keys
-- Reference: Carowner_Unemployed (table: Carowner)
ALTER TABLE Carowner ADD CONSTRAINT Carowner_Unemployed FOREIGN KEY Carowner_Unemployed (Unemployed_id)
    REFERENCES Unemployed (id);

-- End of file.

