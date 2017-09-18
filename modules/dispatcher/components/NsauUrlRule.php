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


class NsauUrlRule extends Object implements UrlRuleInterface
{


    public function createUrl($manager, $route, $params)
    {
//        if($route==='site/index')
//        {
//            $url=trim($params['url'],'/');
//            unset($params['url']);
//
//            $parts=array();
//            if(!empty($params))
//            {
//                foreach ($params as $key=>$val)
//                    $parts[]=$key.'/'.$val;
//
//                $url .= '/'.implode('/', $parts);
//            }
//
//            return $url;
//        }
//        return false;
    }

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



        $params['url']=$pathInfo;

        return ["site/index", $params];


        return false;
    }

    private function findChildId($path) {

    }

}