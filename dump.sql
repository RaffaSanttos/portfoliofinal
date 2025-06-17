-- Criação do banco: users.db
CREATE TABLE user (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    logon TEXT NOT NULL UNIQUE,
    password TEXT NOT NULL
);
-- Inserir usuário dono do portfólio (exemplo com email e senha simples)
INSERT INTO user (email, password) VALUES ('seu@email.com', 'senha123');
