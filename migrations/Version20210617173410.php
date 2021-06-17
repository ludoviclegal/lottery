<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210617173410 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE winner CHANGE lottery_draw_id lottery_draw_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE winner ADD CONSTRAINT FK_CF6600EA6C09D5B FOREIGN KEY (lottery_draw_id) REFERENCES lottery_draw (id)');
        $this->addSql('CREATE INDEX IDX_CF6600EA6C09D5B ON winner (lottery_draw_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE winner DROP FOREIGN KEY FK_CF6600EA6C09D5B');
        $this->addSql('DROP INDEX IDX_CF6600EA6C09D5B ON winner');
        $this->addSql('ALTER TABLE winner CHANGE lottery_draw_id lottery_draw_id INT NOT NULL');
    }
}
