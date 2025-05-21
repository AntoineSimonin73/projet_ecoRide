<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250519085931 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE covoiturage_preference (covoiturage_id INT NOT NULL, preference_id INT NOT NULL, INDEX IDX_1BD9E40962671590 (covoiturage_id), INDEX IDX_1BD9E409D81022C0 (preference_id), PRIMARY KEY(covoiturage_id, preference_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE covoiturage_preference ADD CONSTRAINT FK_1BD9E40962671590 FOREIGN KEY (covoiturage_id) REFERENCES covoiturage (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE covoiturage_preference ADD CONSTRAINT FK_1BD9E409D81022C0 FOREIGN KEY (preference_id) REFERENCES preference (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE covoiturage DROP preferences
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE covoiturage_preference DROP FOREIGN KEY FK_1BD9E40962671590
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE covoiturage_preference DROP FOREIGN KEY FK_1BD9E409D81022C0
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE covoiturage_preference
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE covoiturage ADD preferences JSON DEFAULT NULL COMMENT '(DC2Type:json)'
        SQL);
    }
}
