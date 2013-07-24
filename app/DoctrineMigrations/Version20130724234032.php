<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20130724234032 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE deskbank ADD floor_id INT DEFAULT NULL");
        $this->addSql("ALTER TABLE deskbank ADD CONSTRAINT FK_727D4B3F854679E2 FOREIGN KEY (floor_id) REFERENCES floor (id)");
        $this->addSql("CREATE INDEX IDX_727D4B3F854679E2 ON deskbank (floor_id)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE deskbank DROP FOREIGN KEY FK_727D4B3F854679E2");
        $this->addSql("DROP INDEX IDX_727D4B3F854679E2 ON deskbank");
        $this->addSql("ALTER TABLE deskbank DROP floor_id");
    }
}
