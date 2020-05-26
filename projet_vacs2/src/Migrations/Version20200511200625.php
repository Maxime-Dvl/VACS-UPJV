<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200511200625 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE candidature (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, civilite VARCHAR(10) NOT NULL, nom_naissance VARCHAR(50) NOT NULL, date_naissance DATE NOT NULL, lieu_naissance VARCHAR(30) NOT NULL, dptmt_naissance VARCHAR(30) NOT NULL, pays_naissance VARCHAR(30) NOT NULL, nationalite VARCHAR(30) NOT NULL, adresse VARCHAR(100) NOT NULL, codepostal INT NOT NULL, ville VARCHAR(40) NOT NULL, portable VARCHAR(40) NOT NULL, cv VARCHAR(100) NOT NULL, cni VARCHAR(100) NOT NULL, diplomes VARCHAR(100) NOT NULL, europeen TINYINT(1) NOT NULL, cartesejour VARCHAR(100) NOT NULL, attestation_travail VARCHAR(100) NOT NULL, chk_numsecu TINYINT(1) NOT NULL, chk_compte TINYINT(1) NOT NULL, chk_travaille TINYINT(1) NOT NULL, nb_heure INT DEFAULT NULL, date_fin_contrat DATE DEFAULT NULL, contrat_travail VARCHAR(100) DEFAULT NULL, checkbox_exact TINYINT(1) NOT NULL, checkbox_mobilite TINYINT(1) NOT NULL, statut VARCHAR(30) DEFAULT NULL, date DATETIME DEFAULT NULL, INDEX IDX_E33BD3B8A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B8A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE candidature');
    }
}
