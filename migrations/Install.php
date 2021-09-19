<?php

namespace app\migrations;

use hyii\migrations\Install as BaseInstallMigration;

class Install extends BaseInstallMigration
{
    /**
     * Calls the Base Install Migration SafeUp which creates a users table and an info table
     *
     * @return bool
     */
    public function safeUp()
    {
        /**
         * Call Base Install Migration, and then call our own
         */
        if (parent::safeUp() === true) {

            /**
             * Example of how to create your own table
             */
            $this->createADemoTable();
        }
        return true;
    }

    /**
     * Calls the Base Install Migration SafeDown which drops the users and info tables
     *
     * @return bool
     */
    public function safeDown()
    {
        /**
         * Call the Base Install Migration, and then call our own
         */
        if (parent::safeDown() === true) {
            $this->dropTable("{{%demo}}");

            return true;
        } else {
            return false;
        }
    }

    /**
     * Create the Demo Table
     */
    private function createDemoTable()
    {
        $this->createTable("{{%accounts}}", [
            'id' => $this->primaryKey(),
            'demoName' => $this->string(100),
            'demoInt' => $this->integer(),
            'demoFloat' => $this->float(),
            'demoEnum' => "ENUM('Y','N') DEFAULT 'N'",
            'demoString' => $this->string(100),
            'demoText' => $this->text(),
            'demoTimestamp' => $this->timestamp()->defaultExpression("CURRENT_TIMESTAMP"),
        ]);
    }

}

