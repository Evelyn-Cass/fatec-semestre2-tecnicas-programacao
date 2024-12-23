CREATE TABLE chef (
  idchef INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(100) NULL,
  especialidade VARCHAR(100) NULL,
  PRIMARY KEY(idchef)
);

CREATE TABLE receita (
  idreceita INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  idchef INTEGER UNSIGNED NOT NULL,
  nome VARCHAR(80) NULL,
  descricao TEXT NULL,
  PRIMARY KEY(idreceita),
  INDEX receita_FKIndex1(idchef),
  FOREIGN KEY(idchef)
    REFERENCES chef(idchef)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


