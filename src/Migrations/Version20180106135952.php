<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180106135952 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE profile ADD easy_to_relax TINYINT(1) DEFAULT NULL, ADD single TINYINT(1) DEFAULT NULL, ADD living_together TINYINT(1) DEFAULT NULL, ADD married TINYINT(1) DEFAULT NULL, ADD children TINYINT(1) DEFAULT NULL, ADD nine_till_five TINYINT(1) DEFAULT NULL, ADD responsibilities TINYINT(1) DEFAULT NULL, ADD shift_work TINYINT(1) DEFAULT NULL, ADD shift_work_nights TINYINT(1) DEFAULT NULL, ADD freelancer TINYINT(1) DEFAULT NULL, ADD three_breaks TINYINT(1) DEFAULT NULL, ADD jobless TINYINT(1) DEFAULT NULL, ADD temporary_jobless TINYINT(1) DEFAULT NULL, ADD stress_family TINYINT(1) DEFAULT NULL, ADD stress_work TINYINT(1) DEFAULT NULL, ADD daily_traffic_jam TINYINT(1) DEFAULT NULL, ADD want_change_life TINYINT(1) DEFAULT NULL, ADD walking TINYINT(1) DEFAULT NULL, ADD no_full_agenda TINYINT(1) DEFAULT NULL, ADD yoga TINYINT(1) DEFAULT NULL, ADD meditate TINYINT(1) DEFAULT NULL, ADD hobbies VARCHAR(255) DEFAULT NULL, ADD hobbies_open LONGTEXT DEFAULT NULL, ADD no_supplements TINYINT(1) DEFAULT NULL, ADD multivitamins TINYINT(1) DEFAULT NULL, ADD protein_shakes TINYINT(1) DEFAULT NULL, ADD omega_3 TINYINT(1) DEFAULT NULL, ADD other_supplements TINYINT(1) DEFAULT NULL, ADD other_supplements_open LONGTEXT DEFAULT NULL, ADD no_bread TINYINT(1) DEFAULT NULL, ADD some_bread TINYINT(1) DEFAULT NULL, ADD daily_bread TINYINT(1) DEFAULT NULL, ADD some_fat_fish TINYINT(1) DEFAULT NULL, ADD often_fat_fish TINYINT(1) DEFAULT NULL, ADD no_fat_fish TINYINT(1) DEFAULT NULL, ADD only_other_fish TINYINT(1) DEFAULT NULL, ADD seaweed TINYINT(1) DEFAULT NULL, ADD eat_out_often TINYINT(1) DEFAULT NULL, ADD vegetarian TINYINT(1) DEFAULT NULL, ADD allergies_open LONGTEXT DEFAULT NULL, ADD intolerance_open LONGTEXT DEFAULT NULL, ADD bloated TINYINT(1) DEFAULT NULL, ADD full TINYINT(1) DEFAULT NULL, ADD farting TINYINT(1) DEFAULT NULL, ADD burping TINYINT(1) DEFAULT NULL, ADD stomach_acid TINYINT(1) DEFAULT NULL, ADD digestion_open LONGTEXT DEFAULT NULL, ADD swollen_belly TINYINT(1) DEFAULT NULL, ADD obstipation TINYINT(1) DEFAULT NULL, ADD diarrea TINYINT(1) DEFAULT NULL, ADD sported_often TINYINT(1) DEFAULT NULL, ADD group_lessons TINYINT(1) DEFAULT NULL, ADD strength_training TINYINT(1) DEFAULT NULL, ADD cardio_training TINYINT(1) DEFAULT NULL, ADD sports_open LONGTEXT DEFAULT NULL, ADD diet_open LONGTEXT DEFAULT NULL, DROP living_situation, DROP work, DROP stress, DROP chill, DROP free_time, DROP supplements, DROP food, DROP digestion, DROP training, CHANGE allergies allergies VARCHAR(255) DEFAULT NULL, CHANGE intolerance intolerance VARCHAR(255) DEFAULT NULL, CHANGE diet diet VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE profile ADD living_situation LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, ADD work LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, ADD stress LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, ADD chill LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, ADD free_time LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, ADD supplements LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, ADD food LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, ADD digestion LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, ADD training LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, DROP easy_to_relax, DROP single, DROP living_together, DROP married, DROP children, DROP nine_till_five, DROP responsibilities, DROP shift_work, DROP shift_work_nights, DROP freelancer, DROP three_breaks, DROP jobless, DROP temporary_jobless, DROP stress_family, DROP stress_work, DROP daily_traffic_jam, DROP want_change_life, DROP walking, DROP no_full_agenda, DROP yoga, DROP meditate, DROP hobbies, DROP hobbies_open, DROP no_supplements, DROP multivitamins, DROP protein_shakes, DROP omega_3, DROP other_supplements, DROP other_supplements_open, DROP no_bread, DROP some_bread, DROP daily_bread, DROP some_fat_fish, DROP often_fat_fish, DROP no_fat_fish, DROP only_other_fish, DROP seaweed, DROP eat_out_often, DROP vegetarian, DROP allergies_open, DROP intolerance_open, DROP bloated, DROP full, DROP farting, DROP burping, DROP stomach_acid, DROP digestion_open, DROP swollen_belly, DROP obstipation, DROP diarrea, DROP sported_often, DROP group_lessons, DROP strength_training, DROP cardio_training, DROP sports_open, DROP diet_open, CHANGE allergies allergies LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE intolerance intolerance LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE diet diet LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci');
    }
}
