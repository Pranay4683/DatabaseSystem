CREATE TABLE Carowner (
    country text NOT NULL,
    year text NOT NULL,
    value int NOT NULL,
    id int NOT NULL,
    Unemployed_id int NOT NULL,
    CONSTRAINT Carowner_pk PRIMARY KEY (id)
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



start transaction;
SELECT * FROM carowners_ue.unemployed;
update unemployed SET value=30001 where id=5;
SELECT * FROM carowners_ue.unemployed;
rollback;
SELECT * FROM carowners_ue.unemployed;