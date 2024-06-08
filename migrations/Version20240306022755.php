<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240306022755 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE quiz ADD chapter_id INT DEFAULT NULL, ADD nbquestion INT NOT NULL');
        $this->addSql('ALTER TABLE quiz ADD CONSTRAINT FK_A412FA92579F4768 FOREIGN KEY (chapter_id) REFERENCES ressource (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A412FA92FF7747B4 ON quiz (titre)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A412FA92579F4768 ON quiz (chapter_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE quiz DROP FOREIGN KEY FK_A412FA92579F4768');
        $this->addSql('DROP INDEX UNIQ_A412FA92FF7747B4 ON quiz');
        $this->addSql('DROP INDEX UNIQ_A412FA92579F4768 ON quiz');
        $this->addSql('ALTER TABLE quiz DROP chapter_id, DROP nbquestion');
    }
}
