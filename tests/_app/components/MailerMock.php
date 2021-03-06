<?php
/**
 * @copyright Copyright(c) 2016 Webtools Ltd
 * @link https://github.com/thamtech/yii2-scheduler
 * @license https://opensource.org/licenses/MIT
**/

namespace app\components;

use dektrium\user\Mailer;
use tests\codeception\_support\MailHelper;

class MailerMock extends Mailer
{
    public static $mails = [];

    protected function sendMessage($to, $subject, $view, $params = [])
    {
        /** @var \yii\mail\BaseMailer $mailer */
        $mailer = \Yii::$app->mailer;
        $mailer->viewPath = $this->viewPath;
        $body = $mailer->render($view, $params);
        MailHelper::$mails[] = [
            'body'    => $body,
            'to'      => $to,
            'subject' => $subject,
        ];
    }
}
