<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210514141209 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client CHANGE idPersonne idPersonne INT NOT NULL');
        $this->addSql('ALTER TABLE personne CHANGE type roles VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C74404555C6DE3B4');
        $this->addSql('ALTER TABLE client CHANGE idPersonne idPersonne INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE debugeur DROP FOREIGN KEY FK_98AD88565C6DE3B4');
        $this->addSql('ALTER TABLE developpeur DROP FOREIGN KEY FK_22F0C0C75C6DE3B4');
        $this->addSql('ALTER TABLE personne CHANGE roles type VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`');
    }
}
