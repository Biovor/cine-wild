<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180620140728 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE public_age (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE year_of_production (id INT AUTO_INCREMENT NOT NULL, year INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_films (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE films (id INT AUTO_INCREMENT NOT NULL, picture_id INT DEFAULT NULL, public_age_id INT DEFAULT NULL, year_of_production_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, original_title VARCHAR(255) DEFAULT NULL, relase_date DATE NOT NULL, duration VARCHAR(255) NOT NULL, synopsie LONGTEXT DEFAULT NULL, lien_ba LONGTEXT DEFAULT NULL, press_note INT DEFAULT NULL, public_note INT DEFAULT NULL, novelty TINYINT(1) NOT NULL, critical LONGTEXT DEFAULT NULL, UNIQUE INDEX UNIQ_CEECCA51EE45BDBF (picture_id), INDEX IDX_CEECCA51CC7162AD (public_age_id), INDEX IDX_CEECCA516E6A696D (year_of_production_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE films_actor (films_id INT NOT NULL, actor_id INT NOT NULL, INDEX IDX_ADA2D487939610EE (films_id), INDEX IDX_ADA2D48710DAF24A (actor_id), PRIMARY KEY(films_id, actor_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE films_director (films_id INT NOT NULL, director_id INT NOT NULL, INDEX IDX_51FD2BFD939610EE (films_id), INDEX IDX_51FD2BFD899FB366 (director_id), PRIMARY KEY(films_id, director_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE films_type_films (films_id INT NOT NULL, type_films_id INT NOT NULL, INDEX IDX_C62806A8939610EE (films_id), INDEX IDX_C62806A85E693712 (type_films_id), PRIMARY KEY(films_id, type_films_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE director (id INT AUTO_INCREMENT NOT NULL, last_name VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, career_year INT DEFAULT NULL, number_films INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE actor (id INT AUTO_INCREMENT NOT NULL, last_name VARCHAR(255) NOT NULL, first_name VARCHAR(255) DEFAULT NULL, career_year INT DEFAULT NULL, number_of_films_played INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE picture (id INT AUTO_INCREMENT NOT NULL, alt VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE films ADD CONSTRAINT FK_CEECCA51EE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id)');
        $this->addSql('ALTER TABLE films ADD CONSTRAINT FK_CEECCA51CC7162AD FOREIGN KEY (public_age_id) REFERENCES public_age (id)');
        $this->addSql('ALTER TABLE films ADD CONSTRAINT FK_CEECCA516E6A696D FOREIGN KEY (year_of_production_id) REFERENCES year_of_production (id)');
        $this->addSql('ALTER TABLE films_actor ADD CONSTRAINT FK_ADA2D487939610EE FOREIGN KEY (films_id) REFERENCES films (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE films_actor ADD CONSTRAINT FK_ADA2D48710DAF24A FOREIGN KEY (actor_id) REFERENCES actor (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE films_director ADD CONSTRAINT FK_51FD2BFD939610EE FOREIGN KEY (films_id) REFERENCES films (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE films_director ADD CONSTRAINT FK_51FD2BFD899FB366 FOREIGN KEY (director_id) REFERENCES director (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE films_type_films ADD CONSTRAINT FK_C62806A8939610EE FOREIGN KEY (films_id) REFERENCES films (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE films_type_films ADD CONSTRAINT FK_C62806A85E693712 FOREIGN KEY (type_films_id) REFERENCES type_films (id) ON DELETE CASCADE');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE films DROP FOREIGN KEY FK_CEECCA51CC7162AD');
        $this->addSql('ALTER TABLE films DROP FOREIGN KEY FK_CEECCA516E6A696D');
        $this->addSql('ALTER TABLE films_type_films DROP FOREIGN KEY FK_C62806A85E693712');
        $this->addSql('ALTER TABLE films_actor DROP FOREIGN KEY FK_ADA2D487939610EE');
        $this->addSql('ALTER TABLE films_director DROP FOREIGN KEY FK_51FD2BFD939610EE');
        $this->addSql('ALTER TABLE films_type_films DROP FOREIGN KEY FK_C62806A8939610EE');
        $this->addSql('ALTER TABLE films_director DROP FOREIGN KEY FK_51FD2BFD899FB366');
        $this->addSql('ALTER TABLE films_actor DROP FOREIGN KEY FK_ADA2D48710DAF24A');
        $this->addSql('ALTER TABLE films DROP FOREIGN KEY FK_CEECCA51EE45BDBF');
        $this->addSql('DROP TABLE public_age');
        $this->addSql('DROP TABLE year_of_production');
        $this->addSql('DROP TABLE type_films');
        $this->addSql('DROP TABLE films');
        $this->addSql('DROP TABLE films_actor');
        $this->addSql('DROP TABLE films_director');
        $this->addSql('DROP TABLE films_type_films');
        $this->addSql('DROP TABLE director');
        $this->addSql('DROP TABLE actor');
        $this->addSql('DROP TABLE picture');
    }
}
