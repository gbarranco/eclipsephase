<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200430192834 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE backups ADD equipment1_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD equipment2_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD equipment3_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD medicine1_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD medicine2_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD network1_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD network2_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD network3_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD network4_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD piloting1_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD piloting2_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD piloting3_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD piloting4_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD art1_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD art2_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD art3_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD art4_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD interest1_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD interest2_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD interest3_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD interest4_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD native_language_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD language1_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD language2_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD language3_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD language4_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD profession1_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD profession2_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD profession3_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD profession4_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD theory1_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD theory2_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD theory3_text VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE backups ADD theory4_text VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE backups DROP equipment1_text');
        $this->addSql('ALTER TABLE backups DROP equipment2_text');
        $this->addSql('ALTER TABLE backups DROP equipment3_text');
        $this->addSql('ALTER TABLE backups DROP medicine1_text');
        $this->addSql('ALTER TABLE backups DROP medicine2_text');
        $this->addSql('ALTER TABLE backups DROP network1_text');
        $this->addSql('ALTER TABLE backups DROP network2_text');
        $this->addSql('ALTER TABLE backups DROP network3_text');
        $this->addSql('ALTER TABLE backups DROP network4_text');
        $this->addSql('ALTER TABLE backups DROP piloting1_text');
        $this->addSql('ALTER TABLE backups DROP piloting2_text');
        $this->addSql('ALTER TABLE backups DROP piloting3_text');
        $this->addSql('ALTER TABLE backups DROP piloting4_text');
        $this->addSql('ALTER TABLE backups DROP art1_text');
        $this->addSql('ALTER TABLE backups DROP art2_text');
        $this->addSql('ALTER TABLE backups DROP art3_text');
        $this->addSql('ALTER TABLE backups DROP art4_text');
        $this->addSql('ALTER TABLE backups DROP interest1_text');
        $this->addSql('ALTER TABLE backups DROP interest2_text');
        $this->addSql('ALTER TABLE backups DROP interest3_text');
        $this->addSql('ALTER TABLE backups DROP interest4_text');
        $this->addSql('ALTER TABLE backups DROP native_language_text');
        $this->addSql('ALTER TABLE backups DROP language1_text');
        $this->addSql('ALTER TABLE backups DROP language2_text');
        $this->addSql('ALTER TABLE backups DROP language3_text');
        $this->addSql('ALTER TABLE backups DROP language4_text');
        $this->addSql('ALTER TABLE backups DROP profession1_text');
        $this->addSql('ALTER TABLE backups DROP profession2_text');
        $this->addSql('ALTER TABLE backups DROP profession3_text');
        $this->addSql('ALTER TABLE backups DROP profession4_text');
        $this->addSql('ALTER TABLE backups DROP theory1_text');
        $this->addSql('ALTER TABLE backups DROP theory2_text');
        $this->addSql('ALTER TABLE backups DROP theory3_text');
        $this->addSql('ALTER TABLE backups DROP theory4_text');
    }
}
