<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011-2012 Armin Rüdiger Vieweg <info@professorweb.de>
 *  (c) 2013 Stanislas Rolland <typo3(arobas)sjbr.ca>
 *  (c) 2015 Simon Schmidt <sfs@marketing-factory.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

namespace SJBR\StaticInfoTables\Domain\Model;

/**
 * The Country model
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Country extends AbstractEntity
{
    /**
     * The Portugues short name
     * @var string
     */
    protected $shortNamePt = '';

    /**
     * The Portugues official name
     * @var string
     */
    protected $officialNamePt = '';

    /**
     * The Portugues capital name
     * @var string
     */
    protected $capitalPt = '';

    /**
     * Sets the Portugues short name.
     *
     * @param string $shortNamePt
     *
     * @return void
     */
    public function setShortNamePt($shortNamePt)
    {
        $this->shortNamePt = $shortNamePt;
    }

    /**
     * Gets the Portugues short name.
     *
     * @return string
     */
    public function getShortNamePt()
    {
        return $this->shortNamePt;
    }

    /**
     * Sets the Portugues short name.
     *
     * @param string $officialNamePt
     *
     * @return void
     */
    public function setOfficialtNamePt($officialNamePt)
    {
        $this->officialNamePt = $officialNamePt;
    }

    /**
     * Gets the Portugues short name.
     *
     * @return string
     */
    public function getOfficialNamePt()
    {
        return $this->officialNamePt;
    }

    /**
     * Sets the Portugues short name.
     *
     * @param string $capitalPt
     *
     * @return void
     */
    public function setCapitalPt($capitalPt)
    {
        $this->capitalPt = $capitalPt;
    }

    /**
     * Gets the Portugues short name.
     *
     * @return string
     */
    public function getCapitalPt()
    {
        return $this->capitalPt;
    }
}
