<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200501083434 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE player_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE player (id INT NOT NULL, player_name VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_98197A65FC392E35 ON player (player_name)');
        $this->addSql('ALTER TABLE "character" ADD player_id INT NOT NULL');
        $this->addSql('ALTER TABLE "character" ADD CONSTRAINT FK_937AB03499E6F5DF FOREIGN KEY (player_id) REFERENCES player (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_937AB03499E6F5DF ON "character" (player_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE "character" DROP CONSTRAINT FK_937AB03499E6F5DF');
        $this->addSql('DROP SEQUENCE player_id_seq CASCADE');
        $this->addSql('DROP TABLE player');
        $this->addSql('DROP INDEX IDX_937AB03499E6F5DF');
        $this->addSql('ALTER TABLE "character" DROP player_id');
    }
}
