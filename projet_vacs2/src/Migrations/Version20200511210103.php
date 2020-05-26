<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200511210103 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE referentiel (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, libelle VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE referentiel_candidature (referentiel_id INT NOT NULL, candidature_id INT NOT NULL, INDEX IDX_595C4652805DB139 (referentiel_id), INDEX IDX_595C4652B6121583 (candidature_id), PRIMARY KEY(referentiel_id, candidature_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE referentiel_candidature ADD CONSTRAINT FK_595C4652805DB139 FOREIGN KEY (referentiel_id) REFERENCES referentiel (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE referentiel_candidature ADD CONSTRAINT FK_595C4652B6121583 FOREIGN KEY (candidature_id) REFERENCES candidature (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE referentiel_candidature DROP FOREIGN KEY FK_595C4652805DB139');
        $this->addSql('DROP TABLE referentiel');
        $this->addSql('DROP TABLE referentiel_candidature');
    }
}
