USE profile;

CREATE TABLE user_info (
    fullname VARCHAR(100),
    username VARCHAR(50) UNIQUE,
    psw VARCHAR(255),
    profession VARCHAR(100),
    contact VARCHAR(100)
);
