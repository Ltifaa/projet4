<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230601100854 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, image_name VARCHAR(255) NOT NULL, description VARCHAR(2000) NOT NULL, slug VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie_sponsor (categorie_id INT NOT NULL, sponsor_id INT NOT NULL, INDEX IDX_DE0F6776BCF5E72D (categorie_id), INDEX IDX_DE0F677612F7FB51 (sponsor_id), PRIMARY KEY(categorie_id, sponsor_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sponsor (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, image_name VARCHAR(255) DEFAULT NULL, site_web VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, first_name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) DEFAULT NULL, delivery DATE DEFAULT NULL, slug VARCHAR(255) NOT NULL, image_name VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_video (user_id INT NOT NULL, video_id INT NOT NULL, INDEX IDX_9E052174A76ED395 (user_id), INDEX IDX_9E05217429C1004E (video_id), PRIMARY KEY(user_id, video_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE video (id INT AUTO_INCREMENT NOT NULL, categorie_id INT DEFAULT NULL, relation_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', sponsor VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) NOT NULL, INDEX IDX_7CC7DA2CBCF5E72D (categorie_id), INDEX IDX_7CC7DA2C3256915B (relation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE categorie_sponsor ADD CONSTRAINT FK_DE0F6776BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categorie_sponsor ADD CONSTRAINT FK_DE0F677612F7FB51 FOREIGN KEY (sponsor_id) REFERENCES sponsor (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_video ADD CONSTRAINT FK_9E052174A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_video ADD CONSTRAINT FK_9E05217429C1004E FOREIGN KEY (video_id) REFERENCES video (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE video ADD CONSTRAINT FK_7CC7DA2CBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE video ADD CONSTRAINT FK_7CC7DA2C3256915B FOREIGN KEY (relation_id) REFERENCES sponsor (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie_sponsor DROP FOREIGN KEY FK_DE0F6776BCF5E72D');
        $this->addSql('ALTER TABLE categorie_sponsor DROP FOREIGN KEY FK_DE0F677612F7FB51');
        $this->addSql('ALTER TABLE user_video DROP FOREIGN KEY FK_9E052174A76ED395');
        $this->addSql('ALTER TABLE user_video DROP FOREIGN KEY FK_9E05217429C1004E');
        $this->addSql('ALTER TABLE video DROP FOREIGN KEY FK_7CC7DA2CBCF5E72D');
        $this->addSql('ALTER TABLE video DROP FOREIGN KEY FK_7CC7DA2C3256915B');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE categorie_sponsor');
        $this->addSql('DROP TABLE sponsor');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_video');
        $this->addSql('DROP TABLE video');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
