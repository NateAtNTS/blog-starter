<?php

namespace app\controllers\console;

use hyii;
use hyii\console\controllers\InstallController as BaseInstall;
use app\migrations\Install;
use yii\console\ExitCode;

class InstallController extends BaseInstall
{
    /**
     * Installs this App
     * @param bool $bUseBaseInstallMigration
     *
     * @return int
     */
    public function actionIndex($bUseBaseInstallMigration=false)
    {
        /**
         * Run parent action, but don't use the parent install migration
         */
        parent::actionIndex($bUseBaseInstallMigration);

        /**
         * Run our own install migration for this app so we can install our own tables
         */
        $installMigration = new \hyii\migrations\Install();
        $result = $installMigration->safeUp();

        if ($result) {
            hyii::_console("Installation Done! ");
        } else {
            hyii::_console("Installation Failed!");
        }

        return ExitCode::OK;
    }

    /**
     * This is only available in dev mode
     *
     * @return int
     */
    public function actionUninstall() {
        $uninstallMigration = new Install();

        $result = $uninstallMigration->safeDown();

        if ($result) {
            hyii::_console("Removal Done! ");
        } else {
            hyii::_console("Removal Failed!");
        }

        return ExitCode::OK;
    }

}