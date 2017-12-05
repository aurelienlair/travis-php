CREATE TABLE Vehicle(
    oid SERIAL PRIMARY KEY,
    manufactures VARCHAR(255),
    model VARCHAR(100),
    color VARCHAR(50),
);
CREATE TABLE Van(
    oid SERIAL PRIMARY KEY,
    manufactures VARCHAR(255),
    model VARCHAR(100),
    color VARCHAR(50),
    wheels smallint,
    capacity smallint
);
CREATE TABLE Car(
    oid SERIAL PRIMARY KEY,
    manufactures VARCHAR(255),
    model VARCHAR(100),
    color VARCHAR(50),
    seats smallint
);
