<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190209163230 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE territori_ussol CHANGE ID ID VARCHAR(64) NOT NULL');
        $this->addSql('ALTER TABLE mobilitat_zblava CHANGE ID ID VARCHAR(64) NOT NULL');
        $this->addSql('ALTER TABLE mobilitat_ptaxi CHANGE ID ID VARCHAR(64) NOT NULL');
        $this->addSql('ALTER TABLE act_comercial CHANGE ID ID VARCHAR(64) NOT NULL');
        $this->addSql('ALTER TABLE contenidor CHANGE ID ID VARCHAR(64) NOT NULL');
        $this->addSql('ALTER TABLE territori_illespob CHANGE ID ID VARCHAR(64) NOT NULL');
        $this->addSql('ALTER TABLE mobilitat_paradabus CHANGE ID ID VARCHAR(64) NOT NULL');
        $this->addSql('ALTER TABLE territori_illesine CHANGE ID ID VARCHAR(64) NOT NULL');
        $this->addSql('ALTER TABLE mobilitat_ocup2018 CHANGE ID ID VARCHAR(64) NOT NULL');
        $this->addSql('ALTER TABLE equipaments_tots CHANGE ID ID VARCHAR(64) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE act_comercial CHANGE ID ID VARCHAR(64) NOT NULL COLLATE utf8mb4_general_ci');
        $this->addSql('ALTER TABLE contenidor CHANGE ID ID VARCHAR(64) NOT NULL COLLATE utf8mb4_general_ci');
        $this->addSql('ALTER TABLE equipaments_tots CHANGE ID ID VARCHAR(64) NOT NULL COLLATE utf8mb4_general_ci');
        $this->addSql('ALTER TABLE mobilitat_ocup2018 CHANGE ID ID VARCHAR(64) NOT NULL COLLATE utf8mb4_general_ci');
        $this->addSql('ALTER TABLE mobilitat_paradabus CHANGE ID ID VARCHAR(64) NOT NULL COLLATE utf8mb4_general_ci');
        $this->addSql('ALTER TABLE mobilitat_ptaxi CHANGE ID ID VARCHAR(64) NOT NULL COLLATE utf8mb4_general_ci');
        $this->addSql('ALTER TABLE mobilitat_zblava CHANGE ID ID VARCHAR(64) NOT NULL COLLATE utf8mb4_general_ci');
        $this->addSql('ALTER TABLE territori_illesine CHANGE ID ID VARCHAR(64) NOT NULL COLLATE utf8mb4_general_ci');
        $this->addSql('ALTER TABLE territori_illespob CHANGE ID ID VARCHAR(64) NOT NULL COLLATE utf8mb4_general_ci');
        $this->addSql('ALTER TABLE territori_ussol CHANGE ID ID VARCHAR(64) NOT NULL COLLATE utf8mb4_general_ci');
    }
}
