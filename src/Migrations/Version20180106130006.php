<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180106130006 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE profile ADD sleep_well TINYINT(1) DEFAULT NULL, ADD not_falling_asleep TINYINT(1) DEFAULT NULL, ADD awake_often TINYINT(1) DEFAULT NULL, ADD hard_to_awaken TINYINT(1) DEFAULT NULL, ADD hard_to_relax TINYINT(1) DEFAULT NULL, DROP rest');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE profile ADD rest LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, DROP sleep_well, DROP not_falling_asleep, DROP awake_often, DROP hard_to_awaken, DROP hard_to_relax');
    }
}
