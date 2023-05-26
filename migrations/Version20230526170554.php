<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230526170554 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie_sponsor (categorie_id INT NOT NULL, sponsor_id INT NOT NULL, INDEX IDX_DE0F6776BCF5E72D (categorie_id), INDEX IDX_DE0F677612F7FB51 (sponsor_id), PRIMARY KEY(categorie_id, sponsor_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE categorie_sponsor ADD CONSTRAINT FK_DE0F6776BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categorie_sponsor ADD CONSTRAINT FK_DE0F677612F7FB51 FOREIGN KEY (sponsor_id) REFERENCES sponsor (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE video ADD categorie_id INT DEFAULT NULL, ADD relation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE video ADD CONSTRAINT FK_7CC7DA2CBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE video ADD CONSTRAINT FK_7CC7DA2C3256915B FOREIGN KEY (relation_id) REFERENCES sponsor (id)');
        $this->addSql('CREATE INDEX IDX_7CC7DA2CBCF5E72D ON video (categorie_id)');
        $this->addSql('CREATE INDEX IDX_7CC7DA2C3256915B ON video (relation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie_sponsor DROP FOREIGN KEY FK_DE0F6776BCF5E72D');
        $this->addSql('ALTER TABLE categorie_sponsor DROP FOREIGN KEY FK_DE0F677612F7FB51');
        $this->addSql('DROP TABLE categorie_sponsor');
        $this->addSql('ALTER TABLE video DROP FOREIGN KEY FK_7CC7DA2CBCF5E72D');
        $this->addSql('ALTER TABLE video DROP FOREIGN KEY FK_7CC7DA2C3256915B');
        $this->addSql('DROP INDEX IDX_7CC7DA2CBCF5E72D ON video');
        $this->addSql('DROP INDEX IDX_7CC7DA2C3256915B ON video');
        $this->addSql('ALTER TABLE video DROP categorie_id, DROP relation_id');
    }
}
