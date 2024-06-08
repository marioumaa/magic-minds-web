<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240305203337 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande_produit (commande_id INT NOT NULL, produit_id INT NOT NULL, INDEX IDX_DF1E9E8782EA2E54 (commande_id), INDEX IDX_DF1E9E87F347EFB (produit_id), PRIMARY KEY(commande_id, produit_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, description VARCHAR(255) NOT NULL, img1 VARCHAR(255) NOT NULL, img2 VARCHAR(255) NOT NULL, img3 VARCHAR(255) NOT NULL, categorie VARCHAR(255) NOT NULL, quantite INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande_produit ADD CONSTRAINT FK_DF1E9E8782EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_produit ADD CONSTRAINT FK_DF1E9E87F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D79F37AE5');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DE00EE68D');
        $this->addSql('DROP INDEX IDX_6EEAA67DE00EE68D ON commande');
        $this->addSql('DROP INDEX IDX_6EEAA67D79F37AE5 ON commande');
        $this->addSql('ALTER TABLE commande ADD iduser_id INT NOT NULL, ADD totalprice DOUBLE PRECISION NOT NULL, DROP id_product_id, DROP id_user_id, DROP quantite, DROP date');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D786A81FB FOREIGN KEY (iduser_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_6EEAA67D786A81FB ON commande (iduser_id)');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCC7E3D9EF');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCE00EE68D');
        $this->addSql('DROP INDEX IDX_67F068BCC7E3D9EF ON commentaire');
        $this->addSql('DROP INDEX IDX_67F068BCE00EE68D ON commentaire');
        $this->addSql('ALTER TABLE commentaire ADD idproduit_id INT NOT NULL, ADD iduser_id INT NOT NULL, ADD descrip VARCHAR(255) NOT NULL, DROP id_avis_id, DROP id_product_id');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCC29D63C1 FOREIGN KEY (idproduit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC786A81FB FOREIGN KEY (iduser_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_67F068BCC29D63C1 ON commentaire (idproduit_id)');
        $this->addSql('CREATE INDEX IDX_67F068BC786A81FB ON commentaire (iduser_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCC29D63C1');
        $this->addSql('ALTER TABLE commande_produit DROP FOREIGN KEY FK_DF1E9E8782EA2E54');
        $this->addSql('ALTER TABLE commande_produit DROP FOREIGN KEY FK_DF1E9E87F347EFB');
        $this->addSql('DROP TABLE commande_produit');
        $this->addSql('DROP TABLE produit');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D786A81FB');
        $this->addSql('DROP INDEX IDX_6EEAA67D786A81FB ON commande');
        $this->addSql('ALTER TABLE commande ADD id_user_id INT NOT NULL, ADD quantite INT NOT NULL, ADD date DATE NOT NULL, DROP totalprice, CHANGE iduser_id id_product_id INT NOT NULL');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D79F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DE00EE68D FOREIGN KEY (id_product_id) REFERENCES product (id)');
        $this->addSql('CREATE INDEX IDX_6EEAA67DE00EE68D ON commande (id_product_id)');
        $this->addSql('CREATE INDEX IDX_6EEAA67D79F37AE5 ON commande (id_user_id)');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC786A81FB');
        $this->addSql('DROP INDEX IDX_67F068BCC29D63C1 ON commentaire');
        $this->addSql('DROP INDEX IDX_67F068BC786A81FB ON commentaire');
        $this->addSql('ALTER TABLE commentaire ADD id_avis_id INT NOT NULL, ADD id_product_id INT NOT NULL, DROP idproduit_id, DROP iduser_id, DROP descrip');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCC7E3D9EF FOREIGN KEY (id_avis_id) REFERENCES avis (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCE00EE68D FOREIGN KEY (id_product_id) REFERENCES product (id)');
        $this->addSql('CREATE INDEX IDX_67F068BCC7E3D9EF ON commentaire (id_avis_id)');
        $this->addSql('CREATE INDEX IDX_67F068BCE00EE68D ON commentaire (id_product_id)');
    }
}
