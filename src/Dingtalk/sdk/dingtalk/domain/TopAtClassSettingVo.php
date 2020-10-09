<?php

/**
 * 设置
 * @author auto create
 */
class TopAtClassSettingVo
{
	
	/** 
	 * 旷工迟到分钟数
	 **/
	public $absenteeism_late_minutes;
	
	/** 
	 * 班次id
	 **/
	public $class_id;
	
	/** 
	 * corpId
	 **/
	public $corp_id;
	
	/** 
	 * 是否删除
	 **/
	public $is_deleted;
	
	/** 
	 * 是否弹性
	 **/
	public $is_flexible;
	
	/** 
	 * 休息开始
	 **/
	public $rest_begin_time;
	
	/** 
	 * 休息结束
	 **/
	public $rest_end_time;
	
	/** 
	 * 严重迟到分钟数
	 **/
	public $serious_late_minutes;	
}
?>