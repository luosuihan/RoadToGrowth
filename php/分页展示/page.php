<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/21
 * Time: 9:18
 */
class page{
        //总页数
    public $total_page = 100;
    ///每页展示条数
    public $page_nem = 3;
    /// 当前页
    public $page = 3;
    public $url = 'textPage.php';
    //连接数据库参数
   /* public $host;
    public $user;
    public $pwd;
    public $dbname;
    public $port;*/
   //展示获取到的数据
    public static $showData='';
    public  $keyword='';
    //样式展示
    function showPage(){
        //'active';
        $url = $this -> url."?page="; //获取用户选择的页面ID值
        $frit = 1;
        $first_active = $this->page == 1 ? 'active' :'';
        if($this -> keyword != ''){
//            $url = $this -> url."?showData={$this -> showData}&page=";
            $url = $this -> url ."?keyword={$this -> keyword}&page=";
        }
            //首页
            $showP = <<<HTML
    <ul class="pagination">
        <li class="$first_active"><a href="{$url}{$frit}">首页</a></li>
HTML;
            //中间页
            $middlePage = ceil($this ->total_page / $this->page_nem);
            for ($i = $this -> page -3;$i<$this -> page + 3;$i++){

                if ($i<2 || $i>$middlePage - 1){
                    continue;
                }
                $active = $this -> page == $i ? 'active' : '';
                $showP .= <<<HTML
    <li class="$active"><a href="{$url}{$i}">$i</a></li>
HTML;
            }
            //尾页
        $eqactive = $this -> page == $middlePage ? 'active' : '';
            $showP .= <<<HTML
    <li class="$eqactive"><a href="{$url}{$middlePage}">尾页</a></li>
    </ul>
HTML;
            return $showP;
    }
    //获取数据库配置文件
    public function getMysqlIni($path){
        if (file_exists($path)){
//            $headle = fopen($path);
            $headle = parse_ini_file($path,false);
        }else{
            echo '文件不存在';
        }
        return $headle;
    }
}
