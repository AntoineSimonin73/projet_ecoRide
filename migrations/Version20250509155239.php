<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250509155239 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE avis (id INT AUTO_INCREMENT NOT NULL, auteur_id INT NOT NULL, destinataire_id INT DEFAULT NULL, covoiturage_id INT DEFAULT NULL, note INT NOT NULL, commentaires VARCHAR(255) NOT NULL, date DATE NOT NULL, is_valide TINYINT(1) NOT NULL, INDEX IDX_8F91ABF060BB6FE6 (auteur_id), INDEX IDX_8F91ABF0A4F84F6E (destinataire_id), INDEX IDX_8F91ABF062671590 (covoiturage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE covoiturage (id INT AUTO_INCREMENT NOT NULL, chauffeur_id INT NOT NULL, vehicule_id INT NOT NULL, adresse_depart VARCHAR(255) NOT NULL, adresse_arrivee VARCHAR(255) NOT NULL, date_depart DATE NOT NULL, date_arrivee DATE NOT NULL, heure_depart VARCHAR(255) NOT NULL, heure_arrivee VARCHAR(255) NOT NULL, is_ecologique TINYINT(1) NOT NULL, places_restantes INT NOT NULL, prix INT NOT NULL, INDEX IDX_28C79E8985C0B3BE (chauffeur_id), INDEX IDX_28C79E894A4A3511 (vehicule_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE preference (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT DEFAULT NULL, type VARCHAR(255) NOT NULL, accepte TINYINT(1) NOT NULL, INDEX IDX_5D69B053FB88E14F (utilisateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE vehicule (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT DEFAULT NULL, marque VARCHAR(255) NOT NULL, modele VARCHAR(255) NOT NULL, couleur VARCHAR(255) NOT NULL, energie VARCHAR(255) NOT NULL, places_dispo INT NOT NULL, immatriculation VARCHAR(10) NOT NULL, date_premiere_immatriculation DATE NOT NULL, INDEX IDX_292FFF1DFB88E14F (utilisateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF060BB6FE6 FOREIGN KEY (auteur_id) REFERENCES utilisateur (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0A4F84F6E FOREIGN KEY (destinataire_id) REFERENCES utilisateur (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF062671590 FOREIGN KEY (covoiturage_id) REFERENCES covoiturage (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE covoiturage ADD CONSTRAINT FK_28C79E8985C0B3BE FOREIGN KEY (chauffeur_id) REFERENCES utilisateur (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE covoiturage ADD CONSTRAINT FK_28C79E894A4A3511 FOREIGN KEY (vehicule_id) REFERENCES vehicule (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE preference ADD CONSTRAINT FK_5D69B053FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1DFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE utilisateur ADD role_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B3D60322AC FOREIGN KEY (role_id) REFERENCES role (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_1D1C63B3D60322AC ON utilisateur (role_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B3D60322AC
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF060BB6FE6
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0A4F84F6E
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF062671590
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE covoiturage DROP FOREIGN KEY FK_28C79E8985C0B3BE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE covoiturage DROP FOREIGN KEY FK_28C79E894A4A3511
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE preference DROP FOREIGN KEY FK_5D69B053FB88E14F
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1DFB88E14F
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE avis
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE covoiturage
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE preference
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE role
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE vehicule
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_1D1C63B3D60322AC ON utilisateur
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE utilisateur DROP role_id
        SQL);
    }
}
