<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/24
 * Time: 10:05
 */
class showData{
    public $total = 100;
    public $page = 33; //表示第几页
    public $pageNum = 3;//表示每页展示多少条数据
    public $label = '';
    public $url = 'textsmarty.php';
    //添加选择样式
    public function getData(){
        $active = $this -> url.'?page=';
        $first = 1;
        $first_active = $this->page == 1 ? 'active':'';
//        echo "page :: ".$first_active;
        $label = <<<HTML
<ul class="pagination">
    <li class="$first_active"><a href="{$active}{$first}">首页</a></li>
HTML;
        //中间页
        $sub = ceil($this->total / $this->pageNum)-1;
        for($i = $this->page -3;$i<$this->page + 3 ; $i++){
            if ($i < 2 || $i > $sub - 1){
                continue;
            }
            $middle = $this -> url.'?page=';
            $middle_active = $this->page == $i ? 'active':'';
            $label .= <<<HTML
<li class="$middle_active"><a href="{$middle}{$i}">$i</a></li>
HTML;
        }
        //尾页
        $last = $this -> url.'?page=';
//        $sunLast = $sub+1;
        $last_active = $this->page == $sub ? 'active':'';
        $label .= <<<HTML
<li class="$last_active"><a href="{$last}{$sub}">尾页</a></li>
</ul>
HTML;
        return $label;
    }
    //读取文件信息
    public function getreadfile($path){
//        echo "$path";
        if (file_exists($path)){
            $res = parse_ini_file($path,false);
        }else{
            echo '文件不存在';
        }
        return $res;
    }
}