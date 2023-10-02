<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231002204446 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE spell_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE spell (id INT NOT NULL, name VARCHAR(255) NOT NULL, description TEXT NOT NULL, self_targeting BOOLEAN NOT NULL, damage INT NOT NULL, heal INT NOT NULL, strength_bonus INT NOT NULL, strength_malus INT NOT NULL, dexterity_bonus INT NOT NULL, dexterity_malus INT NOT NULL, constitution_bonus INT NOT NULL, constitution_malus INT NOT NULL, intelligence_bonus INT NOT NULL, intelligence_malus INT NOT NULL, wisdom_bonus INT NOT NULL, wisdom_malus INT NOT NULL, charisma_bonus INT NOT NULL, charisma_malus INT NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE spell_id_seq CASCADE');
        $this->addSql('DROP TABLE spell');
    }
}
