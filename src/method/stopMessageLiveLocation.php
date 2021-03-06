<?php namespace api\method;

use api\response\Error;
use api\response\Message;
use api\keyboard\InlineKeyboardMarkup;

/**
 * @author MehdiKhody <khody.khoram@gmail.com>
 * @since 1.0.0
 *
 * @property int|string chat_id
 * @property int message_id
 * @property string inline_message_id
 * @property InlineKeyboardMarkup reply_markup
 *
 * @method Message|Error send()
 * @method bool hasChatId()
 * @method bool hasMessageId()
 * @method bool hasInlineMessageId()
 * @method bool hasReplyMarkup()
 * @method $this setChatId($integer)
 * @method $this setMessageId($integer)
 * @method $this setInlineMessageId($integer)
 * @method $this setReplyMarkup($markup)
 * @method $this remChatId()
 * @method $this remMessageId()
 * @method $this remInlineMessageId()
 * @method $this remReplyMarkup()
 * @method string|int getChatId($default = null)
 * @method int getMessageId($default = null)
 * @method int getInlineMessageId($default = null)
 * @method InlineKeyboardMarkup getReplyMarkup($default = null)
 */
class stopMessageLiveLocation extends Method
{

    /**
     * Every method have a response type,
     * and in this method we will return a Response.
     *
     * @return string
     */
    protected function response()
    {
        return Message::className();
    }
}