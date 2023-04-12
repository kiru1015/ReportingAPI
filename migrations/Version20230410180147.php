<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230410180147 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

//        $this->addSql('ALTER TABLE job DROP FOREIGN KEY FK_FBD8E0F8549213EC');
//        $this->addSql('ALTER TABLE job DROP FOREIGN KEY FK_FBD8E0F8A76ED395');
//        $this->addSql('DROP INDEX UNIQ_FBD8E0F8549213EC ON job');
//        $this->addSql('DROP INDEX UNIQ_FBD8E0F8A76ED395 ON job');
//        $this->addSql('ALTER TABLE job ADD job_id_id INT NOT NULL, DROP property_id, DROP user_id, DROP job_id');
//        $this->addSql('ALTER TABLE job ADD CONSTRAINT FK_FBD8E0F87E182327 FOREIGN KEY (job_id_id) REFERENCES property (id)');
//        $this->addSql('CREATE UNIQUE INDEX UNIQ_FBD8E0F87E182327 ON job (job_id_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

//        $this->addSql('ALTER TABLE job DROP FOREIGN KEY FK_FBD8E0F87E182327');
//        $this->addSql('DROP INDEX UNIQ_FBD8E0F87E182327 ON job');
//        $this->addSql('ALTER TABLE job ADD user_id INT NOT NULL, ADD job_id VARCHAR(5) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE job_id_id property_id INT NOT NULL');
//        $this->addSql('ALTER TABLE job ADD CONSTRAINT FK_FBD8E0F8549213EC FOREIGN KEY (property_id) REFERENCES property (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
//        $this->addSql('ALTER TABLE job ADD CONSTRAINT FK_FBD8E0F8A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
//        $this->addSql('CREATE UNIQUE INDEX UNIQ_FBD8E0F8549213EC ON job (property_id)');
//        $this->addSql('CREATE UNIQUE INDEX UNIQ_FBD8E0F8A76ED395 ON job (user_id)');
    }
}
