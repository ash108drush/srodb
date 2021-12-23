<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211223075547 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE invcat (id INT AUTO_INCREMENT NOT NULL, invcat SMALLINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE srodbase (id INT AUTO_INCREMENT NOT NULL, invcat_id INT DEFAULT NULL, fio VARCHAR(255) NOT NULL, birth DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', mo SMALLINT NOT NULL, ndog SMALLINT DEFAULT NULL, ddog DATE DEFAULT NULL COMMENT \'(DC2Type:date_immutable)\', dedog DATE DEFAULT NULL COMMENT \'(DC2Type:date_immutable)\', esrn INT DEFAULT NULL, street VARCHAR(255) DEFAULT NULL, house SMALLINT DEFAULT NULL, housepart SMALLINT DEFAULT NULL, flat SMALLINT DEFAULT NULL, cityphone VARCHAR(255) DEFAULT NULL, mobilephone VARCHAR(255) DEFAULT NULL, cat INT DEFAULT NULL, opl VARCHAR(255) DEFAULT NULL, comments VARCHAR(255) DEFAULT NULL, dogclose DATE DEFAULT NULL COMMENT \'(DC2Type:date_immutable)\', numusl VARCHAR(255) DEFAULT NULL, catvoz VARCHAR(255) DEFAULT NULL, commelse VARCHAR(255) DEFAULT NULL, INDEX IDX_48EAC567B7F7C29 (invcat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE srodbase ADD CONSTRAINT FK_48EAC567B7F7C29 FOREIGN KEY (invcat_id) REFERENCES invcat (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE srodbase DROP FOREIGN KEY FK_48EAC567B7F7C29');
        $this->addSql('DROP TABLE invcat');
        $this->addSql('DROP TABLE srodbase');
    }
}
