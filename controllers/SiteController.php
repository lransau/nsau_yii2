<?php

namespace app\controllers;

use app\modules\dispatcher\components\Dispatcher;
use app\modules\dispatcher\models\EngineNodes;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\modules\dispatcher\components\Debug;
use app\modules\dispatcher\models\EngineFolders;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     * @throws \yii\base\InvalidParamException
     */
    public function actionIndex()
    {

        $url = Yii::$app->request->get();
        $parts = explode("/", $url["url"]);

        $pid = 0;
        foreach ($parts as $part) {
            $folder = EngineFolders::find()->where(['uri_part' => $part])->andWhere(['pid' => $pid])->asArray()->limit(1)->one();
            $pid = $folder['id'];
            if(isset($folder)) {
                $folders[] = $folder;
            }
        }

        $finalFolder = array_pop($folders);

        $nodes = EngineNodes::find()->where(['folder_id' => $finalFolder['id']])->asArray()->all();



        $params[$nodes[0]['module']] = $nodes[0]['params'];//['text_id' => '1084']//$nodes[0]['params']
        Debug::debug($nodes);

        /* @var $modules Dispatcher */
        $modules = \Yii::$app->dispatcher->modules(3, [], $params);

        return $this->render('index', compact('modules'));
    }


    public function actionPage() {
        $request = Yii::$app->request;
        echo "<pre>";
             print_r($request->get());
        echo "</pre>";
    }




    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
