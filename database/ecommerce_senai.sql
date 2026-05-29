CREATE DATABASE IF NOT EXISTS `ecommerce_senai`;
USE `ecommerce_senai`;

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nome` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL UNIQUE,
  `senha` VARCHAR(255) NOT NULL,
  `criado_em` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `atualizado_em` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `criado_em`, `atualizado_em`) VALUES
	(1, 'Mariana Alves', 'mariana@email.com', '$2y$12$K1V78Ww9/QfLqYjE0b.S6OQpXq9D4JgJ2hDkG4P1Rk9Y0OqP1q2y6', DATE_SUB(NOW(), INTERVAL 60 DAY), DATE_SUB(NOW(), INTERVAL 60 DAY)),
	(2, 'Lucas Silva', 'lucas@email.com', '$2y$12$K1V78Ww9/QfLqYjE0b.S6OQpXq9D4JgJ2hDkG4P1Rk9Y0OqP1q2y6', DATE_SUB(NOW(), INTERVAL 45 DAY), DATE_SUB(NOW(), INTERVAL 45 DAY)),
	(3, 'Rafaela Costa', 'rafaela@email.com', '$2y$12$K1V78Ww9/QfLqYjE0b.S6OQpXq9D4JgJ2hDkG4P1Rk9Y0OqP1q2y6', DATE_SUB(NOW(), INTERVAL 30 DAY), DATE_SUB(NOW(), INTERVAL 30 DAY)),
	(4, 'Pedro Lima', 'pedro@email.com', '$2y$12$K1V78Ww9/QfLqYjE0b.S6OQpXq9D4JgJ2hDkG4P1Rk9Y0OqP1q2y6', DATE_SUB(NOW(), INTERVAL 15 DAY), DATE_SUB(NOW(), INTERVAL 15 DAY));

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nome` VARCHAR(255) NOT NULL,
  `preco` DECIMAL(10,2) NOT NULL,
  `imagem` VARCHAR(255) DEFAULT NULL,
  `tag` VARCHAR(255) DEFAULT NULL,
  `meta_1` VARCHAR(255) DEFAULT NULL,
  `meta_2` VARCHAR(255) DEFAULT NULL,
  `categoria` VARCHAR(255) DEFAULT NULL,
  `estoque` INT NOT NULL DEFAULT 0,
  `sku` VARCHAR(255) DEFAULT NULL,
  `descricao` TEXT DEFAULT NULL,
  `criado_em` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `atualizado_em` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `produtos` (`id`, `nome`, `preco`, `imagem`, `tag`, `meta_1`, `meta_2`, `categoria`, `estoque`, `sku`, `descricao`, `criado_em`, `atualizado_em`) VALUES
	(1, 'iphone 14', 29.99, 'product1.svg', 'iOS 17', '128GB', 'Frete grátis', 'Tech', 120, 'IPHONE-14-128', 'Design elegante, tela de alta resolução e processador extremamente rápido. Excelente custo-benefício.', NOW(), NOW()),
	(2, 'iphone 14 Pro', 49.99, 'product2.svg', 'Premium', '256GB', '12x sem juros', 'Tech', 54, 'IPHONE-14P-256', 'A câmera de 48 megapixels e a tela Dynamic Island tornam este smartphone a escolha ideal para profissionais.', NOW(), NOW()),
	(3, 'iphone 14 Pro Max', 59.99, 'product3.svg', 'Destaque', '256GB', 'Bateria 100%', 'Tech', 32, 'IPHONE-14PM-256', 'Bateria gigante e a maior tela da linha, o iPhone 14 Pro Max entrega o máximo de potência e autonomia.', NOW(), NOW()),
	(4, 'iphone 15', 19.99, 'product1.svg', 'Lancamento', '128GB', 'Dynamic Island', 'Tech', 87, 'IPHONE-15-128', 'A nova geração do clássico. Agora com tela Dynamic Island e conexões universais USB-C.', NOW(), NOW()),
	(5, 'iphone 15 pro Max', 19.99, 'product1.svg', 'Titanio', '512GB', 'Garantia 1 ano', 'Tech', 15, 'IPHONE-15PM-512', 'O topo de linha com corpo em titânio aeroespacial. Mais leve e incrivelmente mais resistente.', NOW(), NOW()),
	(6, 'iphone 15 Pro', 29.99, 'product2.svg', 'Mais vendido', '128GB', 'Envio imediato', 'Tech', 45, 'IPHONE-15P-128', 'Processador A17 Pro avançado para jogos e fotos cinematográficas.', NOW(), NOW()),
	(7, 'iphone 16 Pro Max', 69.99, 'product3.svg', 'Pre-venda', '1TB', 'Brinde exclusivo', 'Tech', 5, 'IPHONE-16PM-1T', 'A nova joia da tecnologia. Adquira antes de todo mundo e ganhe brindes exclusivos na pré-venda.', NOW(), NOW()),
	(8, 'iphone 17 Pro Max', 69.99, 'product3.svg', 'Pre-venda', '1TB', 'Brinde exclusivo', 'Tech', 2, 'IPHONE-17PM-1T', 'Visualizado no futuro. Reserve o iPhone do próximo ano com exclusividade absoluta.', NOW(), NOW());
