<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250526102139 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE covoiturage ADD passager_id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE covoiturage ADD CONSTRAINT FK_28C79E8971A51189 FOREIGN KEY (passager_id) REFERENCES utilisateur (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_28C79E8971A51189 ON covoiturage (passager_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE covoiturage DROP FOREIGN KEY FK_28C79E8971A51189
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_28C79E8971A51189 ON covoiturage
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE covoiturage DROP passager_id
        SQL);
    }
}
