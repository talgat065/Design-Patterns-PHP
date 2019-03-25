<?php

namespace Patterns\Observer;

/**
 * Interface Subject
 * @package Patterns\Observer
 */
interface Subject
{
    /**
     * @param \Patterns\Observer\Observer $o
     */
    public function registerObserver(Observer $o): void;

    /**
     * @param \Patterns\Observer\Observer $o
     */
    public function removeObserver(Observer $o): void;

    public function notifyObservers(): void;

}