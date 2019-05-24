<?php

namespace Drupal\edibles_boxscheme\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Drupal\state_machine\Event\WorkflowTransitionEvent;

class Edibles_boxschemeEventSubscriber implements EventSubscriberInterface {

    public static function getSubscribedEvents() {
    // The format for adding a state machine event to subscribe to is:
    // {group}.{transition key}.pre_transition or {group}.{transition key}.post_transition
    // depending on when you want to react.
    $events = ['commerce_order.place.post_transition' => 'onOrderPlace'];
    return $events;
    }

    public function onOrderPlace(WorkflowTransitionEvent $event) {
    // @todo Write code that will run when the subscribed event fires.
    // kint($event);die;
    }
}