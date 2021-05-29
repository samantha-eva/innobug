<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210529153049 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE personne ADD roles JSON NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C74404555C6DE3B4');
        $this->addSql('ALTER TABLE debugeur DROP FOREIGN KEY FK_98AD88565C6DE3B4');
        $this->addSql('ALTER TABLE developpeur DROP FOREIGN KEY FK_22F0C0C75C6DE3B4');
        $this->addSql('ALTER TABLE personne DROP roles');
    }
}
