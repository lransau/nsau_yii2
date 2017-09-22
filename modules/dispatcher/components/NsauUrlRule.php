<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 18.09.2017
 * Time: 9:14
 */

namespace app\modules\dispatcher\components;


use app\modules\dispatcher\components\Debug;
use app\modules\dispatcher\models\EngineFolders;
use app\modules\dispatcher\models\EngineNodes;
use yii\db\Query;
use yii\web\UrlRule;
use yii\base\Object;
use yii\web\UrlRuleInterface;


class NsauUrlRule extends UrlRule implements UrlRuleInterface
{

//    public function init()
//    {
//        return parent::init();
//    }

    public function parseRequest($manager, $request)
    {

        $pathInfo = trim($request->getPathInfo(), '/');
//        if(empty($pathInfo)) {
//            return ["site/index", [""=>""]];
//        }
//        $param = explode("/", $pathInfo);
//
//        Debug::debug($pathInfo);
//        $folder = EngineFolders::find()->where(['uri_part' => $pathInfo])->one();
//
//        $data = EngineNodes::find()->select('params')
//            ->where(['folder_id' => $folder->id])->one();
//
        $url = trim($request->getPathInfo(), '/');
        $parts = explode("/", $url);

        $pid = 0;
        foreach ($parts as $part) {
            $folder = EngineFolders::find()->where(['uri_part' => $part])->andWhere(['pid' => $pid])->asArray()->limit(1)->one();
            $pid = $folder['id'];
            if(isset($folder)) {
                $folders[] = $folder;
            }
        }

//        Debug::debug($pathInfo);

        if(!empty($folders)) {
            $params['url']=$pathInfo;
            return ["site/index", $params];
        } else {
            return false;
//            parent::parseRequest($manager, $request);
        }






    }

    private function findChildId($path) {

    }

}