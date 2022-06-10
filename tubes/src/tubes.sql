CREATE TABLE tubes;

CREATE TABLE html (
    id INT PRIMARY KEY AUTO_INCREMENT,
    gambar char(40) NOT NULL,
    judul char(50) NOT NULL,
    keterangan varcar(100),
    author char(35) NOT NULL,
    link char(100) NOT NULL,
    dibuat_dengan char(40) NOT NULL,
    browser_yang_kompatibel char(50) NOT NULL,
    responsive char(4) NOT NULL,
    ketergantungan char(50) NOT NULL,
    bootstrap_versi char(10) NOT NULL
);

CREATE TABLE user (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50),
    paasword VARCHAR(255)
)