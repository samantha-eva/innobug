<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210512212909 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bug CHANGE idBug idBug INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE client CHANGE idPersonne idPersonne INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE debugeur ADD nom VARCHAR(50) NOT NULL, ADD email VARCHAR(50) DEFAULT NULL, ADD password VARCHAR(50) DEFAULT NULL, ADD adresse VARCHAR(50) DEFAULT NULL, ADD telephone INT DEFAULT NULL, CHANGE idPersonne idPersonne INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE developpeur CHANGE idPersonne idPersonne INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE niveau_bug CHANGE idNiveau idNiveau INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE personne CHANGE idPersonne idPersonne INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE piece_jointe CHANGE idPj idPj INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE projet CHANGE Id_Projet Id_Projet INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE rapport CHANGE idRapport idRapport INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE statut CHANGE idStatut idStatut INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE ticket CHANGE idTicket idTicket INT AUTO_INCREMENT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bug CHANGE idBug idBug INT NOT NULL');
        $this->addSql('ALTER TABLE client CHANGE idPersonne idPersonne INT NOT NULL');
        $this->addSql('ALTER TABLE debugeur DROP nom, DROP email, DROP password, DROP adresse, DROP telephone, CHANGE idPersonne idPersonne INT NOT NULL');
        $this->addSql('ALTER TABLE developpeur CHANGE idPersonne idPersonne INT NOT NULL');
        $this->addSql('ALTER TABLE niveau_bug CHANGE idNiveau idNiveau INT NOT NULL');
        $this->addSql('ALTER TABLE personne CHANGE idPersonne idPersonne INT NOT NULL');
        $this->addSql('ALTER TABLE piece_jointe CHANGE idPj idPj INT NOT NULL');
        $this->addSql('ALTER TABLE projet CHANGE Id_Projet Id_Projet INT NOT NULL');
        $this->addSql('ALTER TABLE rapport CHANGE idRapport idRapport INT NOT NULL');
        $this->addSql('ALTER TABLE statut CHANGE idStatut idStatut INT NOT NULL');
        $this->addSql('ALTER TABLE ticket CHANGE idTicket idTicket INT NOT NULL');
    }
}
