<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180223152801 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE answer ADD PRIMARY KEY (genblueprint_id, question, green, blue, red)');
        $this->addSql('ALTER TABLE answer ADD CONSTRAINT FK_DADD4A25C9B7EE2E FOREIGN KEY (genblueprint_id) REFERENCES genblueprint (id)');
        $this->addSql('CREATE INDEX IDX_DADD4A25C9B7EE2E ON answer (genblueprint_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE answer DROP FOREIGN KEY FK_DADD4A25C9B7EE2E');
        $this->addSql('DROP INDEX IDX_DADD4A25C9B7EE2E ON answer');
        $this->addSql('ALTER TABLE answer DROP PRIMARY KEY');
    }
}
