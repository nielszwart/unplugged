<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180103085252 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE profile (id INT AUTO_INCREMENT NOT NULL, date_changed DATETIME NOT NULL, birth_time VARCHAR(255) DEFAULT NULL, weight INT DEFAULT NULL, height INT DEFAULT NULL, gender LONGTEXT DEFAULT NULL, goal VARCHAR(255) DEFAULT NULL, feeling VARCHAR(255) DEFAULT NULL, last_sport VARCHAR(255) DEFAULT NULL, limits LONGTEXT DEFAULT NULL, complaints LONGTEXT DEFAULT NULL, fysio LONGTEXT DEFAULT NULL, psychic_limits LONGTEXT DEFAULT NULL, psychotherapy LONGTEXT DEFAULT NULL, eating LONGTEXT DEFAULT NULL, operations LONGTEXT DEFAULT NULL, medication LONGTEXT DEFAULT NULL, rest LONGTEXT DEFAULT NULL, living_situation LONGTEXT DEFAULT NULL, work LONGTEXT DEFAULT NULL, stress LONGTEXT DEFAULT NULL, chill LONGTEXT DEFAULT NULL, free_time LONGTEXT DEFAULT NULL, supplements LONGTEXT DEFAULT NULL, food LONGTEXT DEFAULT NULL, allergies LONGTEXT DEFAULT NULL, intolerance LONGTEXT DEFAULT NULL, digestion LONGTEXT DEFAULT NULL, training LONGTEXT DEFAULT NULL, diet LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE account ADD profile_id INT DEFAULT NULL, ADD address VARCHAR(255) NOT NULL, ADD postcode VARCHAR(255) NOT NULL, ADD city VARCHAR(255) NOT NULL, DROP last_name_preposition, DROP gender');
        $this->addSql('ALTER TABLE account ADD CONSTRAINT FK_7D3656A4CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7D3656A4CCFA12B8 ON account (profile_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE account DROP FOREIGN KEY FK_7D3656A4CCFA12B8');
        $this->addSql('DROP TABLE profile');
        $this->addSql('DROP INDEX UNIQ_7D3656A4CCFA12B8 ON account');
        $this->addSql('ALTER TABLE account ADD last_name_preposition VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, ADD gender VARCHAR(1) NOT NULL COLLATE utf8_unicode_ci, DROP profile_id, DROP address, DROP postcode, DROP city');
    }
}
