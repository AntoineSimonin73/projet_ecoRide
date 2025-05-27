<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250527075711 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE covoiturage_passagers (covoiturage_id INT NOT NULL, utilisateur_id INT NOT NULL, INDEX IDX_1B8D425662671590 (covoiturage_id), INDEX IDX_1B8D4256FB88E14F (utilisateur_id), PRIMARY KEY(covoiturage_id, utilisateur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE covoiturage_passagers ADD CONSTRAINT FK_1B8D425662671590 FOREIGN KEY (covoiturage_id) REFERENCES covoiturage (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE covoiturage_passagers ADD CONSTRAINT FK_1B8D4256FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE covoiturage_utilisateur DROP FOREIGN KEY FK_96E46B0DFB88E14F
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE covoiturage_utilisateur DROP FOREIGN KEY FK_96E46B0D62671590
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE covoiturage_utilisateur
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE covoiturage_utilisateur (covoiturage_id INT NOT NULL, utilisateur_id INT NOT NULL, INDEX IDX_96E46B0D62671590 (covoiturage_id), INDEX IDX_96E46B0DFB88E14F (utilisateur_id), PRIMARY KEY(covoiturage_id, utilisateur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE covoiturage_utilisateur ADD CONSTRAINT FK_96E46B0DFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE covoiturage_utilisateur ADD CONSTRAINT FK_96E46B0D62671590 FOREIGN KEY (covoiturage_id) REFERENCES covoiturage (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE covoiturage_passagers DROP FOREIGN KEY FK_1B8D425662671590
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE covoiturage_passagers DROP FOREIGN KEY FK_1B8D4256FB88E14F
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE covoiturage_passagers
        SQL);
    }
}
