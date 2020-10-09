<?php
/**
 * dingtalk API: dingtalk.oapi.edu.subject.list request
 * 
 * @author auto create
 * @since 1.0, 2020.08.11
 */
class OapiEduSubjectListRequest
{
	/** 
	 * 学科编码列表
	 **/
	private $codes;
	
	/** 
	 * 游标
	 **/
	private $cursor;
	
	/** 
	 * 排序方式（0:创建时间）
	 **/
	private $dataOrderType;
	
	/** 
	 * 用户id
	 **/
	private $operatorUserid;
	
	/** 
	 * 每页数据条数
	 **/
	private $size;
	
	/** 
	 * 排序规则（0:升序，1:降序）
	 **/
	private $sortType;
	
	private $apiParas = array();
	
	public function setCodes($codes)
	{
		$this->codes = $codes;
		$this->apiParas["codes"] = $codes;
	}

	public function getCodes()
	{
		return $this->codes;
	}

	public function setCursor($cursor)
	{
		$this->cursor = $cursor;
		$this->apiParas["cursor"] = $cursor;
	}

	public function getCursor()
	{
		return $this->cursor;
	}

	public function setDataOrderType($dataOrderType)
	{
		$this->dataOrderType = $dataOrderType;
		$this->apiParas["data_order_type"] = $dataOrderType;
	}

	public function getDataOrderType()
	{
		return $this->dataOrderType;
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

	public function setSize($size)
	{
		$this->size = $size;
		$this->apiParas["size"] = $size;
	}

	public function getSize()
	{
		return $this->size;
	}

	public function setSortType($sortType)
	{
		$this->sortType = $sortType;
		$this->apiParas["sort_type"] = $sortType;
	}

	public function getSortType()
	{
		return $this->sortType;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.subject.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->codes,999,"codes");
		RequestCheckUtil::checkNotNull($this->cursor,"cursor");
		RequestCheckUtil::checkNotNull($this->operatorUserid,"operatorUserid");
		RequestCheckUtil::checkNotNull($this->size,"size");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
