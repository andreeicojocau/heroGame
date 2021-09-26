<?php

namespace Skill;

use Entity\Fighter;

class MagicShield extends SkillAbstract
{
  /**
   * Determines if the skill applies on attack/defennd or both
   */
  protected array $appliesOn = ['defend'];

  /**
   * Chance for the spell to be activated
   */
  protected int $chance = 20;

  /**
   * Actual spell interaction
   * Does activate if doesApply is true
   * Right now only modifies damage output
   * 
   * @param string $type
   * @param int $damage
   * 
   * @return int $damage
   */
  public function activate(string $type, int $damage): int
  {
    if (!$this->doesApply($type)) {
      return $damage;
    }

    return $damage / 2;
  }
}
