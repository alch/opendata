<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190209174931 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE territori_ussol (
          ID VARCHAR(64) NOT NULL, 
          ZONA TEXT DEFAULT NULL, 
          CODI_US TEXT DEFAULT NULL, 
          DESCRIPCIO_US TEXT DEFAULT NULL, 
          LAT TEXT DEFAULT NULL, 
          LNG TEXT DEFAULT NULL, 
          WKT TEXT DEFAULT NULL, 
          PRIMARY KEY(ID)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mobilitat_zblava (
          ID VARCHAR(64) NOT NULL, 
          ZONA TEXT DEFAULT NULL, 
          AREA TEXT DEFAULT NULL, 
          PERIMETRE TEXT DEFAULT NULL, 
          AMPLADA TEXT DEFAULT NULL, 
          ALCADA TEXT DEFAULT NULL, 
          LAT TEXT DEFAULT NULL, 
          LNG TEXT DEFAULT NULL, 
          WKT TEXT DEFAULT NULL, 
          PRIMARY KEY(ID)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mobilitat_ptaxi (
          ID VARCHAR(64) NOT NULL, 
          ZONA TEXT DEFAULT NULL, 
          CODI_PARADA INT DEFAULT NULL, 
          DESCRIPCIO_ADRECA TEXT DEFAULT NULL, 
          LAT TEXT DEFAULT NULL, 
          LNG TEXT DEFAULT NULL, 
          WKT TEXT DEFAULT NULL, 
          PRIMARY KEY(ID)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE act_comercial (
          ID VARCHAR(64) NOT NULL, 
          CODI_ACCES VARCHAR(64) DEFAULT NULL, 
          ADRECA TEXT DEFAULT NULL, 
          EPIGRAF_IAE INT DEFAULT NULL, 
          EPIGRAF_DESC TEXT DEFAULT NULL, 
          LAT TEXT DEFAULT NULL, 
          LNG TEXT DEFAULT NULL, 
          WKT TEXT DEFAULT NULL, 
          PRIMARY KEY(ID)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contenidor (
          ID VARCHAR(64) NOT NULL, 
          CODI INT DEFAULT NULL, 
          NOM TEXT DEFAULT NULL, 
          LAT TEXT DEFAULT NULL, 
          LNG TEXT DEFAULT NULL, 
          WKT TEXT DEFAULT NULL, 
          PRIMARY KEY(ID)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE territori_illespob (
          ID VARCHAR(64) NOT NULL, 
          CODI_INE TEXT DEFAULT NULL, 
          NOMBRE_HABITANTS INT DEFAULT NULL, 
          NOMBRE_DONES INT DEFAULT NULL, 
          NOMBRE_HOMES INT DEFAULT NULL, 
          DONES_00_16 INT DEFAULT NULL, 
          HOMES_00_16 INT DEFAULT NULL, 
          DONES_17_29 INT DEFAULT NULL, 
          HOMES_17_29 INT DEFAULT NULL, 
          DONES_30_49 INT DEFAULT NULL, 
          HOMES_30_49 INT DEFAULT NULL, 
          DONES_50_69 INT DEFAULT NULL, 
          HOMES_50_69 INT DEFAULT NULL, 
          DONES_70 INT DEFAULT NULL, 
          HOMES_70 INT DEFAULT NULL, 
          NOMBRE_VEHICLES TEXT DEFAULT NULL, 
          LAT DOUBLE PRECISION DEFAULT NULL, 
          LNG DOUBLE PRECISION DEFAULT NULL, 
          WKT TEXT DEFAULT NULL, 
          PRIMARY KEY(ID)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mobilitat_paradabus (
          ID VARCHAR(64) NOT NULL, 
          CODI_PARADA INT DEFAULT NULL, 
          LINIA TEXT DEFAULT NULL, 
          LAT TEXT DEFAULT NULL, 
          LNG TEXT DEFAULT NULL, 
          WKT TEXT DEFAULT NULL, 
          PRIMARY KEY(ID)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE territori_illesine (
          ID VARCHAR(64) NOT NULL, 
          ZONA TEXT DEFAULT NULL, 
          CODIINE TEXT DEFAULT NULL, 
          DISTRICTE INT DEFAULT NULL, 
          SECCIO INT DEFAULT NULL, 
          ILLA INT DEFAULT NULL, 
          LAT TEXT DEFAULT NULL, 
          LNG TEXT DEFAULT NULL, 
          WKT TEXT DEFAULT NULL, 
          PRIMARY KEY(ID)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mobilitat_ocup2018 (
          ID VARCHAR(64) NOT NULL, 
          CODI_INTERN VARCHAR(64) DEFAULT NULL, 
          TIPUS_OCUPACIO TEXT DEFAULT NULL, 
          DATA_INICI TEXT DEFAULT NULL, 
          DATA_FI TEXT DEFAULT NULL, 
          DURADA INT DEFAULT NULL, 
          LAT DOUBLE PRECISION DEFAULT NULL, 
          LNG DOUBLE PRECISION DEFAULT NULL, 
          WKT TEXT DEFAULT NULL, 
          PRIMARY KEY(ID)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipaments_tots (
          ID VARCHAR(64) NOT NULL, 
          NOM TEXT DEFAULT NULL, 
          ADRECA TEXT DEFAULT NULL, 
          CATEGORIA TEXT DEFAULT NULL, 
          TIPUS TEXT DEFAULT NULL, 
          WKT TEXT DEFAULT NULL, 
          LAT TEXT DEFAULT NULL, 
          LNG TEXT DEFAULT NULL, 
          PRIMARY KEY(ID)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE territori_ussol');
        $this->addSql('DROP TABLE mobilitat_zblava');
        $this->addSql('DROP TABLE mobilitat_ptaxi');
        $this->addSql('DROP TABLE act_comercial');
        $this->addSql('DROP TABLE contenidor');
        $this->addSql('DROP TABLE territori_illespob');
        $this->addSql('DROP TABLE mobilitat_paradabus');
        $this->addSql('DROP TABLE territori_illesine');
        $this->addSql('DROP TABLE mobilitat_ocup2018');
        $this->addSql('DROP TABLE equipaments_tots');
    }
}
