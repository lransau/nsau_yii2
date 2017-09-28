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
use yii\web\UrlManager;
use Yii;

class NsauUrlRule extends UrlRule implements UrlRuleInterface
{

    public $pattern = '';
    public $route = '';





    private $config = [
        'class' => 'yii\web\UrlRule',
        'pattern' => '',
        'route' => ''
    ];


    private $_rulesFactory;


    protected function getRulesFactory()
    {
        return $this->_rulesFactory;
    }

    protected function setRulesFactory($config)
    {
        $this->_rulesFactory = Yii::createObject($config);
    }

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



//        Debug::debug($request);


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

//        $um = new UrlManager();
        foreach ($manager->rules as $rule) {
            $rule->pattern = trim($rule->pattern, '/');
            $rule->pattern = '/' . $rule->pattern . '/';









        }
//        Debug::debug($um->parseRequest($request));
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

            $this->config['pattern'] = '/department/cit/news/<controller:\w+>/<id:\d+>';
            $this->config['route'] = 'texter/<controller>';
            $this->setRulesFactory($this->config);
            $routeObj = $this->rulesFactory->parseRequest($manager, $request);


Debug::debug($routeObj);

            $q = $extended_params;
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