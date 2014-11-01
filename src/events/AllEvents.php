<?php

abstract class AllEvents
{

    protected $eventsToListenFor = array();
    protected $whatsProt;

    public function __construct(WhatsProt $whatsProt)
    {
        $this->whatsProt = $whatsProt;
        return $this;
    }

    public function setEventsToListenFor(array $eventList)
    {
        $this->eventsToListenFor = $eventList;
        return $this->startListening();
    }

    protected function startListening()
    {
        foreach ($this->eventsToListenFor as $event) {
            if (is_callable(array($this, $event))) {
                $this->whatsProt->eventManager()->bind($event, array($this, $event));
            }
        }
        return $this;
    }

    public function onSendMessage($mynumber, $target, $messageId, $innerNode)
    {
    }

    public function onSendMessageReceived($mynumber, $time, $from)
    {
    }

    public function onUserComposing($mynumber, $from, $type, $time)
    {
    }

    public function onUserPaused($mynumber, $from, $type, $time)
    {
    }

    public function onGetMessage($mynumber, $from, $id, $type, $time, $name, $body)
    {
    }

    public function onGroupsChatisCreated($phone, $creator, $gId, $subject)
    {
    }

    public function onGetGroupMessage($mynumber, $from_group_jid, $from_user_jid, $id, $type, $time, $name, $body)
    {
    }

    public function onGetImage(
        $mynumber, $from, $id, $type, $time, $name, $size, $url, $file, $mimetype, $filehash, $width, $height, $preview,
        $caption
    ) {
    }

    public function onGetVideo(
        $mynumber, $from, $id, $type, $time, $name, $url, $file, $size, $mimetype, $filehash, $duration, $vcodec,
        $acodec, $data, $caption
    ) {
    }

    public function onGetAudio(
        $mynumber, $from, $id, $type, $time, $name, $size, $url, $file, $mimetype, $filehash, $duration, $acodec
    ) {
    }

    public function onGetVcard($mynumber, $from, $id, $type, $time, $name, $vCardName, $vCard)
    {
    }

    public function onGetLocation($mynumber, $from, $id, $type, $time, $name, $longtitude, $latitude, $data)
    {
    }

    public function onGetPlace($mynumber, $from, $id, $type, $time, $name, $placeName, $longtitude, $latitude, $url)
    {
    }

    public function onMessageReceivedServer($mynumber, $from, $id, $type)
    {
    }

    public function onMessageReceivedClient($mynumber, $from, $id, $type, $time)
    {
    }

    public function onGetGroupSubject($mynumber, $gjid, $time, $author, $name, $data)
    {
    }

    public function onGetPresence($mynumber, $from, $type)
    {
    }

    public function onAddParticipantGroup($mynumber, $gjid, $participant)
    {
    }

    public function onRemoveParticipantGroup($mynumber, $gjid, $participant, $author)
    {
    }

    public function onPing($mynumber, $id)
    {
    }

    public function onProfilePicture($from, $type, $data)
    {
    }

    public function onGetGroupList($mynumber, $groupList)
    {
    }

    public function onGetGroupParticipants($mynumber, $groupId, $participants)
    {
    }

    public function onGetServicePricing($mynumber, $price, $cost, $currency, $expiration)
    {
    }

    public function onCreateGroupChat($mynumber, $id)
    {
    }

    public function onConnect($mynumber, $socket)
    {
        echo $mynumber . count($socket);
    }

    public function onDisconnect($mynumber, $socket)
    {
    }

    public function onClose($mynumber, $error)
    {
    }

    public function onLogin($mynumber)
    {
    }

    public function onLoginFailed($mynumber, $reason)
    {
    }

    public function onSendPresence($mynumber, $type, $name)
    {
    }

    public function onSendStatusUpdate($mynumber, $status)
    {
    }

    public function onUploadFile($mynumber, $filename, $url)
    {
    }

    public function onFailedUploadFile($mynumber, $filename)
    {
    }

    public function onMediaUploadFailed($mynumber, $id, $responseNode, $messageNode, $description)
    {
    }

    public function onMediaMessageSent($mynumber, $to, $id, $filetype, $url, $filename, $filesize, $caption, $icon)
    {
    }

    public function onRequestLastSeen($mynumber, $from, $id, $to)
    {
    }

    public function onPaidAccount($phone, $author, $kind, $status, $creation, $expiration)
    {
    }

    public function onPong($mynumber, $id)
    {
    }

    public function onFailedRequestCodeTooRecent($mynumber, $method, $reason, $retry_after)
    {
    }

    public function onFailedRequestCode($mynumber, $method, $reason, $param)
    {
    }

    public function onRequestCode($mynumber, $method, $length)
    {
    }

    public function onFailedRegisterCode($mynumber, $status, $reason, $retry_after)
    {
    }

    public function onRegisterCode(
        $mynumber, $login, $pw, $type, $expiration, $kind, $price, $cost, $currency, $price_expiration
    ) {
    }

    public function onBadCredentials($mynumber, $status, $reason)
    {
    }

    public function onGoodCredentials(
        $mynumber, $login, $pw, $type, $expiration, $kind, $price, $cost, $currency, $price_expiration
    ) {
    }

    public function onDissectPhone($mynumber, $phone)
    {
    }

    public function onFailedDissectPhone($mynumber)
    {
    }
}