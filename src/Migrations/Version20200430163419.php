<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200430163419 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE backups_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE player_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE "character_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE backups (id INT NOT NULL, playable_character_id INT NOT NULL, backup_date VARCHAR(255) NOT NULL, base_cog INT NOT NULL, base_coo INT NOT NULL, base_int INT NOT NULL, base_ref INT NOT NULL, base_ast INT NOT NULL, base_som INT NOT NULL, base_vol INT NOT NULL, bonus_cog INT NOT NULL, bonus_coo INT NOT NULL, bonus_int INT NOT NULL, bonus_ref INT NOT NULL, bonus_ast INT NOT NULL, bonus_som INT NOT NULL, bonus_vol INT NOT NULL, audacity INT NOT NULL, speed INT NOT NULL, stress INT DEFAULT NULL, trauma INT DEFAULT NULL, trauma_text TEXT DEFAULT NULL, base_dispersal_weapons INT DEFAULT NULL, bonus_dispersal_weapons INT DEFAULT NULL, base_exotic_rifles INT DEFAULT NULL, bonus_exotic_rifles INT DEFAULT NULL, base_guided_weapons INT DEFAULT NULL, bonus_guided_weapons INT DEFAULT NULL, base_ray_weapons INT DEFAULT NULL, bonus_ray_weapons INT DEFAULT NULL, base_kinetic_weapons INT DEFAULT NULL, bonus_kinetic_weapons INT DEFAULT NULL, base_jet_weapons INT DEFAULT NULL, bonus_jet_weapons INT DEFAULT NULL, base_blunt_weapons INT DEFAULT NULL, bonus_blunt_weapons INT DEFAULT NULL, base_melee_weapons INT DEFAULT NULL, bonus_melee_weapons INT DEFAULT NULL, base_edged_weapons INT DEFAULT NULL, bonus_edged_weapons INT DEFAULT NULL, base_non_armed_fight INT DEFAULT NULL, bonus_non_armed_fight INT DEFAULT NULL, base_mounted_weapons INT DEFAULT NULL, bonus_mounted_weapons INT DEFAULT NULL, base_evasion INT DEFAULT NULL, bonus_evasion INT DEFAULT NULL, base_free_fall INT DEFAULT NULL, bonus_free_fall INT DEFAULT NULL, base_disguise INT DEFAULT NULL, bonus_disguise INT DEFAULT NULL, base_robbery INT DEFAULT NULL, bonus_robbery INT DEFAULT NULL, base_infiltration INT DEFAULT NULL, bonus_infiltration INT DEFAULT NULL, base_climbing INT DEFAULT NULL, bonus_climbing INT DEFAULT NULL, base_swimming INT DEFAULT NULL, bonus_swimming INT DEFAULT NULL, base_parkour INT DEFAULT NULL, bonus_parkour INT DEFAULT NULL, base_flight INT DEFAULT NULL, bonus_flight INT DEFAULT NULL, base_demolition INT DEFAULT NULL, bonus_demolition INT DEFAULT NULL, base_infosec INT DEFAULT NULL, bonus_infosec INT DEFAULT NULL, base_interface INT DEFAULT NULL, bonus_interface INT DEFAULT NULL, base_equipment1 INT DEFAULT NULL, bonus_equipment1 INT DEFAULT NULL, base_equipment2 INT DEFAULT NULL, bonus_equipment2 INT DEFAULT NULL, base_equipment3 INT DEFAULT NULL, bonus_equipment3 INT DEFAULT NULL, base_medicine1 INT DEFAULT NULL, bonus_medicine1 INT DEFAULT NULL, base_medicine2 INT DEFAULT NULL, bonus_medicine2 INT DEFAULT NULL, base_programming INT DEFAULT NULL, bonus_programming INT DEFAULT NULL, base_search INT DEFAULT NULL, bonus_search INT DEFAULT NULL, base_psycho_surgery INT DEFAULT NULL, bonus_psycho_surgery INT DEFAULT NULL, base_excavation INT DEFAULT NULL, bonus_excavation INT DEFAULT NULL, base_investigation INT DEFAULT NULL, bonus_investigation INT DEFAULT NULL, base_navigation INT DEFAULT NULL, bonus_navigation INT DEFAULT NULL, base_perception INT DEFAULT NULL, bonus_perception INT DEFAULT NULL, base_psi_assault INT DEFAULT NULL, bonus_psi_assault INT DEFAULT NULL, base_control INT DEFAULT NULL, bonus_control INT DEFAULT NULL, base_sensation INT DEFAULT NULL, bonus_sensation INT DEFAULT NULL, base_animal_control INT DEFAULT NULL, bonus_animal_control INT DEFAULT NULL, base_imposture INT DEFAULT NULL, bonus_imposture INT DEFAULT NULL, base_intimidation INT DEFAULT NULL, bonus_intimidation INT DEFAULT NULL, base_kinesics INT DEFAULT NULL, bonus_kinesics INT DEFAULT NULL, base_persuasion INT DEFAULT NULL, bonus_persuasion INT DEFAULT NULL, base_protocol INT DEFAULT NULL, bonus_protocol INT DEFAULT NULL, base_network1 INT DEFAULT NULL, bonus_network1 INT DEFAULT NULL, base_network2 INT DEFAULT NULL, bonus_network2 INT DEFAULT NULL, base_network3 INT DEFAULT NULL, bonus_network3 INT DEFAULT NULL, base_network4 INT DEFAULT NULL, bonus_network4 INT DEFAULT NULL, base_subterfuge INT DEFAULT NULL, bonus_subterfuge INT DEFAULT NULL, base_piloting1 INT DEFAULT NULL, bonus_piloting1 INT DEFAULT NULL, base_piloting2 INT DEFAULT NULL, bonus_piloting2 INT DEFAULT NULL, base_piloting3 INT DEFAULT NULL, bonus_piloting3 INT DEFAULT NULL, base_piloting4 INT DEFAULT NULL, bonus_piloting4 INT DEFAULT NULL, base_art1 INT DEFAULT NULL, bonus_art1 INT DEFAULT NULL, base_art2 INT DEFAULT NULL, bonus_art2 INT DEFAULT NULL, base_art3 INT DEFAULT NULL, bonus_art3 INT DEFAULT NULL, bonus_art4 INT DEFAULT NULL, base_art4 INT DEFAULT NULL, base_interest1 INT DEFAULT NULL, bonus_interest1 INT DEFAULT NULL, base_interest2 INT DEFAULT NULL, bonus_interest2 INT DEFAULT NULL, base_interest3 INT DEFAULT NULL, bonus_interest3 INT DEFAULT NULL, base_interest4 INT DEFAULT NULL, bonus_interest4 INT DEFAULT NULL, base_native_language INT DEFAULT NULL, bonus_native_language INT DEFAULT NULL, base_language1 INT DEFAULT NULL, bonus_language1 INT DEFAULT NULL, base_language2 INT DEFAULT NULL, bonus_language2 INT DEFAULT NULL, base_language3 INT DEFAULT NULL, bonus_language3 INT DEFAULT NULL, base_language4 INT DEFAULT NULL, bonus_language4 INT DEFAULT NULL, base_profession1 INT DEFAULT NULL, bonus_profession1 INT DEFAULT NULL, base_profession2 INT DEFAULT NULL, bonus_profession2 INT DEFAULT NULL, base_profession3 INT DEFAULT NULL, bonus_profession3 INT DEFAULT NULL, base_profession4 INT DEFAULT NULL, bonus_profession4 INT DEFAULT NULL, base_theory1 INT DEFAULT NULL, bonus_theory1 INT DEFAULT NULL, base_theory2 INT DEFAULT NULL, bonus_theory2 INT DEFAULT NULL, base_theory3 INT DEFAULT NULL, bonus_theory3 INT DEFAULT NULL, base_theory4 INT DEFAULT NULL, bonus_theory4 INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_C451D01919F047CD ON backups (playable_character_id)');
        $this->addSql('CREATE TABLE player (id INT NOT NULL, player_name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE "character" (id INT NOT NULL, player_id INT NOT NULL, character_name VARCHAR(255) NOT NULL, background TEXT DEFAULT NULL, faction VARCHAR(255) DEFAULT NULL, sexual_identity VARCHAR(255) NOT NULL, age INT DEFAULT NULL, audacity_points INT NOT NULL, xp INT NOT NULL, a_rep INT NOT NULL, g_rep INT NOT NULL, c_rep INT NOT NULL, i_rep INT NOT NULL, e_rep INT NOT NULL, r_rep INT NOT NULL, f_rep INT NOT NULL, attributes TEXT DEFAULT NULL, id_infos TEXT DEFAULT NULL, psi_passes TEXT DEFAULT NULL, notes TEXT DEFAULT NULL, motivations TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_937AB03499E6F5DF ON "character" (player_id)');
        $this->addSql('ALTER TABLE backups ADD CONSTRAINT FK_C451D01919F047CD FOREIGN KEY (playable_character_id) REFERENCES "character" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE "character" ADD CONSTRAINT FK_937AB03499E6F5DF FOREIGN KEY (player_id) REFERENCES player (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE "character" DROP CONSTRAINT FK_937AB03499E6F5DF');
        $this->addSql('ALTER TABLE backups DROP CONSTRAINT FK_C451D01919F047CD');
        $this->addSql('DROP SEQUENCE backups_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE player_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE "character_id_seq" CASCADE');
        $this->addSql('DROP TABLE backups');
        $this->addSql('DROP TABLE player');
        $this->addSql('DROP TABLE "character"');
    }
}
