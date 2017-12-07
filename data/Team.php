<?php
/**
 * Created by PhpStorm.
 * User: zversus
 * Date: 07.12.17
 * Time: 14:18
 */

namespace Data
{
    class Team
    {
        protected $name;
        protected $total_games;
        protected $total_score;
        protected $total_skipped;

        public function __construct($name, $games, $hit, $miss)
        {
            $this->name = $name;
            $this->total_games = $games;
            $this->total_score = $hit;
            $this->total_skipped = $miss;
        }

        public function getAttackScore()
        {
            return $this->total_score / $this->total_games;
        }

        public function getSkipScore()
        {
            return $this->total_skipped / $this->total_games;
        }
    }
}