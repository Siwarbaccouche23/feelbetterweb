<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220418101715 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article CHANGE article article VARCHAR(500) DEFAULT \'\'\'non\'\'\' NOT NULL, CHANGE approuver approuver VARCHAR(255) DEFAULT \'\'\'Non\'\'\' NOT NULL');
        $this->addSql('ALTER TABLE commentaire CHANGE IdPatient IdPatient INT DEFAULT NULL, CHANGE idArticle idArticle INT DEFAULT NULL');
        $this->addSql('ALTER TABLE consultation CHANGE idPatient idPatient INT DEFAULT NULL, CHANGE idExpert idExpert INT DEFAULT NULL, CHANGE confirmation confirmation VARCHAR(5) DEFAULT \'\'\'NON\'\'\' NOT NULL');
        $this->addSql('ALTER TABLE evenement CHANGE IdExpert IdExpert INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation CHANGE id_user id_user INT DEFAULT NULL, CHANGE id_event id_event INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article CHANGE article article VARCHAR(500) DEFAULT \'non\' NOT NULL, CHANGE approuver approuver VARCHAR(255) DEFAULT \'Non\' NOT NULL');
        $this->addSql('ALTER TABLE commentaire CHANGE IdPatient IdPatient INT NOT NULL, CHANGE idArticle idArticle INT NOT NULL');
        $this->addSql('ALTER TABLE consultation CHANGE confirmation confirmation VARCHAR(5) DEFAULT \'NON\' NOT NULL, CHANGE idPatient idPatient INT NOT NULL, CHANGE idExpert idExpert INT NOT NULL');
        $this->addSql('ALTER TABLE evenement CHANGE IdExpert IdExpert INT NOT NULL');
        $this->addSql('ALTER TABLE reservation CHANGE id_user id_user INT NOT NULL, CHANGE id_event id_event INT NOT NULL');
    }
}
