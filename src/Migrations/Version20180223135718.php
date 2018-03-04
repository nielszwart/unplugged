<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180223135718 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE genblueprint (id INT AUTO_INCREMENT NOT NULL, date_changed DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE account ADD genblueprint_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE account ADD CONSTRAINT FK_7D3656A4C9B7EE2E FOREIGN KEY (genblueprint_id) REFERENCES genblueprint (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7D3656A4C9B7EE2E ON account (genblueprint_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE account DROP FOREIGN KEY FK_7D3656A4C9B7EE2E');
        $this->addSql('DROP TABLE genblueprint');
        $this->addSql('DROP INDEX UNIQ_7D3656A4C9B7EE2E ON account');
        $this->addSql('ALTER TABLE account DROP genblueprint_id');
    }
}
