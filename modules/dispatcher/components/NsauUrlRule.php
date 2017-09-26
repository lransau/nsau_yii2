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

    public $connectionID = 'db';
    public $urlSuffix    = '.html';

    public function createUrl($manager, $route, $params)
    {
        if($route==='site/index')
        {
            unset($params['folder_id']);
            unset($params['main_template']);
            unset($params['module_route_params']);
            $url=trim($params['url'],'/');
            unset($params['url']);

            $parts=array();
            if(!empty($params))
            {
                foreach ($params as $key=>$val)
                    $parts[]=$key.'/'.$val;

                $url .= '/'.implode('/', $parts);
            }

            return $url;
        }
        return false;
    }

    public function parseRequest($manager, $request)
    {

        $pathInfo = trim($request->getPathInfo(), '/');
        $url = trim($request->getPathInfo(), '/');
        $parts = explode("/", $url);

        $pid = 0;
        $folder_path = '';
        $extended_params = '';
        foreach ($parts as $part) {
            $folder = EngineFolders::find()->where(['uri_part' => $part])->andWhere(['pid' => $pid])->asArray()->limit(1)->one();
            $pid = $folder['id'];
            if(isset($folder)) {
                $folder_path .= '/' . $part;
                $folders[] = $folder;
            } else {
                $extended_params .= '/' . $part;
            }
        }

        if(count($folders) > 1) {
          $finalFolder = array_pop($folders);
        } else {
          $finalFolder = $folders[0];
        }



         $extended_params = explode('/', $extended_params);
         array_shift($extended_params);

         $rules = \Yii::$app->getUrlManager()->rules[6];

        if(!empty($folders)) {



            $params['folder_id'] = $finalFolder['id'];
            $params['main_template'] = $finalFolder['main_template'];
            $params['url']=$folder_path;


            if($extended_params[0] == 'page') {
                $params['page'] = $extended_params[1];
                unset($extended_params[0], $extended_params[1]);
            }

            if(!empty($finalFolder['parser_node_id'])) {
                $module_route_params['params'] = $extended_params;
                $module_route_params['parser_node_id'] = $finalFolder['parser_node_id'];
                $params['module_route_params'] = $module_route_params;
            }


            return ["site/index", $params];
        } else {
//            echo $pathInfo;
//            $params['id'] = 39271;
//            return ["dispatcher/news/default/view", $params];
            return false;
        }






    }



}