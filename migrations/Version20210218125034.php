<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210218125034 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Create the first entity: ResourceLocation';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('CREATE SEQUENCE resource_location_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE resource_location (id INT NOT NULL, name VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, street_address VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, postal_code VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE resource_location_id_seq CASCADE');
        $this->addSql('DROP TABLE resource_location');
    }
}
