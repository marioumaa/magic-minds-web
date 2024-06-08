<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240306014928 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE question_enfant DROP FOREIGN KEY FK_33EA23AAC538990E');
        $this->addSql('DROP INDEX IDX_33EA23AAC538990E ON question_enfant');
        $this->addSql('ALTER TABLE question_enfant ADD likes INT DEFAULT 0 NOT NULL, ADD dislikes INT DEFAULT 0 NOT NULL, ADD commentaire VARCHAR(255) NOT NULL, ADD type VARCHAR(255) NOT NULL, ADD color VARCHAR(255) NOT NULL, ADD name VARCHAR(255) NOT NULL, ADD image VARCHAR(255) NOT NULL, DROP id_enfant_id, DROP contenu, DROP titre');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE question_enfant ADD id_enfant_id INT NOT NULL, ADD contenu VARCHAR(255) NOT NULL, ADD titre VARCHAR(255) NOT NULL, DROP likes, DROP dislikes, DROP commentaire, DROP type, DROP color, DROP name, DROP image');
        $this->addSql('ALTER TABLE question_enfant ADD CONSTRAINT FK_33EA23AAC538990E FOREIGN KEY (id_enfant_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_33EA23AAC538990E ON question_enfant (id_enfant_id)');
    }
}
