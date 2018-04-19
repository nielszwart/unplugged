<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180419093945 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE physical_test (id INT AUTO_INCREMENT NOT NULL, genblueprint_id INT DEFAULT NULL, bicep_curl_max INT DEFAULT NULL, bicep_curl_80 INT DEFAULT NULL, tricep_extension_max INT DEFAULT NULL, tricep_extension_80 INT DEFAULT NULL, leg_extension_max INT DEFAULT NULL, leg_extension_80 INT DEFAULT NULL, leg_curl_max INT DEFAULT NULL, leg_curl_80 INT DEFAULT NULL, chest_press_max INT DEFAULT NULL, chest_press_80 INT DEFAULT NULL, lat_pulley_max INT DEFAULT NULL, lat_pulley_80 INT DEFAULT NULL, shoulder_press_max INT DEFAULT NULL, shoulder_press_80 INT DEFAULT NULL, waist INT DEFAULT NULL, belly INT DEFAULT NULL, hip INT DEFAULT NULL, upper_arm INT DEFAULT NULL, chest INT DEFAULT NULL, neck INT DEFAULT NULL, upper_leg INT DEFAULT NULL, lower_leg INT DEFAULT NULL, chin INT DEFAULT NULL, cheek INT DEFAULT NULL, armpit_chest INT DEFAULT NULL, tricep INT DEFAULT NULL, bicep INT DEFAULT NULL, back_shoulderblade INT DEFAULT NULL, lower_back INT DEFAULT NULL, torso_upper_right INT DEFAULT NULL, waist_right INT DEFAULT NULL, waist_front_right INT DEFAULT NULL, belly_button INT DEFAULT NULL, knee INT DEFAULT NULL, calf INT DEFAULT NULL, upper_leg_front INT DEFAULT NULL, upper_leg_back INT DEFAULT NULL, UNIQUE INDEX UNIQ_BCE493C0C9B7EE2E (genblueprint_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE physical_test ADD CONSTRAINT FK_BCE493C0C9B7EE2E FOREIGN KEY (genblueprint_id) REFERENCES genblueprint (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE physical_test');
    }
}
