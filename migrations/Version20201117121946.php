<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201117121946 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE inscription_solo (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, categorie_id INT NOT NULL, created_at DATETIME NOT NULL, nom_perso_solo VARCHAR(255) NOT NULL, univer_solo VARCHAR(255) NOT NULL, media_solo TINYINT(1) NOT NULL, envoi_media_solo TINYINT(1) NOT NULL, aide_solo TINYINT(1) NOT NULL, accessoire_solo TINYINT(1) NOT NULL, description_accessoire_solo LONGTEXT DEFAULT NULL, infos_solo LONGTEXT DEFAULT NULL, UNIQUE INDEX UNIQ_2EB67FA2A76ED395 (user_id), INDEX IDX_2EB67FA2BCF5E72D (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE inscription_solo ADD CONSTRAINT FK_2EB67FA2A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE inscription_solo ADD CONSTRAINT FK_2EB67FA2BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE categorie DROP slug');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE inscription_solo');
        $this->addSql('ALTER TABLE categorie ADD slug VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
