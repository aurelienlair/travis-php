CREATE TABLE vehicle(
    oid SERIAL PRIMARY KEY,
    manufactures VARCHAR(255),
    model VARCHAR(100),
    color VARCHAR(50),
);
CREATE TABLE van(
    oid SERIAL PRIMARY KEY,
    manufactures VARCHAR(255),
    model VARCHAR(100),
    color VARCHAR(50),
    wheels smallint,
    capacity smallint
);
CREATE TABLE car(
    oid SERIAL PRIMARY KEY,
    manufactures VARCHAR(255),
    model VARCHAR(100),
    color VARCHAR(50),
    seats smallint
);
