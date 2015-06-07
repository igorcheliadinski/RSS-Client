<?php

    class DataSaver {
        private $reqToSave;
        private $database;

        public function __construct($databaseName) {
            $this->database = $databaseName;
        }

        public function generateRequest() {
            $this->reqToSave = 'INSERT INTO ';
        }
    }