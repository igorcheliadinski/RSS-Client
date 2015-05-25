<?php
    class RemoteWorker {

        private $rssUrl;
        private $rssXML;

        public function __construct($rssUrl) {
            $this->rssUrl = $rssUrl;
        }

        public function getRSS() {
            $this->rssXML = file_get_contents($this->rssUrl);
            $xml = simplexml_load_string($this->rssXML, NULL, LIBXML_NOCDATA);
            return $xml;
        }
    }