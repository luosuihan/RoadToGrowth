<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/20
 * Time: 14:54
 */
//namespace home\model;
//use framework\dao\MVCDAO;
namespace framework\core;
use framework\dao\MVCDAO;
class Model
{
    protected $dao3;
    protected $true_table;
    public function __construct()
    {
        //初始化数据库
        $this -> initDAO();
        //初始化真实表名
        $this -> initTrueTable();
    }
    public function initDAO()
    {
        $option = $GLOBALS['config1'];
        $this -> dao3 = MVCDAO::getSingle($option);
    }
    public function initTrueTable()
    {
        $this -> true_table = '`'.$GLOBALS['config1']['table_prefix'].$this->logic_table.'`';
        /*var_dump($this -> true_table);
        die;*/
    }
    //自动查询
    public function find($where = [],$fileds = [])
    {
        if (empty($where)){
            $str_where = '';
        }else {
            $key = array_keys($where)[0];
            $value = array_values($where)[0];
            $str_where = "WHERE `$key` = '$value'";
        }
        //查询字段
        if(empty($fileds)){
            $str_fileds = '*';
        }else{
            $filed = [];
            foreach ($fileds as $k=>$v){
//                echo ",查询字段v=   `$v`";
                $filed[] =  "`$v`";
            }
            $str_fileds = implode(',',$filed);
        }
        $sql = "select $str_fileds from $this->true_table $str_where";
        return $this -> dao3 ->selectAll($sql);
    }
}