<?php
/**
 * dingtalk API: dingtalk.oapi.edu.subject.create request
 * 
 * @author auto create
 * @since 1.0, 2020.08.05
 */
class OapiEduSubjectCreateRequest
{
	/** 
	 * 学科编码（依赖元数据创建时传入元数据编码，自定义时为空）
	 **/
	private $code;
	
	/** 
	 * 学科名称
	 **/
	private $name;
	
	/** 
	 * 操作人userId
	 **/
	private $operatorUserid;
	
	private $apiParas = array();
	
	public function setCode($code)
	{
		$this->code = $code;
		$this->apiParas["code"] = $code;
	}

	public function getCode()
	{
		return $this->code;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setOperatorUserid($operatorUserid)
	{
		$this->operatorUserid = $operatorUserid;
		$this->apiParas["operator_userid"] = $operatorUserid;
	}

	public function getOperatorUserid()
	{
		return $this->operatorUserid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.subject.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkNotNull($this->operatorUserid,"operatorUserid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
