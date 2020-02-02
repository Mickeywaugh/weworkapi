<?php
/**
 * Author:  Yejia
 * Email:   ye91@foxmail.com
 */

namespace Cium\WeWorkApi\api\struct;


class Redis
{
    public $host = '127.0.0.1';
    public $port = '6379';
    public $password = '';
    public $timeout = 0;
    //增加构造函数，在创建redis对象时直接传入配置数组即可返回Redis对象
    public function __construct($config=[]){
		$this->host=$config['host']??$this->host;
		$this->port=$config['port']??$this->port;
		$this->password=$config['password']??$this->password;
		$this->timeout=$config['timeout']??$this->timeout;
	}
}
