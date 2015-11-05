<?php

/*
 * 
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
 * 
 */

class ThanaService extends BaseService {

    protected $thanaDao;

    /**
     * 
     * @return ThanaDao
     */
    public function getThanaDao() {
        if (!($this->thanaDao instanceof ThanaDao)) {
            $this->thanaDao = new ThanaDao();
        }
        return $this->thanaDao;
    }

    /**
     *
     * @param ThanaDao $dao 
     */
    public function setThanaDao(ThanaDao $dao) {
        $this->thanaDao = $dao;
    }

    /**
     * Get Thana list
     * @return Thana
     */
    public function getThanaList() {
        try {
            $thanaList = $this->getThanaDao()->getThanaList();
            return $thanaList;
        } catch (Exception $e) {
            throw new AdminServiceException($e->getMessage());
        }
    }

   
    /**
     *
     * @param array $searchParams 
     */
    public function searchThanas(array $searchParams) {
        try {
            return $this->getThanaDao()->searchThanas($searchParams);
        } catch (Exception $e) {
            throw new ServiceException($e->getMessage());
        }
    }

}