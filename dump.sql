CREATE DATABASE IF NOT EXISTS portfolio_login;
USE portfolio_login;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Inserção do usuário rafa com senha "rafa123"
INSERT INTO users (username, password) VALUES
('rafa', '$2y$10$KQv7dd7Ye8s.VH4Zgf00VuA0qNEB.ZUew9u1Ldk25ekH1xj0i0QhK');
