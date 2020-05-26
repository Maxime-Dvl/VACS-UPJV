<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200511204012 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE paie (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, numsecu VARCHAR(15) DEFAULT NULL, rib VARCHAR(27) DEFAULT NULL, filenumsecu VARCHAR(100) NOT NULL, filerib VARCHAR(100) NOT NULL, filedomicile VARCHAR(100) DEFAULT NULL, fileattestation VARCHAR(100) NOT NULL, file_cni VARCHAR(100) DEFAULT NULL, handicap TINYINT(1) DEFAULT NULL, filehandicap VARCHAR(100) NOT NULL, valide TINYINT(1) DEFAULT NULL, UNIQUE INDEX UNIQ_8A899BAEA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE paie ADD CONSTRAINT FK_8A899BAEA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE paie');
    }
}
