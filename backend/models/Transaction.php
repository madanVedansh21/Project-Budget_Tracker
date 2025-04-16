<?php

class Transaction {
    private $id;
    private $userId;
    private $amount;
    private $date;
    private $description;

    public function __construct($userId, $amount, $date, $description) {
        $this->userId = $userId;
        $this->amount = $amount;
        $this->date = $date;
        $this->description = $description;
    }

    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function getDate() {
        return $this->date;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setDescription($description) {
        $this->description = $description;
    }
}