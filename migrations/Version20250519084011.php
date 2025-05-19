<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250519084011 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE covoiturage DROP preference, DROP preference_acceptee, CHANGE date_depart date_depart DATETIME NOT NULL, CHANGE date_arrivee date_arrivee DATETIME NOT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE covoiturage ADD preference VARCHAR(255) DEFAULT NULL, ADD preference_acceptee TINYINT(1) DEFAULT NULL, CHANGE date_depart date_depart DATE NOT NULL, CHANGE date_arrivee date_arrivee DATE NOT NULL
        SQL);
    }
}
