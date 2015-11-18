<?php

/**
 * OrangeHRM is a comprehensive Human Resource Management (HRM) System that captures
 * all the essential functionalities required for any enterprise.
 * Copyright (C) 2006 OrangeHRM Inc., http://www.orangehrm.com
 *
 * OrangeHRM is free software; you can redistribute it and/or modify it under the terms of
 * the GNU General Public License as published by the Free Software Foundation; either
 * version 2 of the License, or (at your option) any later version.
 *
 * OrangeHRM is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with this program;
 * if not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor,
 * Boston, MA  02110-1301, USA
 */
class DegreeService extends BaseService {
    
    private $degreeDao;
    
    /**
     * @ignore
     */
    public function getDegreeDao() {
        
        if (!($this->degreeDao instanceof DegreeDao)) {
            $this->degreeDao = new DegreeDao();
        }
        
        return $this->degreeDao;
    }

    /**
     * @ignore
     */
    public function setDegreeDao($degreeDao) {
        $this->degreeDao = $degreeDao;
    }
    
    /**
     * Saves an degree object
     * 
     * Can be used for a new record or updating.
     * 
     * @version 2.6.12 
     * @param Degree $degree
     * @return NULL Doesn't return a value
     */
    public function saveDegree(Degree $degree) {        
        $this->getDegreeDao()->saveDegree($degree);        
    }
    
    /**
     * Retrieves an degree object by ID
     * 
     * @version 2.6.12 
     * @param int $id 
     * @return Degree An instance of Degree or NULL
     */    
    public function getDegreeById($id) {
        return $this->getDegreeDao()->getDegreeById($id);
    }
    
    /**
     * Retrieves an education object by name
     *
     * Case insensitive
     *
     * @version 2.6.12
     * @param string $name
     * @return Education An instance of Education or false
     */
    public function getEducationByCode($code) {
    	return $this->getDegreeDao()->getDegreeByCode($code);
    }
    
    
    /**
     * Retrieves an degree object by name
     * 
     * Case insensitive
     * 
     * @version 2.6.12 
     * @param string $name 
     * @return Degree An instance of Degree or false
     */    
    public function getDegreeByName($name) {
        return $this->getDegreeDao()->getDegreeByName($name);
    }    
  
    /**
     * Retrieves all degree records ordered by name
     * 
     * @version 2.6.12 
     * @return Doctrine_Collection A doctrine collection of Degree objects 
     */        
    public function getDegreeList() {
        return $this->getDegreeDao()->getDegreeList();
    }
    
    /**
     * Deletes degree records
     * 
     * @version 2.6.12 
     * @param array $toDeleteIds An array of IDs to be deleted
     * @return int Number of records deleted
     */    
    public function deleteDegrees($toDeleteIds) {
        return $this->getDegreeDao()->deleteDegrees($toDeleteIds);
    }

    /**
     * Checks whether the given degree name exists
     *
     * Case insensitive
     *
     * @version 2.6.12
     * @param string $degreeName Degree name that needs to be checked
     * @return boolean
     */
    public function isExistingDegreeName($degreeName) {
        return $this->getDegreeDao()->isExistingDegreeName($degreeName);
    }
    
}