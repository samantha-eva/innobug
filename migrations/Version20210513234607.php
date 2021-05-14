<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210513234607 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE debugeur DROP nom, DROP email, DROP password, DROP adresse, DROP telephone, CHANGE idPersonne idPersonne INT NOT NULL');
        $this->addSql('ALTER TABLE personne ADD type VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE debugeur DROP FOREIGN KEY FK_98AD88565C6DE3B4');
        $this->addSql('ALTER TABLE debugeur ADD nom VARCHAR(50) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, ADD email VARCHAR(50) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, ADD password VARCHAR(50) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, ADD adresse VARCHAR(50) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, ADD telephone INT DEFAULT NULL, CHANGE idPersonne idPersonne INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE personne DROP type');
    }
}
