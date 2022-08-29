<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220829132213 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `like` DROP INDEX UNIQ_AC6340B3A76ED395, ADD INDEX IDX_AC6340B3A76ED395 (user_id)');
        $this->addSql('ALTER TABLE `like` DROP is_active');
        $this->addSql('ALTER TABLE user CHANGE token_expire token_expire DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `like` DROP INDEX IDX_AC6340B3A76ED395, ADD UNIQUE INDEX UNIQ_AC6340B3A76ED395 (user_id)');
        $this->addSql('ALTER TABLE `like` ADD is_active TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE token_expire token_expire DATETIME NOT NULL');
    }
}
