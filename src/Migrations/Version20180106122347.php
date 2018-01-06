<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180106122347 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE profile ADD limits_open LONGTEXT DEFAULT NULL, ADD complaints_open LONGTEXT DEFAULT NULL, ADD fysio_open LONGTEXT DEFAULT NULL, ADD psychic_limits_open LONGTEXT DEFAULT NULL, ADD psychotherapy_open LONGTEXT DEFAULT NULL, ADD eating_open LONGTEXT DEFAULT NULL, ADD operations_open LONGTEXT DEFAULT NULL, ADD medication_open LONGTEXT DEFAULT NULL, DROP goal, CHANGE limits limits VARCHAR(255) DEFAULT NULL, CHANGE complaints complaints VARCHAR(255) DEFAULT NULL, CHANGE fysio fysio VARCHAR(255) DEFAULT NULL, CHANGE psychic_limits psychic_limits VARCHAR(255) DEFAULT NULL, CHANGE psychotherapy psychotherapy VARCHAR(255) DEFAULT NULL, CHANGE eating eating VARCHAR(255) DEFAULT NULL, CHANGE operations operations VARCHAR(255) DEFAULT NULL, CHANGE medication medication VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE profile ADD goal VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, DROP limits_open, DROP complaints_open, DROP fysio_open, DROP psychic_limits_open, DROP psychotherapy_open, DROP eating_open, DROP operations_open, DROP medication_open, CHANGE limits limits LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE complaints complaints LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE fysio fysio LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE psychic_limits psychic_limits LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE psychotherapy psychotherapy LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE eating eating LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE operations operations LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE medication medication LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci');
    }
}
