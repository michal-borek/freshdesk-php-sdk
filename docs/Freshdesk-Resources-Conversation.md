Freshdesk\Resources\Conversation
===============Conversation resourceThis provides access to the agent resources
* Class name:Conversation
* Namespace:Freshdesk\Resources* Parent class:[Freshdesk\Resources\AbstractResource](Freshdesk-Resources-AbstractResource.md)Methods
-------
###replyarray|null Freshdesk\Resources\Conversation::reply(integer $id, array $data)Reply to a ticket



* Visibility: **public**#### Arguments*$id **integer***$data **array**
###notearray|null Freshdesk\Resources\Conversation::note(integer $id, array $data)Create a note for a ticket



* Visibility: **public**#### Arguments*$id **integer***$data **array**
###updatearray|null Freshdesk\Resources\Conversation::update(integer $id, array $data)Update a resource

Updates the resources for the given $id with the supplied data/.

* Visibility: **public**#### Arguments*$id **integer** -&lt;p&gt;The resource id&lt;/p&gt;*$data **array** -&lt;p&gt;The data&lt;/p&gt;
###deletearray|null Freshdesk\Resources\Conversation::delete(\Freshdesk\Resources\Traits\in $id)Delete a resource

Delete a resource by $id

* Visibility: **public**#### Arguments*$id **Freshdesk\Resources\Traits\in** -&lt;p&gt;The resource id&lt;/p&gt;