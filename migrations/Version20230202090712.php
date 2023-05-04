<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230202090712 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE articles (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE articles_categorie (articles_id INT NOT NULL, categorie_id INT NOT NULL, INDEX IDX_B4BEBBB81EBAF6CC (articles_id), INDEX IDX_B4BEBBB8BCF5E72D (categorie_id), PRIMARY KEY(articles_id, categorie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE articles_categorie ADD CONSTRAINT FK_B4BEBBB81EBAF6CC FOREIGN KEY (articles_id) REFERENCES articles (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE articles_categorie ADD CONSTRAINT FK_B4BEBBB8BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE articles_categorie DROP FOREIGN KEY FK_B4BEBBB81EBAF6CC');
        $this->addSql('ALTER TABLE articles_categorie DROP FOREIGN KEY FK_B4BEBBB8BCF5E72D');
        $this->addSql('DROP TABLE articles');
        $this->addSql('DROP TABLE articles_categorie');
    }
}
