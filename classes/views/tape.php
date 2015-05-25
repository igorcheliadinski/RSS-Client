<?php
/**
 * Created by PhpStorm.
 * User: igorcheliadinski
 * Date: 5/25/15
 * Time: 1:12 AM
 */

    class Tape {
        private $tapeObject;
        private $tapeImage;
        private $tapeTitle;

        public function __construct($jsonObj) {
            $this->tapeObject = $jsonObj;
        }

        public function constructTape() {
            $result = '<section>';
            $this->tapeImage =  '<header><a class="tapeLogo" href="' . $this->tapeObject->channel->link->__toString() . '"><img class="tapeImage" src="' . $this->tapeObject->channel->image->url . '"></a>';
            $result .= $this->tapeImage;
            $this->tapeTitle = '<h2 class="tapeTitle">' . $this->tapeObject->channel->title->__toString() . '</h2></header>';
            $result .= $this->tapeTitle;


            foreach($this->tapeObject->channel->item as $itm) {
                $result .= '<article class="news">';
                $result .= '<p class="newsTitle">' . $itm->title->__toString() . '</p></a>';
                $result .= '<div class="newsDescription">' . $itm->description->__toString() . '</div>';
                $result .= '</article>';
            }

            $result .= '</section>';

            return $result;
        }
    }