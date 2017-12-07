<?php
/**
 * Created by PhpStorm.
 * User: zversus
 * Date: 07.12.17
 * Time: 14:03
 */

namespace Data
{
    class Data
    {
        protected $data;

        public function __construct($data)
        {
            $this->data = $data;
        }

        public function getTeam($index)
        {
            $d = $this->data[$index];
            return new Team($d['name'], $d['games'], $d['goals']['scored'], $d['goals']['skiped']);
        }

        public function getAverageScore()
        {
            $sum = 0;
            foreach ($this->data as $team)
            {
                $sum += $team['goals']['scored']/$team['games'];
            }
            return $sum/count($this->data);
        }

    }
}