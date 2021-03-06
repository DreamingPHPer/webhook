<?php
/**
 * dingtalk API: dingtalk.oapi.im.chat.scenegroup.update request
 * 
 * @author auto create
 * @since 1.0, 2020.09.26
 */
class OapiImChatScenegroupUpdateRequest
{
	/** 
	 * 群禁言，0-默认，不禁言，1-全员禁言
	 **/
	private $chatBannedType;
	
	/** 
	 * 群头像mediaId
	 **/
	private $icon;
	
	/** 
	 * 管理类型，0-默认，所有人可管理，1-仅群主可管理
	 **/
	private $managementType;
	
	/** 
	 * @all 权限，0-默认，所有人，1-仅群主可@all
	 **/
	private $mentionAllAuthority;
	
	/** 
	 * 群id
	 **/
	private $openConversationId;
	
	/** 
	 * 群主userid
	 **/
	private $ownerUserId;
	
	/** 
	 * 群可搜索，0-默认，不可搜索，1-可搜索
	 **/
	private $searchable;
	
	/** 
	 * 新成员是否可查看聊天历史消息，0-默认，否，1-是
	 **/
	private $showHistoryType;
	
	/** 
	 * 群名称
	 **/
	private $title;
	
	/** 
	 * 入群验证，0：不入群验证（默认） 1：入群验证
	 **/
	private $validationType;
	
	private $apiParas = array();
	
	public function setChatBannedType($chatBannedType)
	{
		$this->chatBannedType = $chatBannedType;
		$this->apiParas["chat_banned_type"] = $chatBannedType;
	}

	public function getChatBannedType()
	{
		return $this->chatBannedType;
	}

	public function setIcon($icon)
	{
		$this->icon = $icon;
		$this->apiParas["icon"] = $icon;
	}

	public function getIcon()
	{
		return $this->icon;
	}

	public function setManagementType($managementType)
	{
		$this->managementType = $managementType;
		$this->apiParas["management_type"] = $managementType;
	}

	public function getManagementType()
	{
		return $this->managementType;
	}

	public function setMentionAllAuthority($mentionAllAuthority)
	{
		$this->mentionAllAuthority = $mentionAllAuthority;
		$this->apiParas["mention_all_authority"] = $mentionAllAuthority;
	}

	public function getMentionAllAuthority()
	{
		return $this->mentionAllAuthority;
	}

	public function setOpenConversationId($openConversationId)
	{
		$this->openConversationId = $openConversationId;
		$this->apiParas["open_conversation_id"] = $openConversationId;
	}

	public function getOpenConversationId()
	{
		return $this->openConversationId;
	}

	public function setOwnerUserId($ownerUserId)
	{
		$this->ownerUserId = $ownerUserId;
		$this->apiParas["owner_user_id"] = $ownerUserId;
	}

	public function getOwnerUserId()
	{
		return $this->ownerUserId;
	}

	public function setSearchable($searchable)
	{
		$this->searchable = $searchable;
		$this->apiParas["searchable"] = $searchable;
	}

	public function getSearchable()
	{
		return $this->searchable;
	}

	public function setShowHistoryType($showHistoryType)
	{
		$this->showHistoryType = $showHistoryType;
		$this->apiParas["show_history_type"] = $showHistoryType;
	}

	public function getShowHistoryType()
	{
		return $this->showHistoryType;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setValidationType($validationType)
	{
		$this->validationType = $validationType;
		$this->apiParas["validation_type"] = $validationType;
	}

	public function getValidationType()
	{
		return $this->validationType;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.im.chat.scenegroup.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->openConversationId,"openConversationId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
