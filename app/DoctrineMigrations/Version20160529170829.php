<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160529170829 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE Product (product_id INT AUTO_INCREMENT NOT NULL, user_id BIGINT NOT NULL, date_created DATETIME NOT NULL, product_category_id BIGINT NOT NULL, date_last_modified DATETIME NOT NULL, date_last_emptied DATETIME NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, short_description VARCHAR(512) NOT NULL, click_count INT NOT NULL, keywords VARCHAR(255) NOT NULL, status SMALLINT NOT NULL, slug VARCHAR(255) NOT NULL, is_cod TINYINT(1) NOT NULL, is_free_shipping TINYINT(1) NOT NULL, PRIMARY KEY(product_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE Product');
    }
}
