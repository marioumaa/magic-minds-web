<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240512172625 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE questionFiras (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, `like` INT DEFAULT 0 NOT NULL, `dislike` INT DEFAULT 0 NOT NULL, commentaire VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, color VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reponseFiras (id_reponse INT AUTO_INCREMENT NOT NULL, id INT NOT NULL, fullname VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, INDEX IDX_D46E1D7BBF396750 (id), PRIMARY KEY(id_reponse)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reponseFiras ADD CONSTRAINT FK_D46E1D7BBF396750 FOREIGN KEY (id) REFERENCES questionFiras (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reponseFiras DROP FOREIGN KEY FK_D46E1D7BBF396750');
        $this->addSql('DROP TABLE questionFiras');
        $this->addSql('DROP TABLE reponseFiras');
    }
}
